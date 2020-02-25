@extends('templates.header')
@extends('templates.sidebar')

@section('content')

	<div class="content-body">
		<div class="row ml-3">
			<div class="col-8">
                <h1 class="mt-3">Form Tambah Data Siswa</h1>
                <form method="post" action="/tenaga">
                    @csrf
                    <form>
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="nama_lengkap2">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" id="nama_lengkap2" name="nama_lengkap2">
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="jenis_kelamin2">Jenis Kelamin</label>
                            <select class="form-control" id="pilihJenis2">
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
                            <label for="tempat_lahir2">Tempat Lahir</label>
                            <input type="text" class="form-control" placeholder="Tempat Lahir" id="tempat_lahir2" name="tempat_lahir2">
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="tanggal_lahir2">Tanggal Lahir</label>
                            <input type="date" class="form-control" placeholder="Tanggal Lahir" id="tanggal_lahir2" name="tanggal_lahir2">
                          </div>
                        </div>
                      </form>
                      

                      <form>
                        <div class="row mt-3">
                          <div class="col-sm-6 mg-t-10-6">
                            <label for="tanggal_masuk2">Tanggal Masuk</label>
                            <input type="date" class="form-control" placeholder="Tanggal Masuk" id="tanggal_masuk2" name="tanggal_masuk2">
                          </div>
                        </div>
                      </form>
                      <hr>
                      <form>
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="provinsi2">Provinsi</label>
                            <select class="form-control" id="pilihProvinsi2">
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
                              <option>Papua</option>
                            </select>
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="kabupaten2">Kabupaten</label>
                            <select class="form-control" id="pilihKabupaten2">
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
                            <label for="kecamatan2">Kecamatan</label>
                            <select class="form-control" id="pilihKecataman2">
                                <option>-</option>
                              <option>Ampar</option>
                              <option>Makasar</option>
                            </select>
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="kelurahan2">Kelurahan</label>
                            <select class="form-control" id="pilihKelurahan2">
                                <option>-</option>
                              <option>Cipanas</option>
                              <option>Cibereum</option>
                            </select>
                          </div>
                        </div>
                      </form>
                     

                      <form action="" id="alamat2"> 
                        <div class="row">
                        <div class="col">
                        <label for="alamat2">Alamat</label>
                        <br>
                        <textarea class="col-lg" name="alamat2" form="alamat2" placeholder="Isikan alamat"></textarea>
                        </div>
                        </div>
                      </form>
                      <hr>

                      <form>
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="inputPhoneNumber">No.Hp</label>
                            <input id="inputPhoneNumber" type="number" class="form-control" placeholder="Enter phone number">
                          </div>
                          <div class="col-sm-6 mg-t-10">
                            <label for="email2">Email</label>
                            <input type="text" class="form-control" placeholder="Email" id="email2" name="email2">
                          </div>
                        </div>
                      </form>
                      

                      <form>
                        <div class="row">
                          <div class="col-sm-6 mg-t-10">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input type="text" class="form-control" placeholder="Nama Ibu" id="nama_ibu" name="nama_ibu">
                          </div>
                            <div class="col-sm-6 mg-t-10">
                            <label for="nama_bapak">Nama Bapak</label>
                            <input type="text" class="form-control" placeholder="Nama Bapak" id="nama_bapak" name="nama_bapak">
                           </div>
                          </div>
                        </form>
                      <button type="submit" class="btn btn-success my-3">Simpan Data Siswa</button>
                  </form>
			</div>
		</div>
	</div>
@endsection
     

   