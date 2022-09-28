@extends('etm_permisos::layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header bg-titulo h1 text-center font-weight-bolder text-white ">EDIT USER</div>

                <div class="card-body">
                   
                @include('etm_permisos::custom.message')

                    <br>
                    <form method="post" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')


                        <!--	enctype="{{ csrf_field() }}"-->
                        <div class="container-fluid" id="cuerpoFormulario">  

                            <nav class="breadcrumb navbar-dark bg-dark col-md-12">
                                <span class="breadcrumb-item text-white active"><b>User data</b></span>
                            </nav>

                            <div class="imagen izquierda">
                                <img class="foto1" src="{{ asset('storage/imagenes/ivan.png') }}" alt="imagen 1">
                            </div>






                            <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <img src="/storage/imagenes/{{ $user->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                                <h2>{{ $user->name }}'s Avatar</h2>
                                <!--form enctype="multipart/form-data" action="/profile" method="POST"-->
                                    <label>Update Avantar </label>
                                    <input type="file" name="avatar">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                                <!--/form-->
                            </div>
                        </div>
                    </div>

















                            <div class="form-row">

                                <div class="form-group col-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control form-control-sm" title="Name"  id="name" name="name" value="{{old('name', $user->name)}}" placeholder="Enter a name" required/> <!---readonly-->
                                    <small class="form-control-feedback"></small>
                                </div>

                                <div class="form-group col-3">
                                    <label for="user">User</label>
                                    <input type="text" class="form-control form-control-sm" title="User"  id="user" name="user" value="{{old('user', $user->user)}}" placeholder="Enter a user" required/> <!---readonly-->
                                    <small class="form-control-feedback"></small>
                                </div>

                                <div class="form-group col-3">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control form-control-sm" title="Password" id="password" name="password" value="{{old('password',  $user->password)}}" placeholder="Enter a password" required/>
                                    <small class="form-control-feedback"></small>
                                </div>

                                <div class="form-group col-3">
                                    <label for="deparment">Deparment</label>
                                    <input type="text" class="form-control form-control-sm " title="Deparment" id="deparment" name="deparment" value="{{old('deparment',  $user->deparment)}}" placeholder="Enter a deparment"/>
                                    <small class="form-control-feedback"></small>
                                </div>

                                <div class="form-group col-3">
                                    <label for="position">Position</label>
                                    <input type="text" class="form-control form-control-sm" title="Position" id="position" name="position" value="{{old('position',  $user->position)}}" placeholder="Enter a position"/>
                                    <small class="form-control-feedback"></small>
                                </div>

                              

                                
                                <div class="form-group col-3">
                                    <label for="email">Role</label>
                                    <select class="form-control form-control-sm" name="roles" id="roles">
                                        @foreach ($roles as $role)
                                        <option value="{{ $role->id}}"
                                            @isset($user->roles[0]->name)
                                            @if($role->name == $user->roles[0]->name)
                                            selected

                                            @endif
                                            @endisset
                                            
                                        
                                        
                                        
                                        >{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group col-3">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control form-control-sm" title="Email" id="email" name="email" value="{{old('email',  $user->email)}}" placeholder="Enter a email" required/>
                                    <small class="form-control-feedback"></small>
                                </div>

                                <div class="form-group col-3">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control form-control-sm" title="Phone" id="phone" name="phone" value="{{old('phone',  $user->phone)}}" placeholder="Enter a phone" />
                                    <small class="form-control-feedback"></small>
                                </div>

                                <div class="form-group col-3">
                                    <label for="cell_phone">Cell phone</label>
                                    <input type="text" class="form-control form-control-sm" title="Cell phone" id="cell_phone" name="cell_phone" value="{{old('cell_phone',  $user->cell_phone)}}" placeholder="Enter a cell phone" />
                                    <small class="form-control-feedback"></small>
                                </div>

                                <div class="form-group col-3">
                                    <label for="date_admission">Date of admission</label>
                                    <input type="text" class="form-control form-control-sm" title="Date of admission" id="date_admission" name="date_admission" value="{{old('date_admission',  $user->date_admission)}}" placeholder="Enter a date admission" />
                                    <small class="form-control-feedback"></small>
                                </div>

                                <div class="form-group col-3">
                                    <label for="date_leaving">Date of leaving</label>
                                    <input type="text" class="form-control form-control-sm" title="Date of leaving" id="date_leaving" name="date_leaving" value="{{old('date_leaving',  $user->date_leaving)}}" placeholder="Enter a date leaving" />
                                    <small class="form-control-feedback"></small>
                                </div>
                               




                                <nav class="breadcrumb navbar-dark bg-dark col-md-12">
                                    <span class="breadcrumb-item text-white active"><b>TI Permission</b></span>
                                </nav>

                                <div class="form-group col-1">
                                  <a class="btn btn-outline-success btn-sm m-1" href="{{route('role.index', $role->id)}}">Role permissions</a>
                                </div>

                            </div>

                            <div class="row justify-content-md-center">
                            <a class="btn btn-outline-danger btn-sm m-1" href="{{ route('user.index') }}">Back</a>
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

