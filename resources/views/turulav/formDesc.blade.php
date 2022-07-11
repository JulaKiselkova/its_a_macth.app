@extends('turulav.layouts.index')
@section('content')
    <form action="{{route('update', ['user' => $user])}}" method="POST" enctype="multipart/form-data">
{{--        @csrf--}}
{{--        {{$user = User::find(157)}}--}}
        {{$user = Auth::user()}}
        <p> FORM       </p>
        <p> FORM       </p>
        <p> FORM       </p>
        <p> FORM       </p>
        <p> FORM       </p>
        <p> FORM       </p>
        <p> FORM       </p>
        <p>{{$user->id}}</p>
        @csrf
        @method('PUT')
        <p>this is {{$user->id}}</p>
        <input type="text" name="description" value="{{$user->description}}">
        <br>
        <button type="submit">Send</button>
    </form>
@endsection
