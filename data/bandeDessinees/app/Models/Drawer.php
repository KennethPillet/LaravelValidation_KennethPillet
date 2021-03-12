<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Character;

class Drawer extends Model
{
    public function characters()
    {
        return $this->hasMany(Character::class);
    }
    public static function getDrawer($id){
        return  Drawer::find($id);
    }
}
