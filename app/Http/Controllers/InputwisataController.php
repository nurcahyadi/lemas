<?php

namespace App\Http\Controllers;

use App\inputwisata;
use Illuminate\Http\Request;
use Storage;

class InputwisataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $inputwisata = inputwisata::all();
      // dd($article);
      return view('viewadmin.wisata.homeinputwisata',['inputwisata'=>$inputwisata]);
    }

    public function indexuser()
    {
      // $inputwisata = inputwisata::all();
      // dd($article);
      // return view('viewadmin.wisata.homeinputwisata',['inputwisata'=>$inputwisata]);
        return view('viewuser.inputwisata');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if ($request->foto) {
      $path = Storage::disk('public')->put('foto',$request->foto);
    }

        $createinputwisata = new inputwisata();
        $createinputwisata->nama = $request->input('nama');

        if ($request->foto) {
          $createinputwisata->foto = $path;
        }
        $createinputwisata->deskripsi = $request->input('deskripsi');
        $createinputwisata->alamat = $request->input('alamat');
        $createinputwisata->status = "Pending";
        $createinputwisata->save();


      return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\inputwisata  $inputwisata
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $inputwisatashow = inputwisata::find($id);
    // alert()->message('Message', 'Optional Title');
      return view('viewadmin.wisata.viewinputwisata')->with('inputwisatashow', $inputwisatashow);
      // dd($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\inputwisata  $inputwisata
     * @return \Illuminate\Http\Response
     */
    public function edit(inputwisata $inputwisata)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\inputwisata  $inputwisata
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inputwisata $inputwisata)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\inputwisata  $inputwisata
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $inputwisata = inputwisata::find($id);
    $delete = $inputwisata->delete();
    // return redirect('/homeadmin');
    return redirect('/homeadmininputwisata');
    }

    public function konfirmasi(Request $request, $id){
      $input = inputwisata::find($id);
      $input->status = "Accept";
      $input->save();

      return redirect('homeadmininputwisata');
    }

    public function datainputwisata()
    {
        $datainputwisata = inputwisata::where('status','=','Accept')->get();
        // dd($pemain);
        return view('viewuser.tampilanwisata')->with('datainputwisata',$datainputwisata);
    }
}
