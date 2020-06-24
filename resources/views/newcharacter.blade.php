@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ny karakter</div>

                <div class="card-body">

                    <form action='/c/new' method='post' autocomplete="off">
                        @csrf
                        <input type='text' name='name' placeholder='Karakterens navn' autocomplete="off"><br>
                        <input type='text' name='race' placeholder='Race'><br>
                        <input type='text' name='religion' placeholder='Religion'><br>
                        <input type='text' name='culture' placeholder='Kultur'><br>
                        <br>

                        <button tupe='submit' class='btn btn-primary'> Gem </button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
