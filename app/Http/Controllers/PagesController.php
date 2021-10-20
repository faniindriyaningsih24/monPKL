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
        return view('home');
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
