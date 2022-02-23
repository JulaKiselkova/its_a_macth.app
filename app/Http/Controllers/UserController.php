<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
//use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return  view('turulav.signup');
    }

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
     //* @param  \Illuminate\Http\Request  $request
     //* @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $email = $request->input('email');
        $name = $request->input('name');
        $password = $request->input('password');
        $gender = $request->input('gender');
        $age = $request->input('age');
        $description = $request->input('description');
        $looking_for = $request->input('looking_for');

        $data = [$email, $name, $password, $gender, $age, $description, $looking_for];
//        $file->storeAs('newfolder', "{$name}.jpg", 'public');
//        $img = "{$name}.jpg";
        //dd(\Storage::url->putFileAs('ololo', $file, '656.jpg'));
//        dd($file->getContent());
//        //$brand = Brand::create($request->all());
//        return  redirect(route('admin.product.index'));
        //$fileUrl = Storage::url('product/images/'.$request->name.'.'.$img->getClientOriginalExtension());
        User::create($request->all());
        dump($request->all());
        //dump($request->all(), realpath($file), $name);
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
