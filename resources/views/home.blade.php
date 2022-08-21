@extends('layouts.app')

@section('title','home')

@section('content')

    <h1 class="text-5xl text-center pt-24">Welcome to SofOnBike</h1>

    <div class="blog mx-auto my-12 p-8 bg-white w-1/3 border-gray-200 rounded-ld shadow-lg">
        <form action="{{route('cursos.store')}}" method="POST">
            @csrf
        
            <label>
                Nombre:
                <br>
                <input type="text" placeholder="Nombre del curso" name="name"/>
                <!-- <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Descripcion del curso"> -->
        
            </label>
            <br>
            <label>
                Descripción:
                <br>
                <input type="text" placeholder="Descripcion del curso" name="descripcion"/>
                <!-- <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Descripcion del curso"> -->
            </label>
            <br>
            <!-- <button type="submit">ENVIAR</button> -->
            <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg text-white font-semibold 
            p-2 my-3 hover:bg-indigo-600">ENVIAR</button>
        
            </form>
    </div>


@endsection