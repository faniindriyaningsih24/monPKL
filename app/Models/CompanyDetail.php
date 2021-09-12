<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    use HasFactory;
    protected $table = "company_details";

    //RELASi DENGAN TABEL COMPANY
    public function company()
    {
        return $this->belongsTo( Company::class );
    }
}
