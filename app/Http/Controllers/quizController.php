<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class quizController extends Controller
{
  public function new ()
  {
    return view ('/new_quiz');
  }

  public function quiz ()
  {
    return view ('/quiz');
  }
}
