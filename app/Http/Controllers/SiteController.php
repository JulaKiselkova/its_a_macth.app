<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function mainPage(){
        return view('turulav.main');
    }
    public function loginPage(){
        return view('turulav.login');
    }

    public function signupPage(){
        return  view('turulav.signup');
    }

    public function membersPage(){
        return  view('turulav.members');
    }

    public function successPage(){
        return  view('turulav.success');
    }
}