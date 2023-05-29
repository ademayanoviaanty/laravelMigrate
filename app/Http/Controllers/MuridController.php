<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;

class MuridController extends Controller
{
    function tambah_data1(){
        return view('tambah_murid');
    }
    
    function input_data1(Request $request){
        $user = new Murid();
        $user->nama  = $request->nama;
        $user->kelas = $request->kelas;
        $user->nisn   = $request->nisn;
        $user->save();
        return redirect('/tampil_data1');
    
    }
    
    function tampil_data1(){
        $data = Murid::all();
        return view ('data_murid',compact(['data']));
    }
    
    function hapus_data1($id){
    //`dd($id);
    $data = Murid::whereId($id)->delete();
    return redirect('/tampil_data1');
    }
    
    function edit_data1($id){
        $data = Murid::whereId($id)->first();
        return view('edit_data1',compact(['data']));
    }
    
    function update_data1($id,Request $request){
        $data = Murid::whereId($id)->first();
        $data->nama = $request->nama;
        $data->kelas = $request->kelas;
        $data->nisn = $request->nisn;
        $data->save();
        return redirect('/tampil_data1');
    }
}
