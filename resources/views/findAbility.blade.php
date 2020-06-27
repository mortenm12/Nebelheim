@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Evner</div>

                <div class="card-body">

                    <table class="table table-striped">
                        <tr>
                            <th>
                                Evne
                            </th>
                            <th>
                                Pris
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
                                <td >
                                    @if ($ability->canBeBougt($character))
                                        <a href="" class="btn btn-block btn-primary">
                                    @else
                                        <a class="btn btn-block btn-secondary disabled">
                                    @endif
                                        Køb
                                        </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
