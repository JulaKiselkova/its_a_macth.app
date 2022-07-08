<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UsersPicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $users = User::paginate(15);
        $numberOfUsers = User::all()->count();
        $usersPictures = UsersPicture::all()->where('file_name', 0);
        foreach ($usersPictures as $pic) {
            dump($pic->picture);
        }
        dump($numberOfUsers);

//        $test = DB::table('users')->join('users_pictures', 'id', '=', 'users_id')->select('picture');
//        foreach ($test as $t) {
//            dump($t);
//        }

        $data = [
            'numberOfUsers' => $numberOfUsers,
            'usersPictures' => $usersPictures,
            'users' => $users
        ];
        return  view('turulav.members', $data);
    }

    public function successPage(){
        return  view('turulav.success');
    }
}
