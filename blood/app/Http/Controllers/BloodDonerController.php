<?php

namespace App\Http\Controllers;

use App\Models\blood_doner;
use App\Http\Requests\Storeblood_donerRequest;
use App\Http\Requests\Updateblood_donerRequest;
use App\Models\blood_type;
use App\Models\blood_doner_needed;
use Illuminate\Http\Request;
use Validator;
use Session ;
 use Illuminate\Support\Facades\Hash;
class BloodDonerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    public function editprofile()
    {
        $blood = blood_type::all();

        $user = blood_doner::where('b_d_email' , Session::get('user_email'))->first();
        return view('blood_doner.update', compact('user','blood') );
    }
    public function index()
    {
        if(Session::has('user_email'))
        {
            $user = blood_doner_needed::where('b_d_n_email' , Session::get('user_email'))->first();
            if(isset($user)){
               $doner = blood_doner::all();
               $blood = blood_type::all();
                 return view('registration_patient.profile_patient' , compact('user','doner' , 'blood'));
            }
            else{
                $user = blood_doner::where('b_d_email' , Session::get('user_email'))->first();
                $doner = blood_doner::all();
                $blood = blood_type::all();
                return view('blood_doner.profile' , compact('user','doner' , 'blood'));
            }
        }
            return redirect('login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
   {
    if(Session::has('user_email'))
    {
        $user = blood_doner_needed::where('b_d_n_email' , Session::get('user_email'))->first();
        if(isset($user)){
           $doner = blood_doner::all();
           $blood = blood_type::all();
             return view('registration_patient.profile_patient' , compact('user','doner' , 'blood'));
        }
        else{
            $user = blood_doner::where('b_d_email' , Session::get('user_email'))->first();
            $doner = blood_doner::all();
            $blood = blood_type::all();
            return view('blood_doner.profile' , compact('user','doner' , 'blood'));
        }
    }

        $blood = blood_type::all();
        return view('blood_doner.create' )->with('blood' , $blood);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storeblood_donerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storeblood_donerRequest $request)
    {
        $input = Validator::make($request->all(),['b_d_name'=>'required|max:255' ,
        'b_d_gender'=>'required|max:255' ,
        'b_d_phone' =>'required|max:10' ,
        'b_d_address'=>'required|max:255' ,
        'b_d_email'=>'required|regex:/(.+)@(.+)\.(.+)/i|unique:blood_doners' ,
        'b_d_password'=>'required|max:255' ,
        'b_d_reprt'=>'required|max:255' ,
        'b_d_age' =>'required|max:255',
        'status' =>'required|max:255',
        'b_d_blood_type'=>'required|max:255'])->validate();

        $input['b_d_password'] = Hash::make($request->input('b_d_password'));

        if($request->file('b_d_reprt')){
            $file= $request->file('b_d_reprt');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('public/Image'), $filename);
            $input['b_d_reprt'] = "$filename";
        }

        blood_doner::create($input);
        return redirect('doner');
     blood_doner::create($input);
        return redirect('login');

}



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blood_doner  $blood_doner
     * @return \Illuminate\Http\Response
     */
    public function show(blood_doner $blood_doner)
    {
        if(Session::has('user_email'))
        {
            $user = blood_doner_needed::where('b_d_n_email' , Session::get('user_email'))->first();
            if(isset($user)){
               $doner = blood_doner::all();
               $blood = blood_type::all();
                 return view('registration_patient.profile_patient' , compact('user','doner' , 'blood'));
            }
            else{
                $user = blood_doner::where('b_d_email' , Session::get('user_email'))->first();
                $doner = blood_doner::all();
                $blood = blood_type::all();
                return view('blood_doner.profile' , compact('user','doner' , 'blood'));
            }
        }
    }
    public function alldoner(blood_doner $blood_doner)
    {
        $a= blood_doner::where('b_d_blood_type','1')->count();
        $a+= blood_doner::where('b_d_blood_type','2')->count();
        $b= blood_doner::where('b_d_blood_type','3')->count();
        $b+= blood_doner::where('b_d_blood_type','4')->count();
        $ab= blood_doner::where('b_d_blood_type','5')->count();
        $ab+= blood_doner::where('b_d_blood_type','6')->count();
        $o= blood_doner::where('b_d_blood_type','7')->count();
        $o+= blood_doner::where('b_d_blood_type','8')->count();
    return view('index',compact('a','b' ,'ab', 'o'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blood_doner  $blood_doner
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        return redirect("doneredit");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updateblood_donerRequest  $request
     * @param  \App\Models\blood_doner  $blood_doner
     * @return \Illuminate\Http\Response
     */
    public function update(Updateblood_donerRequest $request, blood_doner $blood_doner)
    {
        $input = Validator::make($request->all(),['b_d_name'=>'required|max:255' ,
        'b_d_gender'=>'required|max:255' ,
        'b_d_phone' =>'required|max:255' ,
        'b_d_address'=>'required|max:255' ,
        'b_d_age' =>'required|max:255',
        'b_d_blood_type'=>'required|max:255'])->validate();




        $user = blood_doner::where('b_d_email' , Session::get('user_email'))->first();

        blood_doner::where('b_d_email' ,Session::get('user_email') )->update($input);
        return redirect('login')->with('user' ,$user );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blood_doner  $blood_doner
     * @return \Illuminate\Http\Response
     */
    public function destroy(blood_doner $blood_doner)
    {
        //
    }
}
