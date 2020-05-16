<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Game;
use App\Patient;
use App\ResultDetails;
use App\Result;
use App\Figure;
use App\Shape;
use App\Level;

class ResultController extends Controller
{
    public function create($id)
    {

        $games=Game::all();
        $game=Game::find($id);
        $figures=Figure::all();
        $levels=Level::all();
        $figuresOneThree=Figure::where("id",'=',1)
                        ->orwhere('id', '=', 3)
                        ->get();

        $shapesFigureOne=Shape::where("figure_id", Figure::STANDARD_PEGS_ID )->get();
        $shapesFigureTwo=Shape::where("figure_id", Figure::PINCH_PEGS_ID)->get();


            return view('dashboard.results.'.$game->name.'')

                ->with("figures", $figures)
                ->with("figuresOneThree", $figuresOneThree)
                ->with("game",$game)
                ->with("games",$games)
                ->with("shapesFigureOne",$shapesFigureOne)
                ->with("shapesFigureTwo",$shapesFigureTwo)
                ->with("levels",$levels);
    }

    public function store($id, Request $request)

    {
            $game=Game::find($id);

            switch($id) {

                case Game::FREESTYLE_ID:

                    $request->validate(Game::FREESTYLE_CREATION_RULES_DASHBOARD);
                    $figure=Figure::find($request->get('figure_id'));
                    if ($request->get('used') > $figure->number_of_pegs) {
                        return redirect()->back()->with('error', "The max number of used pegs can be " . $figure->number_of_pegs ."");
                    }
                             $input = $request->only(Game::FIELDS_TO_PROCESS_FREESTYLE);
                             $input['result_id']=$request->session()->get("result_id");
                             $input["game_id"]=$id;
                             $input["name"]=$game->name;

                             $resultDetails= ResultDetails::create($input);
                             $resultDetails->save();

                 return redirect()->back();
                 break;

                 case Game::SHAPE_COMPLETION_ID :
                    $request->validate(Game::SHAPE_CREATION_RULES_DASHBOARD);

                    $input = $request->only(Game::FIELDS_TO_PROCESS_SHAPE);
                    $input['result_id']=$request->session()->get("result_id");
                    $input["game_id"]=$id;
                    $input["name"]=$game->name;

                    $figure=Figure::find($input["figure_id"]);

                    if (($input['correct'] + $input['incorrect']) > $figure->number_of_pegs) {
                        return redirect()->back()->with('error', "The sum of correct and incorrect can't be greater than " . $figure->number_of_pegs ."");
                    }

                    $resultDetails= ResultDetails::create($input);
                    $resultDetails->save();
                return redirect()->back();
                break;

                case Game::PATH_FINDER_ID: case Game::FIND_HOME_ID:

                    $request->validate(Game::PATH_FINDER_FIND_HOME_CREATION_RULES_DASHBOARD );
                    $input = $request->only(Game::FIELDS_TO_PROCESS_PATH_FINDER_FIND_HOME);
                    $input['result_id']=$request->session()->get("result_id");
                    $input["game_id"]=$id;
                    $input["name"]=$game->name;

                    if($request->has("level_id")){
                        $input["level_id"]=$request->get('level_id');
                    }

                    $resultDetails= ResultDetails::create($input);
                    $resultDetails->save();
                return redirect()->back();
                break;

                 case Game::ROW_COMPLETION_ID: case Game::BLACKOUT_ID: case Game::VISUAL_TRAINING_1_ID: case Game::VISUAL_TRAINING_2_ID: case Game::SHAPE_RECOGNITION_ID :

                    $request->validate(Game::ROW_BLACKOUT_VS_SR_CREATION_RULES_DASHBOARD);
                    $input = $request->only(Game::FIELDS_TO_PROCESS_ROW_BLACKOUT_VS_SR);
                    $input['result_id']=$request->session()->get("result_id");
                    $input["name"]=$game->name;
                    $input["figure_id"]=1;

                        if($id == Game::BLACKOUT_ID ){
                            $input["figure_id"]=2;
                        }
                        if($id ==  Game::SHAPE_RECOGNITION_ID ){
                            $input["figure_id"]=2;
                        }

                        $figure=Figure::find($input["figure_id"]);

                        if (($input['correct'] + $input['incorrect']) > $figure->number_of_pegs) {
                            return redirect()->back()->with('error', "The sum of correct and incorrect can't be greater than " . $figure->number_of_pegs ."");
                        }
                    $resultDetails= ResultDetails::create($input);
                    $resultDetails->save();

                return redirect()->back();
                break;


                case Game::RANDOMIZER_ID: case Game::SMASH_A_MOLE_ID: case Game::SNAKE_TRAP_ID: case Game::MEMORY_PLACEMENT_ID: case Game::SIMON_SAYS_1_ID: case Game::SIMON_SAYS_2_ID:

                    $request->validate(Game::RANDOMIZER_MEMORY_SS_CREATION_RULES_DASHBOARD);
                    $input = $request->only(Game::FIELDS_TO_PROCESS_RANDOMIZER_MEMORY_SS);
                    $input['result_id']=$request->session()->get("result_id");
                    $input["game_id"]=$id;
                    $input["name"]=$game->name;

                    if($request->has("level_id")){
                        $input["level_id"]=$request->get('level_id');
                    }

                    $figure=Figure::find($input["figure_id"]);

                    if (($input['correct'] + $input['incorrect']) > $figure->number_of_pegs) {
                        return redirect()->back()->with('error', "The sum of correct and incorrect can't be greater than " . $figure->number_of_pegs ."");
                    }

                    $resultDetails= ResultDetails::create($input);
                    $resultDetails->save();

                return redirect()->back();
                break;

            }

    }
    public function index($id)
    {
        $patientResults=Result::where("patient_id", $id)->get();

        return view('dashboard.results.index')
        ->with("patientResults",$patientResults);

    }

    public function resultDetailsIndex($id)
    {
        $resultDetails=ResultDetails::where("result_id",$id)->get();

        return view('dashboard.resultDetails.index')
                ->with("resultDetails",$resultDetails);
    }
}
