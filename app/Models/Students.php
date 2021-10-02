<?php

namespace App\Models;

use App\Models\DetailCompany;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Students extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $fillable =
    [
        'nis',
        'namaSiswa',
        'kompetensiKeahlian',
        'kelas',
        'tempatLahir',
        'tanggalLahir',
        'jenisKelamin',
        'golDarah',
        'tahunPelajaran',
        'noHP',
        'email',
        'alamat',
        'namaOrtu',
        'alamatOrtu',
        'noHpOrtu',
        'photoSiswa',
        'parafSiswa'
    ];

    public function siswaPKL()
    {
        return $this->hasOne(DetailCompany::class);
    }
}
