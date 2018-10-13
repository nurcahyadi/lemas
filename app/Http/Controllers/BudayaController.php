<?php

namespace App\Http\Controllers;

use App\Budaya;
use Illuminate\Http\Request;
use Storage;

class BudayaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $budaya = Budaya::all();
      // dd($article);
      return view('viewadmin.budaya.homebudaya',['budaya'=>$budaya]);
    }
    public function indexviewuser()
    {
    return view('viewuser.daftarbudaya');
    }

    public function indextarian()
    {
      $budaya = Budaya::where('type_budaya','=','Tarian')->get();
      // dd($article);
      return view('viewuser.macamtarian',['budaya'=>$budaya]);
    }
    public function indexmakanan()
    {
      $budaya = Budaya::where('type_budaya','=','Makanan')->get();
      // dd($article);
      return view('viewuser.macammakanan',['budaya'=>$budaya]);
    }
    public function indexbatik()
    {
      $budaya = Budaya::where('type_budaya','=','Batik')->get();
      // dd($article);
      return view('viewuser.macambatik',['budaya'=>$budaya]);
    }
    public function indexdetailtarian()
    {
      $budaya = Budaya::where('type_budaya','=','Tarian')->get();
      // dd($article);
      return view('viewuser.detailtarian',['budaya'=>$budaya]);
    }
    public function indexdetailmakanan()
    {
      $budaya = Budaya::where('type_budaya','=','Makanan')->get();
      // dd($article);
      return view('viewuser.detailmakanan',['budaya'=>$budaya]);
    }
    public function indexdetailbatik()
    {
      $budaya = Budaya::where('type_budaya','=','Batik')->get();
      // dd($article);
      return view('viewuser.detailbatik',['budaya'=>$budaya]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewadmin.budaya.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if ($request->foto_budaya) {
      $path = Storage::disk('public')->put('foto',$request->foto_budaya);
    }

        $createbudaya = new Budaya();
        $createbudaya->type_budaya=$request->input('type_budaya');
        $createbudaya->nama_budaya = $request->input('nama_budaya');

        if ($request->foto_budaya) {
          $createbudaya->foto_budaya = $path;
        }
        $createbudaya->deskripsi_budaya = $request->input('deskripsi_budaya');
        $createbudaya->save();


      return redirect(route('homeadminbudaya'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Budaya  $budaya
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $budayashow = Budaya::find($id);
    // alert()->message('Message', 'Optional Title');
      return view('viewadmin.budaya.view')->with('budayashow', $budayashow);
      // dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Budaya  $budaya
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $budaya = Budaya::find($id);
      return view('viewadmin.budaya.edit')->with('budaya',$budaya);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Budaya  $budaya
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $budaya = Budaya::find($id);
      if ($request->foto_budaya) {
        $path = Storage::disk('public')->put('foto',$request->foto_budaya);
      } else {
        $path = $budaya->foto_budaya;
      }
      // dd($user);
      if ($request->type_budaya) {
              $budaya->type_budaya = $request->type_budaya;
            }
    $budaya->nama_budaya = $request->nama_budaya;
    $budaya->deskripsi_budaya = $request->deskripsi_budaya;
    $budaya->foto_budaya = $path;

    $budaya->save();

    return redirect('/homeadminbudaya');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Budaya  $budaya
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $budaya = Budaya::find($id);
    $delete = $budaya->delete();
    // return redirect('/homeadmin');
    return redirect('/homeadminbudaya');
    }
}
