<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentors;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\Company;
use App\Models\Journal;
use App\Models\Presensi;
use App\Models\DetailCompany;
use Illuminate\Support\Facades\Auth;


class infoPKLController extends Controller
{
    public function indexAll(){
        //$infoAll=DetailCompany::get();
        $infoAll = DetailCompany::join("companies as c",'c.id','=','company_details.idCompany')
        ->join("teachers as d",'d.id','=','company_details.id_teacher')
        ->select("namaPerusahaan","namaGuru",'tglMulaiPKL','tglSelesaiPKL','id_teacher','idCompany','idMentors')
        ->distinct()
        ->get();
        return view("infoPKL.indexAll", compact('infoAll'));
    }

    public function show($id){
        $siswa = Students::find($id);
        $idcmpDetail=DetailCompany::where('idStudent',$id)->first();
        // $presensi=Presensi::where('idCompanyDetail',$idcmpDetail->id)->get();
        $presensi=Presensi::select("presensi.*","parafMentors","parafSiswa")->join('company_details as b','b.id','=','presensi.idCompanyDetail')
        ->join('students as c','c.id','=','b.idStudent')
        ->join('mentors as d','d.id','=','b.idMentors')
        ->where('idCompanyDetail',$idcmpDetail->id)->get();
        $journal=Journal::where('idCompanyDetail',$idcmpDetail->id)->get();
        $journal=Journal::select("journal.*","parafMentors")->join('company_details as b','b.id','=','journal.idCompanyDetail')
        ->join('mentors as d','d.id','=','b.idMentors')
        ->where('idCompanyDetail',$idcmpDetail->id)->get();
        return view('infoPKL.show',compact('siswa','journal','presensi'));
    }

    public function infoPKLMentor()
    {
        $cmpDetailMentor = DetailCompany::select("company_details.*",'namaSiswa', "namaPerusahaan", "namaGuru", "namaMentors")
        ->join('students as b','b.id','=','company_details.idStudent')
        ->join('companies as c','c.id','=','company_details.idCompany')
        ->join('mentors as d','d.id','=','company_details.idMentors')
        ->join('teachers as e','e.id','=','company_details.id_teacher')
        ->where('d.email','=',Auth::user()->email)->get();
        // $cmpDetail = DetailCompany::where('students.email','=', Auth::user()->email);
        
        return view('infoPKL.infoPKLMentor', compact('cmpDetailMentor'));
    }
    public function infoPKLTeachers()
    {
        $cmpDetailTeachers = DetailCompany::select("company_details.*",'namaSiswa', "namaPerusahaan", "namaGuru", "namaMentors")
        ->join('students as b','b.id','=','company_details.idStudent')
        ->join('companies as c','c.id','=','company_details.idCompany')
        ->join('mentors as d','d.id','=','company_details.idMentors')
        ->join('teachers as e','e.id','=','company_details.id_teacher')
        ->where('e.email','=',Auth::user()->email)->get();
        // $cmpDetailTeachers = DetailCompany::where('students.email','=', Auth::user()->email);
        
        return view('infoPKL.infoPKLTeachers', compact('cmpDetailTeachers'));
        // return view('infoPKL.infoPKLTeachers');s
    }

    public function infoPKLSiswa(){
        $cmpDetail = DetailCompany::select("company_details.*",'namaSiswa', "namaPerusahaan", "namaGuru", "namaMentors")
        ->join('students as b','b.id','=','company_details.idStudent')
        ->join('companies as c','c.id','=','company_details.idCompany')
        ->join('mentors as d','d.id','=','company_details.idMentors')
        ->join('teachers as e','e.id','=','company_details.id_teacher')
        ->where('b.email','=',Auth::user()->email)->first();
        // $cmpDetail = DetailCompany::where('students.email','=', Auth::user()->email);
        $siswa = Students::where('email','=',Auth::user()->email)->first();
        return view('infoPKL.infoPKLSiswa', compact('cmpDetail','siswa'));
    }

}
