<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
//use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     //* @return \Illuminate\Http\Response
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
        if($password == $passwordConfirm) {
            User::create($dataUser);
            print_r($_FILES['picture']);
            $path = $_SERVER['DOCUMENT_ROOT'].'/storage/usersPictures/'.$_FILES['picture']['name'][1];
            print_r($path);
            //print_r($_SERVER['DOCUMENT_ROOT']);
            //return redirect(route('successPage'));
        }
        //dump($request->all());
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
//    public function update(Request $request, Product $product)
//    {
////        $product->fill($request->all());
////        $product->save();
////        return  redirect(route('admin.product.index'));
//        dump('update');
//    }

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
