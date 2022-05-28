@extends('layouts.default')
@section('content')

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <h1>CRUD LARAVEL</h1>
                <a href="{{url('create')}}" class="btn btn-primary mt-5">+ Tambah Mahasiswa</a>
            </div>

            <div class="col-lg-8 mt-5">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    @foreach ($data as $dataMahasiswa)
                    <tbody>
                        <tr>
                            <td scope="col">{{$dataMahasiswa->id }}</td>
                            <td scope="col">{{$dataMahasiswa->nama }}</td>
                            <td scope="col">{{$dataMahasiswa->nim }}</td>
                            <td scope="col">{{$dataMahasiswa->alamat }}</td>
                            <td scope="col">
                                <a href="{{url('/show/'.$dataMahasiswa->id)}}" class="btn btn-warning">Edit</a>
                                <a href="{{url('/destroy/'.$dataMahasiswa->id)}}" class="btn btn-danger">Hapus</a>
                            </td>
                                                       
                                                  
                        </tr>
                    </tbody>
                    @endforeach
            </div>
        </div>
    </div>
</section>

    
@endsection