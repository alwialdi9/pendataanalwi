@extends('templates.header')
@extends('templates.sidebar')

@section('content')
<div class="content-body">
  <div class="container pd-x-0">
    <div class="d-sm-flex row align-items-center justify-content-between mg-b-10 mg-lg-b-10 mg-xl-b-10 ml-auto">
      <div class="mg-xl-b-15 col-sm-6"><h4 class="mg-b-0 tx-spacing--1">Data Pokok Lembaga</h4></div>
      <div class="mg-xl-b-10 col-sm-6"><h4 class="mg-b-0 tx-spacing--1">Dokumen Lembaga</h4></div>
    </div>
    <!-- alert -->
    @if(session('status'))
    <script type="text/javascript">
    swal("Success", "{{session('status')}} ", "success");
    </script>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> {{session('status')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
<!-- endalert -->
    <hr>
    <form id="form1" method="post" action="{{url('profil')}} " enctype="multipart/form-data" name="profil">
      {{csrf_field()}}
      <div class="row ml-auto">
      <div class="col-sm-6 mg-t-10">
          <label for="nama_lembaga">Nama Lembaga</label>
          <input type="text" class="form-control" placeholder="" name="nama_lembaga" id="nama_lembaga">
        </div>
        <div class="col-sm-6 mg-t-10">
          <label for="akte_notaris">Akte Notaris</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="akte_notaris" name="akte_notaris">
            <label class="custom-file-label" id="akte">Choose file</label>
          </div>
        </div>
        </div>

        <div class="row ml-auto">
        <div class="col-sm-6 mg-t-10">
          <label for="jenis_pendidikan">Jenis Pendidikan</label>
          <select class="form-control" name="jenis_pendidikan" id="jenis_pendidikan">
            <option label="Pilih Jenis Pendidikan"></option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="SMK">SMK</option>
          </select>
        </div>
        <div class="col-sm-6 mg-t-10">
          <label for="ad/art">AD / ART</label>
          <div class="custom-file">
            <input type="file" class="custom-file-input" id="ad_art" name="ad_art">
            <label id="ad_artlabel" class="custom-file-label">Pilih file</label>
          </div>
        </div>
        </div>

        <div class="row ml-auto">
          <div class="col-sm-6 mg-t-10">
          <div class="mb-3">
          <label for="jenis_lembaga">Jenis Lembaga</label>
          <select class="form-control" name="jenis_lembaga" id="jenis_lembaga">
            <option label="Pilih Lembaga"></option>
            <option value="negeri">Negeri</option>
            <option value="swasta">Swasta</option>
          </select>
          </div>
          <label for="status_lembaga">Status Lembaga</label>
          <select class="form-control" name="status_lembaga" id="status_lembaga">
            <option label="Pilih Status"></option>
            <option value="aktif">Aktif</option>
            <option value="nonaktif">Nonaktif</option>
          </select>
          <div class="mt-3">
          <label for="tgl_berdiri">Tanggal Berdiri</label>
          <input type="date" class="form-control" placeholder="" name="tgl_berdiri" id="tgl_berdiri">
        </div>
        </div>

        <div class="col-sm-6 mg-t-10">
          <div class="row ml-auto mt-3">
            <div class="mg-lg-b-5 mr-4 mb-3"><img src="{{asset('images/default.jpg')}}" width="230" height="230" class="img-thumbnail" alt="Responsive image" id="img_akta"></div>
            <div class="mg-lg-b-5"><img src="{{asset('images/default.jpg')}}" width="230" height="230" class="img-thumbnail" alt="Responsive image" id="img_art"></div>
          </div>
        </div>
        </div>
        <hr>
        <div class="row ml-auto mt-3">
        <div class="col-sm-6 mg-t-10">
          <label for="provinsi">Provinsi</label>
          <select class="form-control select2" name="provinsi" id="Provinsi">
             <option value="" disabled="" selected="">Select Provinsi</option>
                @foreach ($provinsi as $p)
                    <option value="{{ $p->provinsi_id }}">{{ $p->nama_provinsi }}</option>
                @endforeach
          </select>
        </div>
        <div class="col-sm-6 mg-t-10">
         <label for="kabupaten">Kabupaten</label>
          <select class="form-control select2" name="kabupaten" id="Kabupaten">
            <option value="" disabled="" selected="">Select Kabupaten</option>
          </select>
        </div>
      </div>

        <div class="row ml-auto">
        <div class="col-sm-6 mg-t-10">
          <label for="kecamatan">Kecamatan</label>
          <select class="form-control select2" name="kecamatan" id="Kecamatan">
            <option value="" disabled="" selected="">Select Kecamatan</option>
          </select>
        </div>

        <div class="col-sm-6 mg-t-10">
          <label for="kelurahan">Kelurahan</label>
          <select class="form-control select2" name="kelurahan" id="Kelurahan">
            <option value="" disabled="" selected="">Select Kelurahan</option>
          </select>
        </div>
      </div>

      <div class="col-sm-12 mg-t-10">
          <label for="alamat">Alamat</label>
          <textarea class="form-control" rows="3" placeholder="Alamat" name="alamat" id="alamat"></textarea>
        </div>

        <div class="col-sm-6 mg-t-10 mt-4">
          <button type="submit" class="btn btn-success">Simpan Data dan Lanjutkan Pengisian</button>
        </div>

      </div>
    </form>


  </div>
</div>
@endsection