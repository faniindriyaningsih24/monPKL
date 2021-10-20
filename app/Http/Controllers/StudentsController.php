<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Imports\ImportStudents;
use App\Models\User;
use Hash;
use Maatwebsite\Excel\Facades\Excel;
use Psy\ExecutionClosure;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Students::latest()->paginate(5);
        return view('students.index', compact('students'))->with('i', (request()->input('page', 1) - 1 ) * 5 );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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
            'nis' => 'required|unique:students,nis',
            'namaSiswa' => 'required',
            'kompetensiKeahlian' => 'required',
            'kelas' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'jenisKelamin' => 'required',
            'golDarah' => 'required',
            'tahunPelajaran' => 'required',
            'noHP' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'namaOrtu' => 'required',
            'alamatOrtu' => 'required',
            'noHpOrtu' => 'required',
            'photoSiswa' => 'required|image|mimes:jpeg,jpg,png',
            'parafSiswa' => 'required|image|mimes:jpeg,jpg,png'
        ] );

        $pasFoto = $request->file('photoSiswa');
        $pasFotoName = mt_rand(1000000, 9999999) . '.' . $pasFoto->extension();
        $pasFoto->move( public_path('images'), $pasFotoName );

        $paraf = $request->file('parafSiswa');
        $parafName = mt_rand(1000000, 9999999) . '.' . $paraf->extension();
        $paraf->move( public_path('images'), $parafName );

        $student = new Students();
        $student->nis = $request->nis;
        $student->namaSiswa = $request->namaSiswa;
        $student->kompetensiKeahlian = $request->kompetensiKeahlian;
        $student->kelas = $request->kelas;
        $student->tempatLahir = $request->tempatLahir;
        $student->tanggalLahir = $request->tanggalLahir;
        $student->jenisKelamin = $request->jenisKelamin;
        $student->golDarah = $request->golDarah;
        $student->tahunPelajaran = $request->tahunPelajaran;
        $student->noHP = $request->noHP;
        $student->email = $request->email;
        $student->alamat = $request->alamat;
        $student->namaOrtu = $request->namaOrtu;
        $student->alamatOrtu = $request->alamatOrtu;
        $student->noHpOrtu = $request->noHpOrtu;
        $student->photoSiswa = $pasFotoName;
        $student->parafSiswa = $parafName;

        $student->save();

        return redirect()->route('students')->with('success', 'Suskes Menambah Siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Students::find($id);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Students::find($id);
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate( [
            'nis' => 'required',
            'namaSiswa' => 'required',
            'kompetensiKeahlian' => 'required',
            'kelas' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'jenisKelamin' => 'required',
            'golDarah' => 'required',
            'tahunPelajaran' => 'required',
            'noHP' => 'required',
            'email' => 'required',
            'alamat' => 'required',
            'namaOrtu' => 'required',
            'alamatOrtu' => 'required',
            'noHpOrtu' => 'required',
            'photoSiswa' => 'image|mimes:jpeg,jpg,png',
            'parafSiswa' => 'image|mimes:jpeg,jpg,png'
        ] );

        $student = Students::find($request->id);

        if( $request->hasFile('photoSiswa') ) {
            //unlink(public_path('images').'/'.$student->photoSiswa);
            $pasFoto = $request->file('photoSiswa');
            $pasFotoName = mt_rand(1000000, 9999999) . '.' . $pasFoto->extension();
            $pasFoto->move( public_path('images'), $pasFotoName );
            $student->photoSiswa = $pasFotoName;
        }

        if( $request->hasFile('parafSiswa') ) {
            //unlink(public_path('images').'/'.$student->parafSiswa);
            $paraf = $request->file('parafSiswa');
            $parafName = mt_rand(1000000, 9999999) . '.' . $paraf->extension();
            $paraf->move( public_path('images'), $parafName );
            $student->parafSiswa = $parafName;
        }

        $student->nis = $request->nis;
        $student->namaSiswa = $request->namaSiswa;
        $student->kompetensiKeahlian = $request->kompetensiKeahlian;
        $student->kelas = $request->kelas;
        $student->tempatLahir = $request->tempatLahir;
        $student->tanggalLahir = $request->tanggalLahir;
        $student->jenisKelamin = $request->jenisKelamin;
        $student->golDarah = $request->golDarah;
        $student->tahunPelajaran = $request->tahunPelajaran;
        $student->noHP = $request->noHP;
        $student->email = $request->email;
        $student->alamat = $request->alamat;
        $student->namaOrtu = $request->namaOrtu;
        $student->alamatOrtu = $request->alamatOrtu;
        $student->noHpOrtu = $request->noHpOrtu;
        
        $student->save();

        return redirect()->route('students')->with('success', 'Berhasil Mengubah Data Siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Students $students
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Students::find($id);
            //unlink(public_path('images').'/'.$student->photoSiswa);
            //unlink(public_path('images').'/'.$student->parafSiswa);
        User::where("email",$student->email)->delete();
        $student->delete();
       
        return redirect()->route('students')->with('success', 'Berhasil Menghapus Data Siswa');
    }

    public function importView()
    {
        return view('students.importView');
    }
    public function import()
    {
        Excel::import(new ImportStudents,request()->file('file')); //import ke DB student
        $rows = Excel::toCollection(new ImportStudents, request()->file('file')); //data dari excel dibuat array 
        //agar dapat dicreate ke table user
        $row = collect($rows)->toArray();
        foreach($row[0] as $key=>$value){
            $cek = User::where("email",$value["email"])->first();//cek user ada apa tidak
            if($cek==""){
                //jika tidak ada create baru
                $user = new User;
                $user->name = ucwords(strtolower($value["namasiswa"]));
                $user->email = strtolower($value["email"]);
                $user->password = Hash::make("siswa1234");
                $user->level = "siswa";
                $user->email_verified_at = \Carbon\Carbon::now();
                $simpan = $user->save();
            }else{
                //jika ada update passwordnya saja
                $user = User::find($cek->id);
                $user->password = Hash::make("siswa1234");
                $simpan = $user->save();
            }
        }
        return back()->with('success', 'Berhasil Import Data Siswa');
    }
}
