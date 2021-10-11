<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\DetailCompany;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $level = Auth::user()->level;
       if($level=="mentor"){
        $presensi = Presensi::select("presensi.*","parafMentors",'namaSiswa', "parafSiswa")->join('company_details as b','b.id','=','presensi.idCompanyDetail')
        ->join('students as c','c.id','=','b.idStudent')
        ->join('mentors as d','d.id','=','b.idMentors')
        ->where('d.email','=',Auth::user()->email)
        ->where('setuju',"=",0)
        ->latest()->paginate(5);
        return view('presensi.acc', compact('presensi'))->with('i', (request()->input('page', 1) - 1 ) * 5 );
       }else{
        $presensi = Presensi::select("presensi.*","parafMentors",'namaSiswa', "parafSiswa")->join('company_details as b','b.id','=','presensi.idCompanyDetail')
        ->join('students as c','c.id','=','b.idStudent')
        ->join('mentors as d','d.id','=','b.idMentors')
        ->where('c.email','=',Auth::user()->email)
        ->latest()->paginate(5);
        return view('presensi.index', compact('presensi'))->with('i', (request()->input('page', 1) - 1 ) * 5 );
       }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idcmp = DetailCompany::select("company_details.*","company_details.id","namaSiswa")->join('students','students.id',"=","company_details.idStudent")
        ->where('email','=',Auth::user()->email)->first();
        return view("presensi.create", compact('idcmp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate( [
            'idCompanyDetail' => 'required',
            'keterangan' => 'required'
        ] );
        
        $idcmp = DetailCompany::select("company_details.*","company_details.id","namaSiswa")->join('students','students.id',"=","company_details.idStudent")
        ->where('email','=',Auth::user()->email)->first();

        $presensi = new Presensi();
        $presensi->idCompanyDetail = $idcmp->id;
        $presensi->keterangan = $request->keterangan;
        $presensi->save();
        return redirect()->route('presensi')->with('success', 'Sukses Melakukan Presensi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $level = Auth::user()->level;
        $presensi = Presensi::select("presensi.*","parafMentors","parafSiswa","namaSiswa")->join('company_details as b','b.id','=','presensi.idCompanyDetail')
        ->join('mentors as c','c.id','=','b.idMentors')
        ->join('students as d','d.id', '=', 'b.idStudent')
        ->where('presensi.id','=',$id)
        ->first();
        return view('presensi.edit', compact('presensi','level'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $presensi=Presensi::find($id);
        $presensi->update($request->all());
        return redirect()->route('presensi')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
