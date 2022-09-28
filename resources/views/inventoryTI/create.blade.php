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
                <br>

                    <form method="post" action="{{ route('inventoryTI.store') }}" enctype="multipart/form-data">
                    @csrf

                    <!--	enctype="{{ csrf_field() }}"-->
                    <div class="container-fluid" id="cuerpoFormulario">  

                        <nav class="breadcrumb navbar-dark bg-dark col-md-12">
                            <span class="breadcrumb-item text-white active"><b>Basic Information</b></span>
                        </nav>

                        <div class="imagen izquierda">
                            <!--img class="foto1" src="{{old('image')}}"alt="imagen 1"-->
                        </div>



                        <div class="form-row">

                            <div class="form-group col-3">
                                <label for="hostname">Hostname</label>
                                <input type="text" class="form-control form-control-sm" title="Hostname"  id="hostname" name="hostname" value="{{old('hostname')}}" placeholder="Enter a hostname" required/> <!---readonly-->
                                <small class="form-control-feedback"></small>
                            </div>

                            <div class="form-group col-3">
                                <label for="user">User</label>
                                <!--input type="text" class="form-control form-control-sm" title="User"  id="user" name="user" value="{{old('user')}}"placeholder="Enter a user" required/--> <!---readonly-->
                                <select class="form-control form-control-sm" name="user" id="user" >
                                 <option value="">-- Select user --</option>
                               @foreach ($users as $user)
                                    <option value="{{$user ['id'] }}">{{$user ['user']}}</option>
                               @endforeach
                               </select>
                                <small class="form-control-feedback"></small>
                            </div>

                            <div class="form-group col-3">
                                <label for="brand">Brand</label>
                                 <select class="form-control form-control-sm" name="brand" id="brand" >
                                 <option value="">-- Select brand --</option>
                                @foreach ($brands as $brand)
                                        <option value="{{$brand ['id'] }}">{{$brand ['brand']}}</option>
                                @endforeach
                               </select>
                                <small class="form-control-feedback"></small>
                            </div>

                            <div class="form-group col-3">
                                <label for="serial_number">Serial Number</label>
                                <input type="text" class="form-control form-control-sm " title="Serial Number" id="serial_number" name="serial_number" value="{{old('serial_number')}}" placeholder="Enter a serial number" required/>
                                <small class="form-control-feedback"></small>
                            </div>

                            <div class="form-group col-3">
                                <label for="model">Model</label>
                                <input type="text" class="form-control form-control-sm" title="Model" id="model" name="model" value="{{old('model')}}" placeholder="Enter a model" required/>
                                <small class="form-control-feedback"></small>
                            </div>

                            <div class="form-group col-6">
                                <label for="description">Description</label>
                                <textarea class="form-control form-control-sm" title="Description" id="description" name="description" value="{{old('description')}}" placeholder="Enter a description" rows="4"></textarea>
                                <small class="form-control-feedback"></small>
                            </div>

                        
                            <nav class="breadcrumb navbar-dark bg-dark col-md-12">
                                <span class="breadcrumb-item text-white active"><b>Network Information</b></span>
                            </nav>   

                            <div class="form-group col-5">
                                <form>
                                <div class="form-group row">
                                    <label for="ip_address" class="col-sm-4 col-form-label">Ip Address</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" title="Ip Address" id="ip_address" name="ip_address" value="{{old('ip_address')}}" placeholder="xxx.xxx.xxx.xxx" />
                                    <small class="form-control-feedback"></small> 
                                    </div>

                                    <label for="mac_wifi" class="col-sm-4 col-form-label">MAC Wifi Address</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" title="Mac Wifi" id="mac_wifi" name="mac_wifi" value="{{old('mac_wifi')}}" placeholder="Enter a mac wifi" />
                                    <small class="form-control-feedback"></small> 
                                    </div>

                                    <label for="mac_ethernet" class="col-sm-4 col-form-label">MAC Address</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" title="MAC Address" id="mac_ethernet" name="mac_ethernet" value="{{old('mac_ethernet')}}" placeholder="Enter a mac ethernet" />
                                    <small class="form-control-feedback"></small> 
                                    </div>

                                    <label for="node" class="col-sm-4 col-form-label">Node</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" title="Node" id="node" name="node" value="{{old('node')}}" placeholder="Enter a node" />
                                    <small class="form-control-feedback"></small> 
                                    </div>

                                   
                                </div>
                                </form>
                            </div>

                            <div class="form-group col-2">
                                <form>
                                <div class="form-group row"></div>
                                </form>
                            </div>

                            <div class="form-group col-5">
                                <form>
                                <div class="form-group row">
                                    <label for="patch_panel" class="col-sm-4 col-form-label">Patch Panel</label>
                                    <div class="col-sm-8">
                                    <select class="form-control form-control-sm" name="patch_panel" id="patch_panel" >
                                    <option value="">-- Select patch panel --</option>
                                    @foreach ($patch_panel as $patch_panel)
                                            <option value="{{$patch_panel ['id'] }}">{{$patch_panel ['patch_panel']}}</option>
                                    @endforeach
                                    </select>
                                    <small class="form-control-feedback"></small>
                                     </div>

                                    <label for="patch_port" class="col-sm-4 col-form-label">Patch Port</label>
                                    <div class="col-sm-8">
                                    <select class="form-control form-control-sm" name="patch_port" id="patch_port" >
                                    <option value="">-- Select patch port --</option>
                                    <option value=""></option>
                                    </select>
                                    <small class="form-control-feedback"></small> 
                                    </div>

                                    <script>
                                    $('#patch_panel').on('change', function(e){
                                        console.log(e);
                                        var patch_id = e.target.value;
                                        //ajax

                                        $.get('/ajax-subport?patch_id=' + patch_id, function(data)
                                        {
                                        //succes
                                        $('#patch_port').empty();
                                        $.each(data, function(index,subportObj)
                                        {
                                            $('#patch_port').append('<option value="' +subportObj.id +'">'+subportObj.patch_port+'</option>');

                                        });
                                        });



                                    });

                                    </script>


                                   <label for="switch" class="col-sm-4 col-form-label">Switch</label>
                                    <div class="col-sm-8">
                                    <select class="form-control form-control-sm" name="switch" id="switch" >
                                    <option value="">-- Select switch --</option>
                                    @foreach ($switchs as $switch)
                                            <option value="{{$switch ['id'] }}">{{$switch ['switch']}}</option>
                                    @endforeach
                                    </select>
                                    <small class="form-control-feedback"></small>
                                    </div>

                                    <label for="switch_port" class="col-sm-4 col-form-label">Switch Port</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" title="Switch Port" id="switch_port" name="switch_port" value="{{old('switch_port')}}" placeholder="Enter a switch port" />
                                    <small class="form-control-feedback"></small> 
                                    </div>
                                </div>
                                </form>
                            </div>


                            <nav class="breadcrumb navbar-dark bg-dark col-md-12">
                                <span class="breadcrumb-item text-white active"><b>Another Information</b></span>
                            </nav>      

                            <div class="form-group col-5">
                                <form>
                                <div class="form-group row">
                                    <label for="mobile_account" class="col-sm-4 col-form-label">Mobile Acount</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" title="Mobile Acount" id="mobile_account" name="mobile_account" value="{{old('mobile_account')}}" placeholder="Enter a mobile account" />
                                    <small class="form-control-feedback"></small> 
                                    </div>

                                    <label for="imei" class="col-sm-4 col-form-label">IMEI</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" title="IMEI" id="imei" name="imei" value="{{old('imei')}}" placeholder="Enter an IMEI" />
                                    <small class="form-control-feedback"></small> 
                                    </div>    

                                    <label for="teamViewer" class="col-sm-4 col-form-label">TeamViewer</label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control form-control-sm" title="TeamViewer" id="teamViewer" name="teamViewer" value="{{old('teamViewer')}}" placeholder="Enter a TeamViewer" />
                                    <small class="form-control-feedback"></small> 
                                    </div>                                
                                </div>
                                </form>
                            </div>

                            <div class="form-group col-2">
                                <form>
                                <div class="form-group row"></div>
                                </form>
                            </div>


                            <div class="form-group col-5">
                                <form>
                                <div class="form-group row">
                                    <label for="warranty_start" class="col-sm-4 col-form-label">Warranty Start</label>
                                    <div class="col-sm-8">
                                    <input type="date" class="form-control form-control-sm" title="Warranty Start" id="warranty_start" name="warranty_start" value="{{old('warranty_start')}}" placeholder="Enter a warranty start" />
                                    <small class="form-control-feedback"></small>
                                    </div>

                                    <label for="warranty_final" class="col-sm-4 col-form-label">Warranty Final</label>
                                    <div class="col-sm-8">
                                    <input type="date" class="form-control form-control-sm" title="Warranty Final" id="warranty_final" name="warranty_final" value="{{old('warranty_final')}}" placeholder="Enter a warranty final" />
                                    <small class="form-control-feedback"></small>
                                    </div>
                                </div>
                                </form>
                            </div>

                            <nav class="breadcrumb navbar-dark bg-dark col-md-12">
                                <span class="breadcrumb-item text-white active"><b>Installed Software</b></span>
                            </nav>   

                        </div>
                            <div class="row justify-content-md-center">
                            <a class="btn btn-outline-danger btn-sm m-1" href="{{ route('inventoryTI.index') }}">Back</a>
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

