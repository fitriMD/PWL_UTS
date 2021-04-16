@extends('bukus.layout')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Edit Buku
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form method="post" action="{{ route('bukus.update', $Buku->id_buku) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="id_buku">Id Buku</label>
                        <input type="id_buku" name="id_buku" class="form-control" id="id_buku" value="{{ $Buku->id_buku }}" ariadescribedby="id_buku" >
                    </div>

                    <div class="form-group">
                        <label for="Judul">Judul</label>
                        <input type="Judul" name="Judul" class="form-control" id="Judul" value="{{ $Buku->Judul }}" ariadescribedby="Judul" >
                    </div>

                    <div class="form-group">
                        <label for="Kategori">Kategori</label>
                        <input type="Kategori" name="Kategori" class="form-control" id="Kategori" value="{{ $Buku->Kategori }}" ariadescribedby="Kategori" >
                    </div>

                    <div class="form-group">
                        <label for="Penerbit">Penerbit</label>
                        <input type="Penerbit" name="Penerbit" class="form-control" id="Penerbit" value="{{ $Buku->Penerbit }}" ariadescribedby="Penerbit" >
                    </div>

                    <div class="form-group">
                        <label for="Pengarang">Pengarang</label>
                        <input type="Pengarang" name="Pengarang" class="form-control" id="Pengarang" value="{{ $Buku->Pengarang }}" ariadescribedby="Pengarang" >
                    </div>

                    <div class="form-group">
                        <label for="Jumlah">Jumlah</label>
                        <input type="Jumlah" name="Jumlah" class="form-control" id="Jumlah" value="{{ $Buku->Jumlah }}" ariadescribedby="Jumlah" >
                    </div>

                    <div class="form-group">
                        <label for="Status">Status</label>
                        <input type="Status" name="Status" class="form-control" id="Status" value="{{ $Buku->Status }}" ariadescribedby="Status" >
                    </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection