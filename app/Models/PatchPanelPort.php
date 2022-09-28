<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatchPanelPort extends Model
{
    use HasFactory;

    
    protected $table = "patch_port";

    protected $fillable = [
        
        'patch_port',
        'patch_panel_id',
       ];
}
