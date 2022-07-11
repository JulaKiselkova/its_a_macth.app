<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UsersPicture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        dump($usersPictures);
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

    public function login(Request $request) {
        $data = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);
        if(auth("web")->attempt($data)) {
            $user = Auth::user();
            //dump($user);
            //$userInfo = ["id" => $user->id, "name" => $user->name, "email" => $user->email, "gender" => $user->gender, "age" => $user->age, "zodiac" => $user->zodiac, "description" => $user->description, "status" => $user->status, "looking_for" => $user->looking_for];
            //dump($userInfo);
            return redirect(route("mainPage"));
//            var_dump("pk");
        } else {
            dump("Пользователь не найден, либо данные введены не правильно");
        }
//        return redirect(route("login"))->withErrors(["email" => "Пользователь не найден, либо данные введены не правильно"]);

        //return redirect(route("login"));
        //dump('hello');
    }
    public function logout() {
        auth('web')->logout();
        return(redirect(route('mainPage')));
    }

    public function mistakePage(){
        return  view('turulav.mistake');
    }
//    public function profilePage(){
////        return view('turulav.profile', ['product' => $product]);
//        return  view('turulav.profile');
//    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

//    public function  profile(User $user)
//    {
//        return view('turulav.profile', ['user' => $user]);
//    }
//    public function  profile($id, User $user)
//    {
//        return view('turulav.profile', ['id' => $id, 'user' => $user]);
//    }
//    public function  profile(User $user)
//    {
//        return view('turulav.profile', ['user' => $user]);
//    }
}
