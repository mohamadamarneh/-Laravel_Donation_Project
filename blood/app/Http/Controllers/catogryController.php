<?php

namespace App\Http\Controllers;
use App\Models\blood_doner;
use Illuminate\Http\Request;

class catogryController extends Controller
{

    public function dataA (){
        $a= blood_doner::all()->where('b_d_blood_type','1');
        $_a = blood_doner::all()->where('b_d_blood_type','2');
        $c= blood_doner::where('b_d_blood_type','1')->count();
        $c+= blood_doner::where('b_d_blood_type','2')->count();
        $A = array($a ,$_a );
        return view('catogryA',compact('A' , 'c'));
    }
    public function dataB (){

        $b= blood_doner::all()->where('b_d_blood_type','3');
        $_b= blood_doner::all()->where('b_d_blood_type','4');
        $c= blood_doner::where('b_d_blood_type','3')->count();
        $c+= blood_doner::where('b_d_blood_type','4')->count();
        $B = array($b ,$_b );
        return view('catogryB',compact('B', 'c'));
    }
    public function dataAB (){

        $ab= blood_doner::all()->where('b_d_blood_type','5');
        $_ab= blood_doner::all()->where('b_d_blood_type','6');
        $c= blood_doner::where('b_d_blood_type','5')->count();
        $c+= blood_doner::where('b_d_blood_type','6')->count();
        $AB = array($ab ,$_ab);
        return view('catogryAB',compact('AB', 'c'));
    }
    public function dataO (){

        $o= blood_doner::all()->where('b_d_blood_type','7');
        $_o= blood_doner::all()->where('b_d_blood_type','8');
        $c= blood_doner::where('b_d_blood_type','7')->count();
        $c+= blood_doner::where('b_d_blood_type','8')->count();
        $O = array($o ,$_o);
        return view('catogryO',compact('O', 'c'));
    }

}
