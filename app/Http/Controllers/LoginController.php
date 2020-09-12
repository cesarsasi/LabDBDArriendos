<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{

    public function login(Request $request)
    {
      $user = User::all();
      foreach ($user as $u) {
          if ($u->email == $request->email){
              if ($u->password == $request->password){
                return view('correctLogin'); 
              }
              else {
                return view('incorrectPass');
              }
          }
        }
        return view('incorrectLogin');
      }
}