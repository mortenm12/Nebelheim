@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Ny karakter</div>

                <div class="card-body">

                    <form action='/character/new' method='post' autocomplete="off" >
                        @csrf
                        <div class="container mb-3">
                            Klasse
                            <select name="category" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{$category->category}}">
                                        {{$category->category}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="container mb-3">
                            Karakterens navn
                            <input type='text' name='name' class="form-control">
                        </div>

                        <div class="container mb-3">
                            Race
                            <input type='text' name='race' class="form-control">
                        </div>

                        <div class="container mb-3">
                            Religion
                            <input type='text' name='religion' class="form-control">
                        </div>

                        <div class="container mb-3">
                            Kultur
                            <input type='text' name='culture' class="form-control">
                        </div>

                        <button tupe='submit' class='btn btn-primary btn-block'> Gem </button>

                    </form>
                </div>
            </div>
            <a href="/home" class='btn btn-primary col-md-12 mt-4'>Tilbage</a>
        </div>
    </div>
</div>
@endsection
