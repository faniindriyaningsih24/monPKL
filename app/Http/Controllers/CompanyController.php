<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mengambil data terakhir dan pagination 5 list
        $companies = Company::latest()->paginate(10);

        // Mengirim variabel $company ke halaman view company
        //include dengam number index
        return view('companies.index', compact('companies'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //membuat validasi untuk nama dan kontak perusahaan wajib diisi;
        $request->validate( [
            'nama' => 'required',
            'kontak' => 'required'
        ] );

        //insert ke DB
        Company::create( $request->all() );
        return redirect()->route('companies.index')
                            ->with('success', 'Berhasil menambah perusahaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //validasi update
        $request->validate( [
            'nama' => 'required',
            'kontak' => 'required'
        ] );

        //update data
        $company->update( $request->all() );

        return redirect()->route('companies.index')
                            ->with('success', 'Mengubah data perusahaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //menghapus data perusahaan berdasarkan parameter yang dikirimkan
        $company->delete();

        return redirect()->route('companies.index')
                            ->with('success', 'Berhasil menghapus data');
    }
}
