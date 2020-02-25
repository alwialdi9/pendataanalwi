@extends('templates.header')
@extends('templates.sidebar')

@section('content')
	<div class="content-body">
		<div class="row ml-3">
			<div class="col-10">
                <h1 class="mt-3">Data Siswa</h1>
                <a href="/siswa/create" class="btn btn-success my-3 float-right">+Tambah Data</a>
                <table class="table table-bordered text-center">
                    <thead class="thead">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nomor Nik</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Alwi Assegaf</td>
                            <td>3174090809090008</td>
                            <td>Laki-laki</td>
                            <td>09 Juli 2005</td>
                            <td>Jl. Cikeungsi No. 3 Cijaas</td>
                            <td>
                            <a href="" class="badge badge-info">Ubah</a>
                            <a href="" class="badge badge-danger">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
			</div>
		</div>
    </div>
@endsection