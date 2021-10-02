<?php

namespace App\Models;

use App\Models\DetailCompany;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Teachers extends Model
{
    use HasFactory;
    protected $table = "teachers";
    protected $fillable = [
        "nuptk",
        "namaGuru",
        "email",
        "noHpGuru",
        "photoGuru",
        "parafGuru"
    ];

    public function guruPKL()
    {
        return $this->hasOne(DetailCompany::class);
    }
}
