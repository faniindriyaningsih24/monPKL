<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailCompany;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\Mentors;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    //Memanggil view home
    public function home()
    {
        $perusahaan = Company::all()->count();
        $siswa = Students::all()->count();
        $guru = Teachers::all()->count();
        $mentor = Mentors::all()->count();
        $prakerin = DetailCompany::join("companies as c",'c.id','=','company_details.idCompany')
        ->join("teachers as d",'d.id','=','company_details.id_teacher')
        ->select("namaPerusahaan","namaGuru",'tglMulaiPKL','tglSelesaiPKL','id_teacher','idCompany','idMentors')
        ->distinct()
        ->count();
        return view('home', compact('perusahaan', 'siswa', 'guru', 'mentor', 'prakerin'));
    }
    public function home_siswa()
    {
        $cmpDetail = DetailCompany::select("company_details.*",'namaSiswa', "namaPerusahaan", "namaGuru", "namaMentors")
        ->join('students as b','b.id','=','company_details.idStudent')
        ->join('companies as c','c.id','=','company_details.idCompany')
        ->join('mentors as d','d.id','=','company_details.idMentors')
        ->join('teachers as e','e.id','=','company_details.id_teacher')
        ->where('b.email','=',Auth::user()->email)->first();
        // $cmpDetail = DetailCompany::where('students.email','=', Auth::user()->email);
        $siswa = Students::where('email','=',Auth::user()->email)->first();
        return view('home_siswa', compact('cmpDetail','siswa'));
    }
}
