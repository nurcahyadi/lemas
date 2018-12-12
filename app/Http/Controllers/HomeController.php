<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function check()
    {

      if (Auth::user()->role == 1) {
          return redirect(route('homeadminbudaya'));
          // return 'saya admin';
        } else if (Auth::user()->role ==2) {
          return redirect(route('homeadmintari'));
          // return 'saya bukan admin';
        } else if (Auth::user()->role ==null) {
          return redirect(route('homeadminbudaya'));
          // return 'saya bukan admin';
        }
        //return view('home');
    }

    public function index()
    {
        $data = Auth::user();
        return view('viewadmintari.view', compact('data'));
    }

    public function indexuser()
    {
        return view('viewuser.inputsanggar');
    }
    public function indexadmin()
    {
        $data = User::where('role','=',2)->get();
        return view('viewadmin.budaya.homedaftarsanggar', compact('data'));
    }


    public function edit($id)
    {
      $sanggar = User::find($id);
      return view('viewadmintari.edit')->with('sanggar',$sanggar);
    }

    public function show($id)
    {
      $inputsanggarshow = User::find($id);
    // alert()->message('Message', 'Optional Title');
      return view('viewadmin.budaya.showsanggar')->with('inputsanggarshow', $inputsanggarshow);
      // dd($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $sanggar = User::find($id);
      if ($request->photo) {
        $path = Storage::disk('public')->put('foto',$request->photo);
      } else {
        $path = $sanggar->photo;
      }
      // dd($user);

    $sanggar->name = $request->nama;
    $sanggar->email = $request->email;
    $sanggar->deskripsi = $request->deskripsi;
    $sanggar->phone = $request->nope;
    $sanggar->alamat = $request->alamat;
    $sanggar->photo = $path;

    $sanggar->save();

    return redirect('/homeadmintari');
    }


    public function store(Request $request){

        $createsanggar = new User();
        $createsanggar->name = $request->input('nama');
        $createsanggar->email = $request->input('email');
        $createsanggar->password = bcrypt($request->input('password'));
        $createsanggar->role = 2;
        $createsanggar->status = "Pending";
        $createsanggar->save();

        return redirect(route('home'));
    }

    public function destroy($id)
    {
      $inputsanggar = User::find($id);
    $delete = $inputsanggar->delete();
    // return redirect('/homeadmin');
    return redirect('/daftarsanggartari');
    }


    public function konfirmasi(Request $request, $id){
      $input = User::find($id);
      $input->status = "Accept";
      $input->save();

      return redirect('daftarsanggartari');
    }


    public function datainputsanggar()
    {
        $datainputsanggar = User::where('status','=','Accept')->get();
        // dd($pemain);
        return view('viewuser.daftarsanggartari')->with('datainputsanggar',$datainputsanggar);
    }
    public function detailsanggar($id){
      $sanggar = User::where('id','=', $id)->get();

      return view('viewuser.detailsanggar')->with('sanggar',$sanggar);
    }
}
