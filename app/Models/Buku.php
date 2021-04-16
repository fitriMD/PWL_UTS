<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Buku as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model; // Model Eloquent

class Buku extends Model
{
    protected $table="bukus"; // Eloquent akan membuat model barang menyimpan record di tabel bukus
    public $timestamps= false;
    protected $primaryKey = 'id_buku'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_buku',
        'Judul',
        'Kategori',
        'Penerbit',
        'Pengarang' ,
        'Jumlah',
        'Status',
    ];
}