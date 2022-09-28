@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header bg-titulo h1 text-center font-weight-bolder text-white ">Avatar</div>

                <div class="card-body">
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <img src="/storage/imagenes/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                                <h2>{{ $user->name }}'s Avatar</h2>
                                <form enctype="multipart/form-data" action="/profile" method="POST">
                                    <label>Update Avantar </label>
                                    <input type="file" name="avatar">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection