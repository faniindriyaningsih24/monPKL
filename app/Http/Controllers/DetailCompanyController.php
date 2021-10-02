<?php

namespace App\Http\Controllers;

use App\Models\Mentors;
use App\Models\Students;
use App\Models\Teachers;
use App\Models\Company;
use App\Models\DetailCompany;
use Illuminate\Http\Request;

class DetailCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailCompany = DetailCompany::latest()->paginate(5);
        return view('detail_company.index', compact('detailCompany'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Students::all();
        $mentors = Mentors::all();
        $companies = Company::all();
        $teachers = Teachers::all();

        return view( 'detail_company.create', compact( 'students', 'mentors', 'companies', 'teachers' ) );
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
            'idStudent' => 'required',
            'idCompany' => 'required',
            'id_teacher' => 'required',
            'idMentors' => 'required'
        ] );
        DetailCompany::create( $request->all() );
        return redirect()->route('company-detail.index')->with('success', 'Sukses Menambah Data');
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
        $students = Students::all();
        $mentors = Mentors::all();
        $companies = Company::all();
        $teachers = Teachers::all();
        $dc = DetailCompany::find($id);
        return view('detail_company.edit', compact('dc', 'students', 'mentors', 'companies', 'teachers'));
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
        $request->validate( [
            'idStudent' => 'required',
            'idCompany' => 'required',
            'id_teacher' => 'required',
            'idMentors' => 'required'
        ] );
        $dc = DetailCompany::find($id);
        $dc->update( $request->all() );
        return redirect()->route('company-detail.index')
                            ->with('success', 'Berhasil Mengubah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dc = DetailCompany::find($id);
        $dc->delete();
        return redirect()->route('company-detail.index')->with('success', 'Berhasil Menghapus Data');
    }
}
