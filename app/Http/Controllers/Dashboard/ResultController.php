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
use Illuminate\Support\Facades\DB;

class ResultController extends Controller
{
    public function index()
    {

        $results=Result::all();

        return view('dashboard.results.index_all')
        ->with("patients")
        ->with("results",$results);

    }

    public function create($id)
    {

        $game=Game::find($id);
        $games=Game::all();
        $figures=Figure::leftjoin("figure_game", "figure_game.figure_id", "=", "figures.id")
                            ->where("figure_game.game_id",$id)
                            ->distinct()
                            ->select("figures.*")
                            ->get();

                            // $figures=$game->figures->groupBy('id');



        $childrenGames=$game->childrenGames;
        $figureLevels=DB::table("figure_game")
                            ->join('figures', 'figures.id', '=', 'figure_game.figure_id')
                            ->where("game_id", $id)
                            ->get();

            return view('dashboard.results.add_edit')
                        ->with("figureLevels", $figureLevels)
                        ->with("childrenGames",$childrenGames)
                        ->with("figures",$figures)
                        ->with("game",$game)
                        ->with("games",$games);

    }


    public function store($id, Request $request)

    {

            $game=Game::find($id);
            $figures=$game->figures->groupBy('id');

            if($figures->count() > 1){
                $request->validate(["figure_id" => "required|integer|min:1"]);
                $input["figure_id"]=$request->get("figure_id");
            }else {
                $input["figure_id"]=array_key_first($figures->toArray());
            }

                    $figure=Figure::find($input["figure_id"]);
                    $figureLevel=DB::table("figure_game")->where("game_id", $id)
                                    ->where("figure_id", $input["figure_id"])
                                    ->first();

            if($figureLevel->level){
                $request->validate(["level_id" => "required"]);
                $input["level_id"]=$request->get("level_id");

            }
            $input["target"]=$request->get("target");

            if($game->childrenGames->count()){
                $request->validate(["game_id" => "required|integer"]);
                $input["game_id"]=$request->get("game_id");
                $input["target"]=$request->get("target");
            } else {

                $input["game_id"]=$game->id;
            }

                $request->validate(["time" => "required|integer"]);
                $input["time"]=$request->get("time");


            if (($id == Game::FREESTYLE_ID) || ($id == Game::PATH_FINDER_ID) || ($id == Game::FIND_HOME_ID)){
                $request->validate(["used" => "required|integer"]);

                if ($request->get('used') > $figure->number_of_pegs) {
                    return redirect()->back()->with('error', "The max number of used pegs can be " . $figure->number_of_pegs ."");
                }
                $input["used"]=$request->get("used");


                if (($id == Game::PATH_FINDER_ID) || ($id == Game::FIND_HOME_ID)){
                    $request->validate(["success" => "required|integer"]);
                    $input["success"]=$request->get("success");

                }
                if ($id == Game::FREESTYLE_ID){
                    $input["avg_time"]=$input["time"] / $input["used"];
                }
            } else {

                $request->validate(["correct" => "required|integer", "incorrect" => "required|integer"]);
                $input["correct"]=$request->get("correct");
                $input["incorrect"]=$request->get("incorrect");


                if (($input['correct'] + $input['incorrect']) > $figure->number_of_pegs) {
                    return redirect()->back()->with('error', "The sum of correct and incorrect can't be greater than " . $figure->number_of_pegs ."");
                }

                $input["avg_time"]=$input["time"] / $input["correct"];
                $input["success_rate"]=$input["correct"] / $input["target"];
            }

                $input['result_id']=$request->session()->get("result_id");
                $input["name"]=$game->name;
                $resultDetails= ResultDetails::create($input);
                $resultDetails->save();

         return redirect()->back()->with('success', "The game results are saved");
    }
    public function destroy($id)
    {

    $result = Result::find($id);

        if (!$result){
            return redirect()->route('results.index')->withErrors(["That result doesn't exist "]);
        }
    $result->delete();

    return redirect()->back()->with('success', "The result is deleted");
    }

    public function resultsPatient($id)
    {
        $patient=Patient::find($id);
        $results=Result::with("patient")->where("patient_id", $id)->get();

        return view('dashboard.results.index')
        ->with("results",$results)
        ->with("patient",$patient);


    }

    public function resultDetailsIndex($id)
    {
        $result=Result::find($id);
        $patient=$result->patient;
        $resultDetails=ResultDetails::with("figure")->with("game")->where("result_id",$id)->get();


        return view('dashboard.resultDetails.index')
                ->with("resultDetails",$resultDetails)
                ->with("result",$result)
                ->with("patient", $patient);
    }
}
