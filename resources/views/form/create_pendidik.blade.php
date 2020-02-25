@extends('templates.header')
@extends('templates.sidebar')

@section('content')
	<div class="content-body">
		<div class="row ml-3">
			<div class="col-8">
                <h1 class="mt-3">Form Tambah Data Siswa</h1>
                <form method="post" action="/pendidik">
                    @csrf
                    <form>
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" id="nama" name="nama">
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control select2" id="pilihJenis">
                                <option label=""></option>
                              <option>Laki-laki</option>
                              <option>Perempuan</option>
                            </select>
                          </div>
                        </div>
                      </form>

                      <form>
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" class="form-control" placeholder="Tempat Lahir" id="tempat_lahir" name="tempat_lahir">
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" placeholder="Tanggal Lahir" id="tanggal_lahir" name="tanggal_lahir">
                          </div>
                        </div>
                      </form>
                      

                      <form>
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="nama_lengkap">TMT</label>
                            <input type="date" class="form-control" placeholder="" id="tmt" name="tmt">
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="status_pegawai">Status Pegawai</label>
                            <select class="form-control" id="pilihPegawai">
                                <option>-</option>
                              <option>Pns</option>
                              <option>Non-Pns</option>
                            </select>
                          </div>
                        </div>
                      </form>
                      

                      <form>
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="provinsi">Provinsi</label>
                            <select class="form-control" id="Provinsi">
                                <option label=""></option>
                              <option label="Choose one"></option>
                                @foreach ($provinsi as $p)
                                    <option value="{{ $p->provinsi_id }}">{{ $p->nama_provinsi }}</option>
                                @endforeach
                            </select>
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="kabupaten">Kabupaten</label>
                            <select class="form-control" id="Kabupaten">
                                <option label=""></option>
                            </select>
                          </div>
                        </div>
                      </form>
                     

                      <form>
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="kecamatan">Kecamatan</label>
                            <select class="form-control" id="Kecamatan">
                                <option label=""></option>
                              
                            </select>
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="kelurahan">Kelurahan</label>
                            <select class="form-control" id="Kelurahan">
                                <option value=""></option>
                            </select>
                          </div>
                        </div>
                      </form>
                      

                      <form action="" id="alamat"> 
                        <div class="row">
                        <div class="col">
                        <label for="alamat">Alamat</label>
                        <br>
                        <textarea class="col-lg" name="alamat" form="alamat" placeholder="Isikan alamat"></textarea>
                        </div>
                        </div>
                      </form>
                      

                      <form>
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="no_hp">No.Hp</label>
                            <input type="number" class="form-control" placeholder="No.Hp" id="no_hp" name="no_hp">
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" placeholder="Email" id="email" name="email">
                          </div>
                        </div>
                      </form>
                     

                      <form>
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="mata_pelarajan">Mata Pelajaran Yang Di Ampu</label>
                            <input type="text" class="form-control" placeholder="Mata Pelajaran" id="nama" name="nama">
                          </div>
                        </div>
                        </form>
                      <button type="submit" class="btn btn-success my-3">Simpan Data Siswa</button>
                  </form>
			</div>
		</div>
	</div>
@endsection
     

   