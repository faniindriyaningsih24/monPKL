<?php

namespace App\Models;

use App\Models\DetailCompany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    protected $table = "journal";
    protected $fillable = [
        "idCompanyDetail",	
        "tanggalJurnal",
        "bidangPekerjaan",
        "uraianPekerjaan",
        "setuju"
    ];

    public function detailCompany()
    {
        return $this->belongsTo(DetailCompany::class, 'idCompanyDetail');
    }
}
