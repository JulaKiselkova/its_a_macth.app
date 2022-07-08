<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\UsersPicture;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
//use Illuminate\Http\Request;
//NEW COMMMENT

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     //* @return \Illuminate\Http\Response
     * ertyuioklp[sdfrgtyuio
     */
    public function create()
    {
        dump("The user is create");
    }

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
    public function show()
    {
        dump('show');
    }

    public function logIn() {
        dd('hello');
    }

    /**
     * Show the form for editing the specified resource.
     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        dump('edit');
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
        dump('destroy');
    }
}
