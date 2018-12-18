<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testController extends Controller
{
    public function index ()
    {
      return view ('/home');
    }
    public function show($id)
    {
      $test = 'nilai nya ' . $id;

     //untuk insert ke table
     //DB::table('users') -> insert([
     //['username' => 'adnan', 'password' => 'happyboi']
     //]);

     //untuk update row di table
     //DB::table('users') -> update([
     //['username' => 'adnan', 'password' => 'happyboi']
     //]);

     //view table user semua kolom
      $users = DB::table('users')->get();

      //view page single.blade.php dengan passed parameter nomor di blkg page (/x) dan table users dari database
      return view ('/single', ['num' => $test, 'users' => $users]);
    }
}
