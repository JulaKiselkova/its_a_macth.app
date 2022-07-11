<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\UsersPicture;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
//use App\Models\Product;
use Illuminate\Support\Facades\Auth;

//use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     //* @return \Illuminate\Http\Response
     * ertyuioklp[sdfrgtyuio
     */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(UserRequest $request)
    {
        $email = $request->input('email');
        $name = $request->input('name');
        $passwordHash = password_hash($request->input('password'),PASSWORD_BCRYPT);
        $zodiac = $request->input('zodiac');
        $gender = $request->input('gender');
        $age = $request->input('age');
        $description = $request->input('description');
        $looking_for = $request->input('looking_for');
        $password = $request->input('password');
        $passwordConfirm = $request->input('passwordConfirm');

        $dataUser = [
            'name' => $name,
            'email' => $email,
            'password' => $passwordHash,
            'gender' => $gender,
            'age' => $age,
            'zodiac' => $zodiac,
            'description' => $description,
            'looking_for' => $looking_for
        ];
        if($password == $passwordConfirm && $age>=18) {
            $user = User::create($dataUser);
            $id = $user->id;
            $this->addFiles($id, $user);
            return redirect(route('successPage'));
        } else {
            return redirect(route('mistakePage'));
        }
    }

    public function addFiles($id, User $user) {
        $path = 'storage/usersPictures/'.$id;
        mkdir($path);
        for($i = 0; $i < count($_FILES['picture']['tmp_name']); $i++) {
            $fullType = $_FILES['picture']['type'][$i];
            $arrType = explode("/", $fullType);
            if (!file_exists($path.'/'.$this->rename($i)) && $arrType[0] === 'image') {
                move_uploaded_file($_FILES['picture']['tmp_name'][$i], $path . '/' . $this->rename($i));//добавление в папку
            }
            $dataUsersPicture = [
                'users_id' => $user->id,
                'picture' => $path.'/'.$this->rename($i),
                'file_name' => $i
            ];
            UsersPicture::create($dataUsersPicture);
        }
    }

    public function rename($number) {
        $fullType = $_FILES['picture']['type'][$number];
        $arrType = explode("/", $fullType);
        return $number.'.'.$arrType[1];
    }
    /**
     * Display the specified resource.
     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
     */
    public function  profile(User $user)
    {
        if (Auth::check()) {
            $certainUser = Auth::user();
            return view('turulav.profile', ['user' => $user, 'id' => $certainUser->id]);
        } else {
            return view('turulav.attention');
        }
    }


    public function logIn() {
        dd('hello');
    }

    public function logout() {
        auth('web')->logout();
        return(redirect(route('mainPage')));
    }

//    public function update(Request $request, User $user)
//    {
//        $user->fill($request->all());
//        $user->save();
//        dump('done');
//        //return  redirect(route('admin.product.index'));
//    }



    /**
     * Show the form for editing the specified resource.
     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = Auth::user();
        return view('turulav.formDesc', ['user' => $user]);
        //return view('turulav.formDesc', compact('user' ));
    }

    public function update( Request $request)
    {
        $user = Auth::user();
        $id = $user->id;
        $request->validate([
            'description' => 'required',
        ]);
        //$user->fill($request->all());
        //$user->update($request->all());

        $user = User::find($id);
        $user->description = $request->get('description');
        $user->save();

        //$user->save();
        //$user->update($request->all());
        //$user->fill($request->all());
        //$user->save();
        return view('turulav.profile', ['user' => $user, 'id' => $user->id]);
        //dump($id);
        //return  redirect(route('admin.product.index'));
    }


    /**
     * Update the specified resource in storage.
     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
     */

    /**
     * Remove the specified resource from storage.
     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $user = Auth::user();
        $id = $user->id;
        $user::find($id)->delete();
        auth('web')->logout();
        return  redirect(route('successPage'));
    }
}
