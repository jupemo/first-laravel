@extends('layouts.master')

@section('content')
        <div class="row">
        <div class="col-sm-4">
            <img src="{{$pelicula['poster']}}" alt= "{{$pelicula['title']}}" width="300">   

        </div>
        <div class="col-sm-8">

            <h2> <strong>Title :</strong> {{$pelicula['title']}} </h2>
            <h5> <strong>Year :</strong> {{$pelicula['year']}} </h5>
            <h5> <strong>Director : </strong> {{$pelicula['director']}}  </h5>
            <p> <strong>Synopsis: </strong> {{$pelicula['synopsis']}}</p>
            <p> <strong> Rentend :</strong> {{$pelicula['rented']?'Pelicula actualmente alquilada':'Pelicula disponible' }}</p>
            
            @if($pelicula['rented'])
            <a class="btn btn-danger" >Return film</a>
            @else
            <a class="btn btn-primary">Rent</a>
            @endif
            <a class="btn btn-warning"  href="{{ url('/catalog/edit/' . $id ) }}">Edit film</a>
            <a class="btn btn-secondary">Go Back</a>



        </div>


    </div>
@stop