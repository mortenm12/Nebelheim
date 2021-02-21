@extends('layouts.app')

@section('content')
<div class="container">
    <div class=" justify-content-center">
        <div class="row">
            <span class="col-md-4 mb-3">
                <div class="card mb-3">
                    <div class="card-header">
                        Karakter ark
                        <span class="float-right font-weight-bolder">{{$character->category}}</span>
                    </div>

                        <div class="card-body ">
                            <table class="table table-striped">
                                <tr>
                                    <td>Karakter navn:</td>
                                    <td>{{$character->name}}</td>
                                </tr>

                                <tr>
                                    <td>Race:</td>
                                    <td>{{$character->race}}</td>
                                </tr>

                                <tr>
                                    <td>Religion:</td>
                                    <td>{{$character->religion}}</td>
                                </tr>

                                <tr>
                                    <td>Kultur:</td>
                                    <td>{{$character->culture}}</td>
                                </tr>

                                <tr>
                                    <td>Start dato:</td>
                                    <td>{{$character->start_time}}</td>
                                </tr>
                            </table>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        XP
                    <a href="/character/{{$character->id}}/xp" class='btn btn-primary float-right btn-sm'>Upload XP</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped">
                        @foreach ($character->getXpByType() as $xp_type => $number)
                            <tr>
                                <td >{{$xp_type}}:</td>
                                <td > {{$number}}</td>
                            </tr>
                        @endforeach
                        </table>

                    </div>
                </div>
            </span>


            <span class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Evner
                        <a href="/character/{{$character->id}}/ability/" class='btn btn-primary float-right btn-sm'>Find evner</a>
                    </div>

                    <div class="card-body">
                        <div class="row">
                        @foreach ($character->abilities as $ability)
                            <div class="col-md-6 card mb-3 ml-0 pt-2 pb-2">
                                <div class="row">
                                    <div class="col-8">
                                        <a href="/ability/{{$ability->id}}">{{$ability->name}}</a>
                                    </div>

                                    <div class="col-4 text-right">
                                        {{$ability->pivot->created_at->format('Y-m-d')}}
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </span>
        </div>
        <a href="/home" class='btn btn-primary col-md-4 float-right mt-4'>Tilbage</a>
    </div>
</div>
@endsection
