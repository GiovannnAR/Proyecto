<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryTI extends Model
{
    use HasFactory;

    protected $table = "inventory_ti";

    protected $fillable = [
        'user_id',
        'equipment_id',
        'brand_id',
        'picture',
        'hostname',
        'serial_number', 
        'model',
        'description',
        'node',
        'switch_id',
        'patch_panel', 
        'warranty_start',
        'warranty_final',
        'mac_wifi',
        'mac_ethernet',
        'ip_address',
        'teamViewer', 
        'imei',
        'mobile_account',
        'tecel_account',
        'memory',
        'hdd', 
        'processor',
        'os', 



       ];

/*
       public function brands()
       {
          return $this->belongsTo(Brand::class, 'brand_id');
       }*/

       public function scopeBuscarpor($query, $tipo, $buscar) {
        if ( ($tipo) && ($buscar) ) {
            return $query->where($tipo,'like',"%$buscar%");
         }
        }
}

