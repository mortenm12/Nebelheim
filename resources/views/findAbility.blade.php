@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Evner</div>

                <div class="card-body ">

                    <table class="table table-striped">
                        <tr>
                            <th>
                                Evne
                            </th>
                            <th>
                                XP
                            </th>
                            <th>
                                Med rabat
                            </th>
                            <th></th>

                        </tr>
                        @foreach ($abilities as $ability)
                            <tr>
                                <td>
                                <a href="/ability/{{$ability->id}}">
                                        {{$ability->name}}
                                    </a>
                                </td>
                                <td>
                                    {{$ability->cost}}
                                </td>
                                <td>
                                    {{$ability->cost - $ability->rabat($character)}}
                                </td>
                                <td >
                                    @if ($ability->canBeBougt($character))
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-block btn-primary" onclick="loadAbility('{{$ability->name}}', {{$ability->xp_types->toJson()}}, {{$ability->cost - $ability->rabat($character)}});">
                                    @else
                                        <button class="btn btn-block btn-secondary disabled">
                                    @endif
                                        Køb
                                        </button>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">

                            <div class="modal-header">
                              <h4 class="modal-title" id='abilityName'></h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <div class="modal-body" id="xps">
                                <div class="row" id="header">
                                    <div class="col-md-4 col-5"></div>
                                    <div class="col-md-2 col-4">Tilbage</div>
                                    <div class="col-md-2 col-3">Brug</div>
                                </div>
                                @foreach ($character->getXpByType() as $xpType => $num)
                                <div id="{{$xpType}}" class=" row">
                                    <div class="col-md-4 col-5 text-right">
                                        {{$xpType}}
                                    </div>
                                    <div id="{{$xpType}}tilbage" class="col-md-2 col-4 text-center">
                                        {{$num}}
                                    </div>
                                    <input type="number" min="0" max="{{$num}}" value="0" class="form-control col-md-2 col-3" onchange="updateBack('{{$xpType}}');" id="{{$xpType}}brugt">
                                </div>
                                @endforeach
                                <div class="row" id="footer">
                                    <input type="hidden" id='cost'>
                                    <div class="col-md-4 col-5"></div>
                                    <div class="col-md-2 col-4 text-right">Pris: </div>
                                    <div class="col-md-2 col-3" id="total"></div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-secondary disabled" id='buy' >Køb</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <div class='col-md-8'>
            <div class='row justify-content-center'>
                <a href="/character/{{$character->id}}" class='btn btn-primary col-md-4 mt-4'>Tilbage</a>
            </div>
        </div>
    </div>
</div>

@endsection
