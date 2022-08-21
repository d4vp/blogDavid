@extends('layouts.app')

@section('title','Register')

@section('content')

<div class="blog mx-auto my-12 p-8 bg-white w-1/3 border-gray-200 rounded-ld shadow-lg">

<h1 class="text-3xl text-center font-bold">Register</h1>

<form class="mt-4" method="POST" action="">
    @csrf

    <input type="text" class="border-gray-200 rounded-md bg-gray-200 w-full text-lg 
    placeholder-gray-500 p-2 my-2 focus:bg-white" placeholder="Name" id="name" name="name">

    @error('name')

        <p class="border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>

    @enderror

    <input type="email" class="border-gray-200 rounded-md bg-gray-200 w-full text-lg 
    placeholder-gray-500 p-2 my-2 focus:bg-white" placeholder="Email" id="email" name="email">

    @error('email')

        <p class="border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>

    @enderror

    <input type="password" class="border-gray-200 rounded-md bg-gray-200 w-full text-lg 
    placeholder-gray-500 p-2 my-2 focus:bg-white" placeholder="Password" id="email" name="password">

    @error('password')

        <p class="border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">* {{ $message }}</p>

    @enderror

    <input type="password" class="border-gray-200 rounded-md bg-gray-200 w-full text-lg 
    placeholder-gray-500 p-2 my-2 focus:bg-white" placeholder="Password confirmation" id="password_confirmation" name="password_confirmation">

    <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold 
    p-2 my-3 hover:bg-indigo-600">
        Send
    </button>

</form>

</div>

@endsection