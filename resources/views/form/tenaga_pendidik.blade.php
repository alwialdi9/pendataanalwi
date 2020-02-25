@extends('templates.header')
@extends('templates.sidebar')

@section('content')

	<div class="content-body">
		<div class="row">
			<div class="col-8">
                <h1 class="mt-3">Form Tambah Data Siswa</h1>
                <form method="post" action="/tenaga">
                    @csrf
                    <form>
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="nama_lengkap1">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" id="nama_lengkap1" name="nama_lengkap1">
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="jenis_kelamin1">Jenis Kelamin</label>
                            <select class="form-control" id="pilihJenis1">
                                <option>-</option>
                              <option>Laki-laki</option>
                              <option>Perempuan</option>
                            </select>
                          </div>
                        </div>
                      </form>
                   

                      <form>
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="tempat_lahir1">Tempat Lahir</label>
                            <input type="text" class="form-control" placeholder="Tempat Lahir" id="tempat_lahir1" name="tempat_lahir1">
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="tanggal_lahir1">Tanggal Lahir</label>
                            <input type="text" class="form-control" placeholder="Tanggal Lahir" id="tanggal_lahir1" name="tanggal_lahir1">
                          </div>
                        </div>
                      </form>
                      

                      <form>
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="tmt">TMT</label>
                            <input type="date" class="form-control" placeholder="" id="tmt" name="tmt">
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="status_pegawai1">Status Pegawai</label>
                            <select class="form-control" id="pilihPegawai1">
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
                            <label for="provinsi1">Provinsi</label>
                            <select class="form-control" id="pilihPegawai1">
                                <option>-</option>
                              <option>Sumatera</option>
                              <option>Kalimantan (Borneo)</option>
                              <option>Jawa Barat</option>
                              <option>Dki Jakarta</option>
                              <option>Jawa Tengah</option>
                              <option>Jawa Timur</option>
                              <option>Maluku</option>
                              <option>Sulawesi</option>
                              <option>Sunda Kecil (Kepulauan Nusa Tenggara)</option>
                              <option>Daerah Istimewa Surakarta</option>
                              <option>Daerah Istimewa Yogyakarta</option>
                            </select>
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="kabupaten1">Kabupaten</label>
                            <select class="form-control" id="pilihKabupaten1">
                                <option>-</option>
                              <option>Godong</option>
                              <option>Peyeum</option>
                            </select>
                          </div>
                        </div>
                      </form>
                      

                      <form>
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="kecamatan1">Kecamatan</label>
                            <select class="form-control" id="pilihKecataman1">
                                <option>-</option>
                              <option>Ampar</option>
                              <option>Makasar</option>
                            </select>
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="kelurahan1">Kelurahan</label>
                            <select class="form-control" id="pilihKelurahan1">
                                <option>-</option>
                              <option>Cipanas</option>
                              <option>Cibereum</option>
                            </select>
                          </div>
                        </div>
                      </form>
                      

                      <form action="" id="alamat1"> 
                        <div class="row">
                        <div class="col">
                        <label for="alamat1">Alamat</label>
                        <br>
                        <textarea class="col-lg" name="alamat1" form="alamat1" placeholder="Isikan alamat"></textarea>
                        </div>
                        </div>
                      </form>
                      

                      <form>
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="no_hp1">No.Hp</label>
                            <input type="number" class="form-control" placeholder="No.Hp" id="no_hp1" name="no_hp1">
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="email1">Email</label>
                            <input type="text" class="form-control" placeholder="Email" id="email1" name="email1">
                          </div>
                        </div>
                      </form>
                     

                        <form>
                            <div class="row">
                              <div class="col-sm-6 mg-t-10">
                                <label for="jabatan">Jabatan</label>
                                <input type="text" class="form-control" placeholder="Jabatan" id="jabatan" name="jabatan">
                              </div>
                            </div>
                        </form>
                      <button type="submit" class="btn btn-success my-3">Simpan Data Siswa</button>
                  </form>
			</div>
		</div>
	</div>
@endsection
     

   