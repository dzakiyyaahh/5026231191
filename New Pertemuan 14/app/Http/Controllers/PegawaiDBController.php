<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiDBController extends Controller
{
    //
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawai')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('index',['pegawai' => $pegawai]);

    }

    public function tambah() {
        return view('tambah');
    }

    public function store(Request $request)
    {
	    // insert data ke table pegawai
	    DB::table('pegawai')->insert([
		    'pegawai_nama' => $request->nama,
		    'pegawai_jabatan' => $request->jabatan,
		    'pegawai_umur' => $request->umur,
		    'pegawai_alamat' => $request->alamat
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/pegawai');

    }

    // public function proses(Request $request)
    // {
    //     $this->validate($request,[
    //         'nama' => 'required|min:5|max:20',
    //         'pekerjaan' => 'required',
    //         'usia' => 'required|numeric'
    //     ]);

    //     return view('proses',['data' => $request]);
    // }

    // method untuk edit data pegawai
    public function edit($id) // ada primary key
    {
	    // mengambil data pegawai berdasarkan id yang dipilih
	    $pegawai = DB::table('pegawai')
            ->where('pegawai_id',$id) // khusus operator =
            ->get();

	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('edit',['pegawai' => $pegawai]);

    }

    // update data pegawai
    public function update(Request $request)
    {
	    // update data pegawai
	    DB::table('pegawai')->where('pegawai_id',$request->id)->update([
		    'pegawai_nama' => $request->nama,
		    'pegawai_jabatan' => $request->jabatan,
		    'pegawai_umur' => $request->umur,
		    'pegawai_alamat' => $request->alamat
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/pegawai');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
	    // menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('pegawai')->where('pegawai_id',$id)->delete();

	    // alihkan halaman ke halaman pegawai
	    return redirect('/pegawai');
    }

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		    ->where('pegawai_nama','like',"%".$cari."%")
		    ->paginate();

    		// mengirim data pegawai ke view index
		return view('index',['pegawai' => $pegawai]);

	}
}
