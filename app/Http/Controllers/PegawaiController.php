<?php

namespace App\Http\Controllers;
use App\Models\Departemen;
use App\Models\Pegawai;
use Illuminate\Http\Request;


class PegawaiController extends Controller
{
    public function TampilDataPegawai(){
        $pegawai = Pegawai::get();
            return view("pegawai", compact ("pegawai"));

    }
    function TambahPegawai(){
        $pegawai = Pegawai::get();
        $departemen = Departemen::get();
        return view("pegawai-buat", compact ("pegawai","departemen"));
    }
    function Simpan(Request $request){
        $pegawai = new Pegawai;
        $pegawai->nip = $request->nip;
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->kode_dept = $request->kode_dept;
        $pegawai->save();

        return redirect("/pegawai");
    }
    function Edit($nip){
        $pegawai = Pegawai::find($nip);
        $departemen = Departemen::get();
        return view("pegawai-edit", compact("pegawai", "departemen"));
    }
    function UpdateEdit(Request $request, $nip){
        $pegawai = Pegawai::find($nip);
        $pegawai->nip = $request->nip;
        $pegawai->nama = $request->nama;
        $pegawai->alamat = $request->alamat;
        $pegawai->kode_dept = $request->kode_dept;
        $pegawai->save();

        return redirect("/pegawai");
    }
    function Hapus($nip){
        $pegawai = Pegawai::find($nip);
        $pegawai->delete();

        return redirect("/pegawai");
    }

    }

