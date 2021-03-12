<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;
use App\Models\Drawer;

class NavController extends Controller
{
    public function home(){
        $characters = Character::all();
        return view('home', ['characters'=> $characters]);
    }

    public function drawer($id){
        $drawer = Drawer::getDrawer($id);
        //dd($drawer);
        return view('drawer', ['drawer'=>$drawer]);
    }
}
