<?php

namespace App\Models;

use App\Http\Controllers\JournalController;
use App\Models\Company;
use App\Models\Mentors;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\Journal;
use App\Models\Presensi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailCompany extends Model
{
    use HasFactory;
    protected $table = "company_details";
    protected $fillable = ['idStudent', 'idCompany', 'id_teacher', 'idMentors', 'tglMulaiPKL', 'tglSelesaiPKL'];

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

    public function journal()
    {
        return $this->hasMany(Journal::class);
    }

    public function presensi()
    {
        return $this->hasMany(Presensi::class);
    }

    
}
