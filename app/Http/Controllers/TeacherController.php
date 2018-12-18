<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
  public function index ()
  {
    return view ('/teacherHome');
  }

  public function about ()
  {
    return view ('/about');
  }

  public function quiz ()
  {
    return view ('/teacherQuiz');
  }

}
