<?php

namespace App\Models;

use App\Models\Company;
use App\Models\Mentors;
use App\Models\Students;
use App\Models\Teachers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailCompany extends Model
{
    use HasFactory;
    protected $table = "company_details";
    protected $fillable = ['idStudent', 'idCompany', 'id_teacher', 'idMentors'];

    public function siswa()
    {
        return $this->belongsTo(Students::class, 'idStudent');
    }

    public function perusahaan()
    {
        return $this->belongsTo(Company::class, 'idCompany');
    }

    public function mentor()
    {
        return $this->belongsTo(Mentors::class, 'idMentors');
    }

    public function guru()
    {
        return $this->belongsTo(Teachers::class, 'id_teacher');
    }
}
