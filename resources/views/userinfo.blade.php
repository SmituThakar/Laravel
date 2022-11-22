@extends('main')

@section('main-section')
    User info
@endsection

<title> FORM </title>

<h1> Fill Form </h1>
<fieldset>
    <legend>FILL THE FORM</legend>
<form action="/user-info" method="POST">
    @csrf
    <input type="text" name="name" placeholder="name" value="{{old('name')}}"><br>
    @error('name')
        {{$message}}<br>
    @enderror
    <input type="text" name="email" placeholder="email" value="{{old('email')}}"><br>
    @error('email')
        {{$message}}<br>
    @enderror
    <input type="password" name="password" placeholder="password" ><br>
    @error('password')
        {{$message}}<br>
    @enderror
    <input type="password" name="confirm_password" placeholder="confirm_password"><br>
    @error('confirm_password')
        {{$message}}<br>
    @enderror
    <input type="submit" value="submit">
</form>
</fieldset>