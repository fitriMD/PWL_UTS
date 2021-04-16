<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $bukus = Buku::where([
            ['Judul','!=',Null],
            [function($query)use($request){
                if (($term = $request->term)) {
                    $query->orWhere('Judul','LIKE','%'.$term.'%')
                          ->orWhere('Kategori','LIKE','%'.$term.'%')
                          ->orWhere('Penerbit','LIKE','%'.$term.'%')
                          ->orWhere('Pengarang','LIKE','%'.$term.'%')->get();
                }
            }]
        ])
        ->orderBy('id_buku','asc')
        ->simplePaginate(5);
        
        return view('bukus.index' , compact('bukus'))
        ->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bukus.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Melakukan validasi data
        $request->validate([
            'id_buku' => 'required',
            'Judul' => 'required',
            'Kategori' => 'required',
            'Penerbit' => 'required',
            'Pengarang' => 'required',
            'Jumlah' => 'required',
            'Status' => 'required',
        ]);

         // Fungsi eloquent untuk menambah data
         Buku::create($request->all());

         // Jika data berhasil ditambahkan, akan kembali ke halaman utama
         return redirect()->route('bukus.index')
             ->with('success', 'Buku Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_buku)
    {
        // Menampilkan detail data dengan menemukan/berdasarkan id_barang
        $Buku = Buku::find($id_buku);
        return view('bukus.detail', compact('Buku'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_buku)
    {
        // Menampilkan detail data dengan menemukan berdasarkan Nim Mahasiswa untuk diedit
        $Buku = Buku::find($id_buku);
        return view('bukus.edit', compact('Buku'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_buku)
    {
        // Melakukan validasi data
        $request->validate([
            'id_buku' => 'required',
            'Judul' => 'required',
            'Kategori' => 'required',
            'Penerbit' => 'required',
            'Pengarang' => 'required',
            'Jumlah' => 'required',
            'Status' => 'required',
        ]);
        // Fungsi eloquent untuk mengupdate data inputan kita
        Buku::find($id_buku)->update($request->all());

        // Jika data berhasil diupdate, akan kembali ke halaman utama
        return redirect()->route('bukus.index')
            ->with('success', 'Buku Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_buku)
    {
        // Fungsi eloquent untuk menghapus data
        Buku::find($id_buku)->delete();
        return redirect()->route('bukus.index')
            -> with('success', 'Buku Berhasil Dihapus');
    }
}
