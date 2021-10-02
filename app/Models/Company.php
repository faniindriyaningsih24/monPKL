<?php

namespace App\Models;

use App\Models\DetailCompany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [ 'namaPerusahaan', 'jenisUsaha', 'namaPimpinan', 'namaHrd', 'alamat', 'noHpPerusahaan' ];

    public function perusahaanPKL()
    {
        return $this->hasOne(DetailCompany::class);
    }
}
