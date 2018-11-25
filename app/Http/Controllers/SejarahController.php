<?php

namespace App\Http\Controllers;

use App\Sejarah;
use Illuminate\Http\Request;
use Storage;

class SejarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sejarah = Sejarah::all();
      // dd($article);
      return view('viewadmin.sejarah.homesejarah',['sejarah'=>$sejarah]);
    }
    public function indexviewuser()
    {
      $sejarah = Sejarah::all();
      // dd($article);
      return view('viewuser.daftarsejarah',['sejarah'=>$sejarah]);
    }


    public function indexdetailsejarah($id)
    {
      $sejarah = Sejarah::where('id','=',$id)->get();
      // dd($article);
      return view('viewuser.detailsejarah')->with('sejarah',$sejarah);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('viewadmin.sejarah.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if ($request->foto_sejarah) {
      $path = Storage::disk('public')->put('foto',$request->foto_sejarah);
    }

        $createsejarah = new Sejarah();
        $createsejarah->nama_sejarah = $request->input('nama_sejarah');

        if ($request->foto_sejarah) {
          $createsejarah->foto_sejarah = $path;
        }
        $createsejarah->deskripsi_sejarah = $request->input('deskripsi_sejarah');
        $createsejarah->save();


      return redirect(route('homeadminsejarah'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $sejarahshow = Sejarah::find($id);
    // alert()->message('Message', 'Optional Title');
      return view('viewadmin.sejarah.view')->with('sejarahshow', $sejarahshow);
      // dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $sejarah = Sejarah::find($id);
      return view('viewadmin.sejarah.edit')->with('sejarah',$sejarah);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $sejarah = Sejarah::find($id);
      if ($request->foto_sejarah) {
        $path = Storage::disk('public')->put('foto',$request->foto_sejarah);
      } else {
        $path = $sejarah->foto_sejarah;
      }
      // dd($user);

    $sejarah->nama_sejarah = $request->nama_sejarah;
    $sejarah->deskripsi_sejarah = $request->deskripsi_sejarah;

    $sejarah->foto_sejarah = $path;

    $sejarah->save();

    return redirect('/homeadminsejarah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sejarah  $sejarah
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $sejarah = Sejarah::find($id);
    $delete = $sejarah->delete();
    // return redirect('/homeadmin');
    return redirect('/homeadminsejarah');
    }
}
