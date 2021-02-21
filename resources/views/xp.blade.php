@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">XP</div>

                <div class="card-body">
                    <form action="/character/{{$character->id}}/xp" method="POST" class="for m-inline">
                        @csrf
                    <input type="hidden" name="id" value="{{$character->id}}">
                        <div class="container mb-3">
                            XP type
                            <select name="xp_type" class="form-control">
                                @foreach ($xpTypes as $xpType)
                                    <option value="{{$xpType->xp_type}}">{{$xpType->xp_type}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="container mb-3">

                            Måned
                            <select name="month" class="form-control">
                                @foreach ([1,2,3,4,5,6,7,8,9,10,11,12, 'Døgn'] as $m)
                                    @if ($month == $m)
                                        <option value="{{$m}}" selected>{{$m}}</option>
                                    @else
                                        <option value="{{$m}}">{{$m}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>

                        <div class="container mb-3">
                            År
                            <select name="year" class="form-control">
                                <option value="{{$year-2}}">{{$year-2}}</option>
                                <option value="{{$year-1}}">{{$year-1}}</option>
                                <option value="{{$year}}" selected>{{$year}}</option>
                            </select>
                            <p class="text-danger">{{$error}}</p>
                        </div>



                        <div class="container mb-4 form-group required">
                            Initialer
                            <input type="text" name="teacher" class="form-control required" required="required">
                        </div>

                        <button type="submit" class="btn btn-primary btn-block">Gem</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
