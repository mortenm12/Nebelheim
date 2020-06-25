@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Karakter ark</div>

                <div class="card-body">

                    {{$character->name}}
                    <br>
                    {{$character->race}}
                    <br>
                    {{$character->religion}}
                    <br>
                    {{$character->culture}}
                    <br>
                    {{$character->start_time}}

                </div>
            </div>

            <div class="card">
                <div class="card-header">Evner</div>

                <div class="card-body">

                    @foreach ($character->abilities as $ability)
                        {{$ability->name}}
                    @endforeach
                    <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
