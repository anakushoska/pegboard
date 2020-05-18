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

                if ($id == Game::FREESTYLE_ID){

                    $request->validate(Game::FREESTYLE_CREATION_RULES_DASHBOARD);
                    $figure=Figure::find($request->get('figure_id'));
                        if ($request->get('used') > $figure->number_of_pegs) {
                            return redirect()->back()->with('error', "The max number of used pegs can be " . $figure->number_of_pegs ."");
                        }
                             $input = $request->only(Game::FIELDS_TO_PROCESS_FREESTYLE);}

                if (($id == Game::PATH_FINDER_ID) || ($id == Game::FIND_HOME_ID)){


                    $request->validate(Game::PATH_FINDER_FIND_HOME_CREATION_RULES_DASHBOARD );

                    $figure=Figure::find($request->get('figure_id'));
                    if ($request->get('used') > $figure->number_of_pegs) {
                        return redirect()->back()->with('error', "The max number of used pegs can be " . $figure->number_of_pegs ."");
                    }
                    $input = $request->only(Game::FIELDS_TO_PROCESS_PATH_FINDER_FIND_HOME);


                    if($request->has("level_id")){
                        $input["level_id"]=$request->get('level_id');}
                    }

                else{

                    $request->validate(Game::STANDARD_CREATION_RULES_DASHBOARD);
                    $input = $request->only(Game::FIELDS_TO_PROCESS_STANDARD);

                    switch($id){
                        case Game::ROW_COMPLETION_ID: case Game::BLACKOUT_ID: case Game::VISUAL_TRAINING_1_ID: case Game::VISUAL_TRAINING_2_ID:
                                $request->validate([
                                    "game_id" => "required|integer|min:1",
                                ]);

                                $input["game_id"]=$request->get("game_id");
                                $input["figure_id"]=1;

                                        if($id == Game::BLACKOUT_ID ){
                                            $input["figure_id"]=2;
                                        }
                                        if($id ==  Game::SHAPE_RECOGNITION_ID ){
                                            $input["figure_id"]=2;
                                        }

                                break;

                        case Game::SHAPE_COMPLETION_ID :case Game::RANDOMIZER_ID: case Game::SMASH_A_MOLE_ID: case Game::SNAKE_TRAP_ID: case Game::MEMORY_PLACEMENT_ID: case Game::SIMON_SAYS_1_ID: case Game::SIMON_SAYS_2_ID:

                            $input["game_id"]=$id;

                            $request->validate([
                                "figure_id" => "required|integer|min:1",
                            ]);
                            $input["figure_id"]=$request->get("figure_id");

                            if ($request->has("level_id")){
                                $input["level_id"]=$request->get("level_id");
                            }

                            if ($request->has('target')){
                                $input["target"]=$request->get("target");
                            }

                            if ($id == Game::SHAPE_COMPLETION_ID) {

                                $request->validate([
                                    "shape_id" => "required",
                                ]);
                                $input["shape_id"]=$request->get("shape_id");
                            }


                        break;
                    }
                    $figure=Figure::find($input['figure_id']);
                    if (($input['correct'] + $input['incorrect']) > $figure->number_of_pegs) {
                        return redirect()->back()->with('error', "The sum of correct and incorrect can't be greater than " . $figure->number_of_pegs ."");
                    }

                }

            $input['result_id']=$request->session()->get("result_id");
            $input["name"]=$game->name;
            $resultDetails= ResultDetails::create($input);
            $resultDetails->save();

     return redirect()->back()->with('success', "The game results are saved");


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
