@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-titulo h1 text-center font-weight-bolder text-white ">CREATE ROLE</div>

                <div class="card-body">
                   
                @include('custom.message')

                    <br>
                    <form method="post" action="{{ route('role.store') }}" enctype="multipart/form-data">
                    @csrf

                        <!--	enctype="{{ csrf_field() }}"-->
                        <div class="container-fluid" id="cuerpoFormulario">  

                            <nav class="breadcrumb navbar-dark bg-dark col-md-12">
                                <span class="breadcrumb-item text-white active"><b>Data to create a role</b></span>
                            </nav>
                

                                <div class="form-group">
                                    <label for="numero_control">Name</label>
                                    <input type="text" class="form-control form-control-sm" title="Name"  id="name" name="name" value="{{old('name')}}" placeholder="Enter a role" required/> <!---readonly-->
                                    <small class="form-control-feedback"></small>
                                </div>

                                <div class="form-group">
                                    <label for="numero_parte">Slug</label>
                                    <input type="text" class="form-control form-control-sm" title="Slug" id="slug" name="slug" value="{{old('slug')}}" placeholder="Enter a slug" required/>
                                    <small class="form-control-feedback"></small>
                                </div>

                                <div class="form-group">
                                    <label for="cliente">Description</label>
                                    <textarea class="form-control form-control-sm" title="Description" id="description" name="description" placeholder="Enter a description" rows="4" required>{{old('description')}}</textarea><!--verificar el value-->
                                    <small class="form-control-feedback"></small>
                                </div>

                                <h4>Full access</h4>

                                <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="full-accessyes" name="full-access" class="custom-control-input" value="yes">     
                                @if(old('full-access')=="yes")
                                checked
                                @endif
                                <label class="custom-control-label" for="full-accessyes">Yes</label>
                                </div>


                                <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="full-accessno" name="full-access" class="custom-control-input" value="no" 
                                @if(old('full-access')=="no")
                                 checked

                                @endif
                                @if(old('full-access')===null)
                                    checked
                                @endif
                                >
                                <label class="custom-control-label" for="full-accessno">No</label>
                                </div>


                                <hr>


                                <nav class="breadcrumb navbar-dark bg-dark col-md-12">
                                <span class="breadcrumb-item text-white active"><b>Permission</b></span>
                                </nav>

                                @foreach($permissions as $permission)
                                <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="permission_{{$permission->id}}" value="{{$permission->id}}" name="permission[]"
                                @if(is_array(old('permission')) && in_array("permission->id", old('permission')) )
                                    checked
                                @endif
                                >
                                    <label class="custom-control-label" for="permission_{{$permission->id}}">
                                        {{$permission->id}}
                                        -
                                        {{$permission->name}}
                                        <em>({{$permission->description}})</em>

                                    </label>
                                </div>
                            @endforeach

                            <hr>

                            <div class="row justify-content-md-center">
                            <a class="btn btn-outline-danger btn-sm m-1" href="{{ route('role.index') }}">Back</a>
                            <input class="btn btn-outline-success btn-sm m-1" type="submit" value="Save">


                            </div>



                        </div>       
                    </form>




                </div>

			</div>
		</div>
	</div>
</div>

@endsection

