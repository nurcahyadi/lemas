<?php

namespace App\Http\Controllers;

use App\Wisata;
use Illuminate\Http\Request;
use Storage;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $wisata = Wisata::all();
      // dd($article);
      return view('viewadmin.wisata.homewisata',['wisata'=>$wisata]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('viewadmin.wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if ($request->foto_wisata) {
      $path = Storage::disk('public')->put('foto',$request->foto_wisata);
    }

        $createwisata = new Wisata();
        $createwisata->nama_wisata = $request->input('nama_wisata');

        if ($request->foto_wisata) {
          $createwisata->foto_wisata = $path;
        }
        $createwisata->deskripsi_wisata = $request->input('deskripsi_wisata');
        $createwisata->alamat_wisata = $request->input('alamat_wisata');
        $createwisata->save();


      return redirect(route('homeadminwisata'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $wisatashow = Wisata::find($id);
    // alert()->message('Message', 'Optional Title');
      return view('viewadmin.wisata.view')->with('wisatashow', $wisatashow);
      // dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $wisata = Wisata::find($id);
      return view('viewadmin.wisata.edit')->with('wisata',$wisata);
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
      $wisata = Wisata::find($id);
      if ($request->foto_wisata) {
        $path = Storage::disk('public')->put('foto',$request->foto_wisata);
      } else {
        $path = $wisata->foto_wisata;
      }
      // dd($user);

    $wisata->nama_wisata = $request->nama_wisata;
    $wisata->deskripsi_wisata = $request->deskripsi_wisata;
    $wisata->alamat_wisata = $request->alamat_wisata;
    $wisata->foto_wisata = $path;

    $wisata->save();

    return redirect('/homeadminwisata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wisata  $wisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $wisata = Wisata::find($id);
    $delete = $wisata->delete();
    // return redirect('/homeadmin');
    return redirect('/homeadminwisata');
    }
}
