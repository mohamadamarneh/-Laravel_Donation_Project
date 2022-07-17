<?php

namespace App\Http\Controllers\dashbord;

use App\Models\toDo;
use App\Models\blood_type;
use App\Models\blood_doner;
use App\Models\admin;
use App\Models\contact;
// use Illuminate\Support\Facades\DB;
use App\Models\blood_doner_needed;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class adminIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashbord.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  *************** Add Admin ***  *********************
    public function createAdmin()
    {

            $userAdmin = admin::findorFail(Session::get('userId'));
            if ($userAdmin->roll == 1) {
                $d = blood_doner::all();
                $name = admin::all()->where('roll', '1');


                $u = blood_doner::all()->count();
                // $d = blood_doner::all();
                // $data=session('d');

                $mes = contact::orderBy('updated_at', 'desc')->paginate(4);

                $todo = toDo::orderBy('updated_at', 'desc')->paginate(4);
                $s = blood_doner_needed::all()->count();
                $a = admin::all()->where('roll', '1')->count();
                // $userAdmin = admin::findorFail(Session::get('userId'));
                return view('dashbord.signup',compact('u', 's', 'a', 'name', 'todo', 'mes', 'd', 'userAdmin'));
            }
            else{
                return view('dashbord.loginAdmin');
            }

    }
    public function storeAdmin(Request $request)
    {

        // $this->validate($request,[
        //     'name' => 'required',
        //     'email' => 'required|email|unique:admins|max:255',
        //     'phonr'=>'required|unique:admins|max:10|min:10',
        //     'password' => 'required',
        // ]);



        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        admin::create($input);

        return view('dashbord.signin')->with('status', 'You are now signed up');
    }
    //  *************** //Add Admin ***  *********************



    //  *************** Login Admin ***  *********************
    public function showloginAdmin()
    {
        if (Session::has('userId')) {
            $d = blood_doner::all();
            $name = admin::all()->where('roll', '1');


            $u = blood_doner::all()->count();
            // $d = blood_doner::all();
            // $data=session('d');

            $mes = contact::orderBy('updated_at', 'desc')->paginate(4);

            $todo = toDo::orderBy('updated_at', 'desc')->paginate(4);;
            $s = blood_doner_needed::all()->count();
            $a = admin::all()->where('roll', '1')->count();
            $userAdmin = admin::findorFail(Session::get('userId'));
            return view('dashbord.index', compact('u', 's', 'a', 'name', 'todo', 'mes', 'd', 'userAdmin'));
            // return redirect('admin')->with('admin',$userAdmin);

        }
        return view('dashbord.signin');
    }


    public function showreport($id)
    {
        if (Session::has('userId')) {
            $d = blood_doner::all();
            $name = admin::all()->where('roll', '1');


            $u = blood_doner::all()->count();
            // $d = blood_doner::all();
            // $data=session('d');
            $single=blood_doner::find($id);
            $mes = contact::orderBy('updated_at', 'desc')->paginate(4);

            $todo = toDo::orderBy('updated_at', 'desc')->paginate(4);;
            $s = blood_doner_needed::all()->count();

            $userAdmin = admin::findorFail(Session::get('userId'));
            return view('dashbord.typography', compact('u', 's',  'name', 'todo', 'mes', 'd', 'userAdmin','single'));
            // return redirect('admin')->with('admin',$userAdmin);

        }
        return view('dashbord.signin');
    }



    public function loginAdmin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $userAdmin = admin::where('email', $email)->first();




        if (isset($userAdmin)) {
            if (Hash::check($password, $userAdmin->password)) {
                $request->session()->put('userId', $userAdmin->id);
                return redirect('admin')->with('admin', $userAdmin);
            } else {
                return "Login failed";
            }
        } else {
            return "Email does not exist";
        }
    }
    //  *************** //Login Admin ***  *********************

























    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'todo' => 'required'
        ]);
        toDo::create([
            'todo' => $request->todo
        ]);
        return redirect('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(blood_doner_needed $user)
    {
        if (Session::has('userId')) {
            $userAdmin = admin::where('id', Session::get('userId'))->first();
            $users = blood_doner_needed::all();
            $mes = contact::orderBy('updated_at', 'desc')->paginate(4);


            //
            $bds = blood_doner::join('blood_types', 'blood_doners.b_d_blood_type', '=', 'blood_types.id')
                ->get(['blood_doners.*', 'blood_types.name']);

            $d = blood_doner::all();


            return view('dashbord.doners', compact('users', 'bds', 'd', 'userAdmin', 'mes'));
        }
    }


    public function show0(blood_doner_needed $user)
    {
        if (Session::has('userId')) {
            $userAdmin = admin::where('id', Session::get('userId'))->first();
            $users = blood_doner_needed::join('blood_types', 'blood_doner_neededs.b_d_n_blood_type', '=', 'blood_types.id')
                ->get(['blood_doner_neededs.*', 'blood_types.name']);
            $mes = contact::orderBy('updated_at', 'desc')->paginate(4);

            // $bds=blood_doner::all();
            $d = blood_doner::all();
            return view('dashbord.needed', compact('users', 'd', 'userAdmin', 'mes'));
        }
    }





    public function show1(blood_doner_needed $user)
    {
        if (Session::has('userId')) {
            $userAdmin = admin::where('id', Session::get('userId'))->first();


            $name = admin::all()->where('roll', '1');


            $u = blood_doner::all()->count();
            $d = blood_doner::all();
            // $data=session('d');

            $mes = contact::orderBy('updated_at', 'desc')->paginate(4);
            //  dd($mes);
            $todo = toDo::orderBy('updated_at', 'desc')->paginate(4);;
            $s = blood_doner_needed::all()->count();
            $a = admin::all()->count();
            return view('dashbord.index', compact('u', 's', 'a', 'name', 'todo', 'mes', 'd', 'userAdmin'));
        } else {
            return redirect('loginAdmin');
        }
    }

    public function show4()
    {
        if (Session::has('userId')) {
            $userAdmin = admin::where('id', Session::get('userId'))->first();
            $mes = contact::orderBy('updated_at', 'desc')->paginate(4);

            $d = blood_doner::all();
            $mes = toDo::all();
            return view('dashbord.table', compact('mes', 'd', 'userAdmin', 'mes'));
        }
    }









    // public function show2(blood_doner_needed $user)
    // {$name = admin::all()->where('roll', '1');
    //     $u = blood_doner::all()->count();
    //     $d=blood_doner::all();
    //       $mes=contact::orderBy('updated_at', 'desc')->paginate(4);

    //     $s=blood_doner_needed::all()->count();
    //     $a=admin::all()->where('roll', '1')->count();
    //     return view('dashbord.index',compact('d'));

    // }

    public function message()
    {
        if (Session::has('userId')) {
            $userAdmin = admin::where('id', Session::get('userId'))->first();
            $message = contact::all();
            $d = blood_doner::all();
            $mes = contact::orderBy('updated_at', 'desc')->paginate(4);


            return view('dashbord.form', compact('message', 'd', 'userAdmin', 'mes'));
        }
    }

    public function adminprofile()
    {

        if (Session::has('userId')) {
            $userAdmin = admin::where('id', Session::get('userId'))->first();
            $message = contact::all();
            $d = blood_doner::all();
            $mes = contact::orderBy('updated_at', 'desc')->paginate(4);


            $allAdmins = admin::all();



            return view('dashbord.blank', compact('message', 'd', 'userAdmin', 'mes', 'allAdmins'));
        }
    }















    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $avtive = blood_doner::find($id);
        // dd($avtive);
        $avtive->status = 1;
        $avtive->save();
        return redirect('admindoners');
    }
    public function edit1($id)
    {
        $avtive = blood_doner::find($id);
        // dd($avtive);
        $avtive->status = 2;
        $avtive->save();
        return redirect('admindoners');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = toDo::find($id);
        $todo->destroy($id);
        return redirect('admin');
    }
    public function destroyAdmin($id)
    {
        $admin = admin::find($id);
        $admin->destroy($id);
        return redirect('blank');
    }

    public function logoutAdmin(Request $request)
    {

        $request->session()->flush();
        return redirect('loginAdmin');
    }


//
// deleteneed
public function deleteneed($id)
    {
        $need = blood_doner_needed::find($id);
        $need->destroy($id);
        return redirect('adminneeded');
    }
}
