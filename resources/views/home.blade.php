@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Karakterer</div>

                <div class="card-body">

                    @foreach ($characters as $character)
                        <a href='/c/{{$character->id}}'>{{$character->name}}</a>
                        <br>
                    @endforeach
                    <br>

                    <a href='/c/' class='btn btn-primary'>
                        Ny karakter
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
