<?php

namespace App\Http\Controllers\InventoryTI;

use App\Http\Controllers\Controller;
use App\Models\InventoryTI;
use App\Models\Brand;
use App\Models\User;
use App\Models\PatchPanel;

use App\Models\PatchPanelPort;
use App\Models\Switchs;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;
use etm\etm_permisos\Models\Permission;


class InventoryTIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('haveaccess','inventoryTI.index');//policy


        $inventories = DB::table('inventory_ti')
        ->join('users', 'users.id', '=', 'inventory_ti.user_id')
        ->join('brands', 'brands.id', '=', 'inventory_ti.brand_id')
        ->select('inventory_ti.*', 'brands.brand','users.user')->get();


      /*  $buscar = $request->get('buscarpor');
        $tipo = $request->get('tipo');

       // $inventory = InventoryTI::orderBy('id','Desc')->buscarpor($tipo, $buscar)->paginate(10);


      

        
        $inventories = ['invent' => $invent,'inventory' => $inventory];*/

        //return $users;
        return view('inventoryTI.index', compact('inventories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        Gate::authorize('haveaccess', 'inventoryTI.create');
       // $permissions = Permission::get();

        $users = User::all();
        $brands = Brand::all();
        $patch_panel = PatchPanel::all();
        $switchs = Switchs::all();

        return view('inventoryTI.create', compact('users','brands','switchs','patch_panel'));//
    }

    /*public function indexPatchPanel($idPatchPanel){
        // deme de las provincias las que tengan region_id = a lo que llega, ordénalas por nombre y deme el nombre e id de las provincias
        return PatchPanelPort::where('patch_panel_id', $idPatchPanel)->orderBy('pacht')->lists('nombre', 'id');
    }

*/








    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InventoryTI  $inventoryTI
     * @return \Illuminate\Http\Response
     */
    public function show(InventoryTI $inventoryTI)
    {
        Gate::authorize('haveaccess','inventoryTI.show');
        $permissions = Permission::get();



        $inventories = DB::table('inventory_ti')
        ->join('users', 'users.id', '=', 'inventory_ti.user_id')
        ->join('brands', 'brands.id', '=', 'inventory_ti.brand_id')
        ->select('inventory_ti.*', 'brands.brand','users.user')->get();

        $inventoryTI = InventoryTI::find($inventoryTI->id);        
      
        return view('inventoryTI.show',compact('inventoryTI','permissions'));
        
    }




    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InventoryTI  $inventoryTI
     * @return \Illuminate\Http\Response
     */
    public function edit(InventoryTI $inventoryTI)
    {
        
        return view('inventoryTI.edit',compact('inventoryTI'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InventoryTI  $inventoryTI
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InventoryTI $inventoryTI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InventoryTI  $inventoryTI
     * @return \Illuminate\Http\Response
     */
    public function destroy(InventoryTI $inventoryTI)
    {
        //
    }
}
