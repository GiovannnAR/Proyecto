@extends('etm_permisos::layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card ">
                <!--div class="card-header">Lista de roles</div-->
                <div class="card-header bg-titulo h1 text-center font-weight-bolder text-white ">USER LIST</div>


                <div class="card-body">
                @include('etm_permisos::custom.message')


                    <br>
                    <!--iNICIA Filtrado y buscar-->
                    <div class="col-md-12">
                        <nav class="navbar navbar-light float-right">
                            <form class="form-inline">
                            <div class="input-group-append">
                                <span class="input-group-text red lighten-3" id="basic-addon1">Search for:</span>
                            </div>
                            <select name="tipo" class="form-control mr-sm-2" id="exampleFormControlSelect1">
                                <option>Search by tipe</option>
                                <option value="name">Name</option>
                                <option value="user">User</option>
                                <option value="deparment">Deparment</option>
                                <option value="position">Position</option>
                            </select>
                        <div class="input-group md-form form-sm form-2 pl-0">
                            <input name="buscarpor" class="form-control my-0 py-2 red-border" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search " aria-hidden="true"></i>  Search</button>
                        </div>
                        </div>
                            </form>
                        </nav>
                    </div>





                    <!--paginado-->
                    <div class="form-group col-md-12 row justify-content-center">
                        {{$users->links()}}
                    </div>
                    <!-- Paginado  parte superior-->
   
                    <br>
                    
                                       <br>
     
                   <!-- PARA TABLA RESPONSIVA AGREGAR table-responsive en el Class de la etiqueta Table -->
                   <div class="col-md-12">
                        <table class="table table-striped  table-bordered table-hover table-sm">
                        <thead class="thead-green">
                        <tr>
                            <th style="width: 3%" class="text-center align-middle">#</th>
                            <th style="width: 17%" class="text-center align-middle" title="Name">Name</th>
                            <th style="width: 10%" class="text-center align-middle" title="User">User</th>
                            <th style="width: 10%" class="text-center align-middle" title="Deparment">Deparment</th>
                            <th style="width: 10%" class="text-center align-middle" title="Position">Position</th>
                            <th style="width: 20%" class="text-center align-middle" title="Email">Email</th>
                            <th style="width: 10%" class="text-center align-middle" title="Roles">Role(s)</th>
                            <th style="width: 20%" class="text-center align-middle" colspan="3">Action</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                           
                            @foreach($users as $user)
                            

                            <tr>
                                <th class="text-center" scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->user}}</td>
                                <td>{{$user->deparment}}</td>
                                <td>{{$user->position}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    @isset($user->roles[0]->name)
                                    {{$user->roles[0]->name}}</td>
                                    @endisset
                                <td class="text-center">
                                    @can('view', [$user, ['user.show','userown.show'] ]) <!--policy y blindar global y especifico -->    
                                    <a class="btn btn-outline-primary" href="{{ route('user.show', $user->id)}}"><i class="fas fa-eye"></i>  Show</a>
                                    @endcan
                                </td>
                                <td class="text-center">
                                    @can('update', [$user, ['user.edit','userown.edit'] ]) <!--policy y blindar -->  
                                    <a class="btn btn-outline-secondary" href="{{ route('user.edit', $user->id)}}"><i class="fas fa-edit"></i>  Edit</a>
                                    @endcan

                                </td>

                                <td class="text-center">
                                    @can('haveaccess', 'user.destroy') <!--policy y blindar -->  
                                    <form action="{{ route('user.destroy', $user->id)}}" method ="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i>  Delete</button>
                                    </form>
                                    @endcan

                                    </td>
                                </tr>
                                @endforeach
                                                      
                        </tbody>
                        </table>


                        <!--paginado-->
                        <div class="form-group col-md-12 row justify-content-center">
                        {{$users->links()}}

                        </div>
                        <!-- Paginado  parte inferior-->
                                            
                        </div>                
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
