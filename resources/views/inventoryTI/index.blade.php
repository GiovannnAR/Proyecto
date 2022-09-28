@extends('layouts.app')

@section('content')


<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card ">
                <!--div class="card-header">Lista de roles</div-->
                <div class="card-header bg-titulo h1 text-center font-weight-bolder text-white ">EQUIPMENT</div>

                    <div class="card-body">
                    @include('custom.message')
                 
                    <!--iNICIA Filtrado y buscar-->
                    <div class="col-md-12">
                        <nav class="navbar navbar-light float-right">
                            <form class="form-inline">
                            <div class="input-group-append">
                                <span class="input-group-text red lighten-3" id="basic-addon1">Search for:</span>
                            </div>
                            <select name="tipo" class="form-control mr-sm-2" id="exampleFormControlSelect1">
                                <option>Search by type</option>
                                <option value="hosname">Hosname</option> 
                                <option value="Owner">Owner</option>
                                <option value="brand">Brand</option>
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


                    <!-- Boton nuevo-->
                    <div class="form-group col-md-12 row justify-content-md-end">
                        @can('haveaccess','inventoryTI.create') <!--policy y blindar -->
                        <a href="{{ Route('inventoryTI.create',(request()->query())) }}" class="btn btn-outline-success"><i class="fas fa-plus-square"></i>      New</a> <!--request de mas -->
                    </div>
                        @endcan

                   
                      
                    <!-- PARA TABLA RESPONSIVA AGREGAR table-responsive en el Class de la etiqueta Table -->
                    <div class="col-md-12">
                    <table class="table table-striped  table-bordered table-hover table-sm">
                    <thead class="thead-green">
                    <tr>
                        <th style="width: 3%" class="text-center align-middle">#</th>
                        <th style="width: 10%" class="text-center align-middle" title="Image">Image</th>
                        <th style="width: 10%" class="text-center align-middle" title="Hostname">Hostname</th>
                        <th style="width: 17%" class="text-center align-middle" title="Ow/Ner">Ow/Ner</th>
                        <th style="width: 15%" class="text-center align-middle" title="Brand">Brand</th>
                        <th style="width: 15%" class="text-center align-middle" title="Serial number">Serial number</th>
                        <th style="width: 10%" class="text-center align-middle" title="Model">Model</th>
                        <th style="width: 20%" class="text-center align-middle" colspan="3">Action</th> 
                    </tr>
                    </thead>
                    <tbody>
        
                        @foreach($inventories as $inventory)
                        <tr>
                            <th scope="row">{{$inventory->id}}</th>
                            
                            <td style='text-align:center; vertical-align:middle'><img src="{{asset('storage/imagenes/'.$inventory->picture) }}" height="60" width="60"></td>
                            <td>{{$inventory->hostname}}</td>
                            <td>{{$inventory->user}}</td>
                            <td>{{$inventory->brand}}</td>
                            <td>{{$inventory->serial_number}}</td>
                            <td>{{$inventory->model}}</td>
                            <td>
                                @can('haveaccess','inventoryTI.show') <!--policy y blindar -->
                                <a class="btn btn-outline-primary" href="{{ route('inventoryTI.show', $inventory->id)}}"><i class="fas fa-eye"></i>  Show</a>
                                @endcan
                            </td>
                            <td>
                                @can('haveaccess','inventoryTI.edit')     <!--policy y blindar -->
                                <a class="btn btn-outline-secondary" href="{{ route('inventoryTI.edit', $inventory->id)}}"><i class="fas fa-edit"></i>  Edit</a>
                                @endcan
                            </td>   
                            <td>
                                @can('haveaccess','inventoryTI.destroy') <!--policy y blindar -->
                                <form action="{{ route('inventoryTI.destroy', $inventory->id)}}" method ="POST">
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
                    </div>
                               
                

                </div>
            </div>
        </div>
    </div>
</div>

@endsection


