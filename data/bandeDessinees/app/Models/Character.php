<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Drawer;

class Character extends Model
{   
    public function drawer()
    {
        return $this->belongsTo(Drawer::class);
    }
}
