@extends('template')

@section('content')
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-info"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
         <div class="form-group has-success">
                <label class="control-label col-sm-2" for="nama">
                    Nama
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="nama"
                           placeholder="Masukkan Nama Lengkap"
                           name="nama" required="required">
                </div>
                <label class="control-label col-sm-2" for="nama">
                    Jabatan
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="jabatan"
                           placeholder="Masukkan Nama Lengkap"
                           name="jabatan" required="required">
                </div>
                <label class="control-label col-sm-2" for="nama">
                    Umur
                </label>
                <div class="col-sm-6">
                    <input class="form-control"
                           type="text"
                           id="umur"
                           placeholder="Masukkan Nama Lengkap"
                           name="umur" required="required">
                </div>
                <label class="control-label col-sm-2" for="nama">
                    Alamat
                </label>
                <div class="col-sm-6">
                    <textarea class="form-control"
                           type="text"
                           id="alamat"
                           placeholder="Masukkan Nama Lengkap"
                           name="alamat" required="required"></textarea>
                </div>
            </div>
		<input type="submit" value="Simpan Data">
	</form>
@endsection
