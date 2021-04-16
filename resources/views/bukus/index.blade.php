@extends('bukus.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>DATA BUKU - PERPUSTAKAAN PELANGI</h2>
            </div>

            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('bukus.create') }}"> Input Buku</a>
            </div>

            <div>
            <div class="mx-auto pull-right">
                <div class="float-left">
                    <form action="{{ route('bukus.index') }}" method="GET" role="search">
                        <div class="input-group">
                            <span class="input-group-btn mr-5 mt-1">
                                <button class="btn btn-info" type="submit" title="Search Barang">
                                    <span class="fas fa-search">Search</span>
                                </button>
                            </span>

                            <input type="text" class="form-control mr-2" name="term" placeholder="Search Nama Buku" id="term">
                            <a href="{{ route('bukus.index') }}" class=" mt-1">
                                <span class="input-group-btn">
                                    <button class="btn btn-danger" type="button" title="Refresh page">
                                        <span class="fas fa-sync-alt">Refresh</span>
                                    </button>
                                </span>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Id Buku</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Penerbit</th>
            <th>Pengarang</th>
            <th>Jumlah</th>
            <th>Status</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($bukus as $Buku)
        <tr>
            <td>{{ $Buku->id_buku }}</td>
            <td>{{ $Buku->Judul }}</td>
            <td>{{ $Buku->Kategori }}</td>
            <td>{{ $Buku->Penerbit }}</td>
            <td>{{ $Buku->Pengarang }}</td>
            <td>{{ $Buku->Jumlah }}</td>
            <td>{{ $Buku->Status }}</td>
            <td>
                <form action="{{ route('bukus.destroy',$Buku->id_buku) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data buku?')">
                    <a class="btn btn-info" href="{{ route('bukus.show',$Buku->id_buku) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('bukus.edit',$Buku->id_buku) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    {{ $bukus->links() }}
@endsection