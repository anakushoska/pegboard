<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Patient;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();

        return view('dashboard.patients.index')->with('patients',$patients);
    }
    public function create()
    {
        return view('dashboard.patients.add_edit');
    }

    public function store(Request $request)

    {

        $request->validate([
            "name" => "required|string|max:100",
            'gender'=> 'required|in:male,female',
            "date_of_birth"=>'required'


        ]);

        $input = $request->only(["name", "gender", "date_of_birth"]);
        $input["email"] = $request->get('email');


        $patient = new Patient($input);
        $patient->save();

        return redirect()->route("patients.index")->with("success", "New patient created");
    }

    public function destroy($id)
    {

        $patient = Patient::find($id);

            // if (!$patient){
            //     return redirect()->route('patients.index')->withErrors(["That result doesn't exist "]);
            // }
        // DB::table("results")->where("result_id", $id)->delete();
        $patient->delete();

        return redirect()->back()->with('success', "The result is deleted");
        }
}
