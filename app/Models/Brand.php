<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{

    
    use HasFactory;

    //protected $primaryKey = 'brand_id';
    protected $table = "brands";
    protected $fillable = [
        'brand',
        'description',        

       ];


       public function inventoryTI()
        {
            return $this->hasMany('App\Model\InventoryTI');
       // return $this->hasMany(InventoryTI::class);
        }
}
