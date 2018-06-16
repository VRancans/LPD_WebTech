<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Submission;
use Auth;

class SubmissionsController extends Controller
{
  public function index(){
    $submissions = Submission::all();
    return view('submission')->with('submissions', $submissions);
  }
  public function show(){
    $submissions = Submission::all();
    return view('submission_view')->with('submissions', $submissions);
  }
  public function create(){
    return view('submission_create');
  }
  public function delete(){
    //
  }

  public function store(Request $request){
    $this->validate($request, [
      'title' => 'required|min:3|max:191',
      'description' => 'required|min:3',
    ]);

    $submission = new Submission;
    $submission->title = $request->input('title');
    $submission->description = $request->input('description');
    $submission->user_id = Auth::user()->id;
    $submission->save();

    return redirect('/submission')->with('submission_success', 'You have succesfully made a submission!');
  }
}
