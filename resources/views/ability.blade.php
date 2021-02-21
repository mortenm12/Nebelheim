@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header font-weight-bold">
                {{$ability->name}}
                [
                @foreach ($ability->xp_types as $xp)
                    @if ($loop->last)
                        {{substr($xp->xp_type,0,1)}}XP
                    @else
                    {{substr($xp->xp_type,0,1)}}XP,
                    @endif
                @endforeach
                ]

            </div>

                <div class="card-body">
                    <div>
                        <span class="font-weight-bold">Beskrivelse: </span>
                        <span>{{$ability->descr_short}}</span>
                    </div>

                    <div>
                        <span class="font-weight-bold">Brug af evnen: </span>
                        <span>{{$ability->descr_long}}</span>
                    </div>

                    <div>
                        <span class="font-weight-bold">Uden evnen: </span>
                        <span>{{$ability->descr_without}}</span>
                    </div>

                    <div>
                        <span class="font-weight-bold">Krav til udtyr: </span>
                        <span>{{$ability->equipment}}</span>
                    </div>

                    <div>
                        <span class="font-weight-bold">Krav til evner: </span>
                        <span>
                            @if ($ability->requerements->count() == 0)
                                Ingen
                            @else
                                @foreach ($ability->requerements as $req)
                                    @if ($loop->last)
                                    {{$req->name}}.
                                    @else
                                    {{$req->name}},
                                    @endif
                                @endforeach
                            @endif
                        </span>
                    </div>

                    <div>
                        <span class="font-weight-bold">Favorit evne for: </span>
                        <span>
                            @if ($ability->favorit_category->count() == 0)
                                Ingen
                            @else
                                @foreach ($ability->favorit_category as $req)
                                    @if ($loop->last)
                                    {{$req->category}}.
                                    @else
                                    {{$req->category}},
                                    @endif
                                @endforeach
                            @endif
                        </span>
                    </div>

                    <div>
                        <span class="font-weight-bold">XP: </span>
                        <span>{{$ability->cost}}</span>
                    </div>



                </div>
            </div>
        </div>
        <div class='col-md-8'>
            <div class='row justify-content-center'>
                <a href="{{ url()->previous() }}" class='btn btn-primary col-md-4 mt-4 '>Tilbage</a>
            </div>
        </div>
    </div>
</div>
@endsection
