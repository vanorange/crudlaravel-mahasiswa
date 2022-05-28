@extends('layouts.default')

@section('content')


<section>
    <div class="container mt-5">
        <h1 >TAMBAH DATA MAHASISWA</h1>
        <div class="row">
            <div class="col-lg-8">
                <form action="{{url('/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa *</label>
                        <input type="text" name="nama" class="form-control mb-2" placeholder="Masukan Nama">
                    </div>
                    <div class="form-group">
                        <label for="nim">NIM Mahasiswa *</label>
                        <input type="text" name="nim" class="form-control mb-2" placeholder="Masukan NIM">
                    </div>
                    <div class="form-group">
                        <label for="nama">Alamat Mahasiswa *</label>
                        <textarea name="alamat" class="form-control mb-2" placeholder="Masukan Alamat"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary">Tambah Mahasiswa</button>
                    </div>
                    <div class="form-group mt-2">
                    <a href="{{url('/')}}"> Kembali ke halaman utama</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection