<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;
use App\Models\DetailCompany;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class JournalController extends Controller
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
        $journal = Journal::select("journal.*","parafMentors",'namaSiswa')->join('company_details as b','b.id','=','journal.idCompanyDetail')
        ->join('students as c','c.id','=','b.idStudent')
        ->join('mentors as d','d.id','=','b.idMentors')
        ->where('d.email','=',Auth::user()->email)
        ->where('setuju',"=",0)
        ->latest()->paginate(5);
        return view('journal.acc', compact('journal'))->with('i', (request()->input('page', 1) - 1 ) * 5 );
       }else{
        $journal = Journal::select("journal.*","parafMentors","namaSiswa")->join('company_details as b','b.id','=','journal.idCompanyDetail')
        ->join('students as c','c.id','=','b.idStudent')
        ->join('mentors as d','d.id','=','b.idMentors')
        ->where('c.email','=',Auth::user()->email)
        ->latest()->paginate(5);
        return view('journal.index', compact('journal'))->with('i', (request()->input('page', 1) - 1 ) * 5 );
       }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idcmp = DetailCompany::select("company_details.*","company_details.id", "namaSiswa")->join('students','students.id',"=","company_details.idStudent")
        ->where('email','=',Auth::user()->email)->first();
        return view("journal.create", compact('idcmp'));
        $mytime = Carbon::now();
        echo $mytime->toDateTimeString();
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
            'bidangPekerjaan' => 'required',
            'uraianPekerjaan' => 'required'
        ] );
        
        $mytime = Carbon::now();
        echo $mytime->toDateTimeString();
         $idcmp = DetailCompany::select("company_details.*","company_details.id", "namaSiswa")->join('students','students.id',"=","company_details.idStudent")
        ->where('email','=',Auth::user()->email)->first();
        $journal = new Journal();
        $journal->idCompanyDetail = $idcmp->id;
        $journal->tanggalJurnal = $mytime;
        $journal->bidangPekerjaan = $request->bidangPekerjaan;
        $journal->uraianPekerjaan = $request->uraianPekerjaan;
        $journal->save();
        return redirect()->route('journal')->with('success', 'Sukses Menambah Journal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
       
        $journal = Journal::select("journal.*","parafMentors","namaSiswa")->join('company_details as b','b.id','=','journal.idCompanyDetail')
        ->join('mentors as c','c.id','=','b.idMentors')
        ->join('students as d','d.id', '=', 'b.idStudent')
        ->where('journal.id','=',$id)
        ->first();
        return view('journal.edit', compact('journal','level'));
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
        
       
        // $request->validate([
        //     'bidangPekerjaan' => 'required',
        //     'uraianPekerjaan' => 'required'
        // ]);
        $journal=Journal::find($id);
        $journal->update($request->all());
        return redirect()->route('journal')->with('success', 'Berhasil Mengubah Data Jurnal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $journal = Journal::find($id);
        unlink(public_path('images').'/'.$journal->parafMentors);
        $journal->delete();
        return redirect()->route('journal')->with('success','Berhasil Menghapus Data Jurnal');
    }
}
