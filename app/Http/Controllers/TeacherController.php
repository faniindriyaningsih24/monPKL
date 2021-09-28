<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teachers;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teachers::latest()->paginate(5);
        return view('teachers.index', compact('teachers'))->with('i', (request()->input('page', 1) - 1 ) * 5 );
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $request->validate( [
            'nuptk' => 'required',
            'namaGuru' => 'required',
            'email' => 'required|email',
            'noHpGuru' => 'required',
            'photoGuru' => 'required|image|mimes:jpeg,jpg,png',
            'parafGuru' => 'required|image|mimes:jpeg,jpg,png'
        ] );

        $fotoguru = $request->file('photoGuru');
        $fotoguruName = mt_rand(1000000, 9999999) . '.' . $fotoguru->extension();
        $fotoguru->move(public_path('images'), $fotoguruName);

        $parafguru = $request->file('parafGuru');
        $parafguruName = mt_rand(1000000, 9999999) . '.' . $parafguru->extension();
        $parafguru->move(public_path('images'), $parafguruName);

        $teacher = new Teachers();
        $teacher->nuptk = $request->nuptk;
        $teacher->namaGuru = $request->namaGuru;
        $teacher->email = $request->email;
        $teacher->noHpGuru = $request->noHpGuru;
        $teacher->photoGuru = $fotoguruName;
        $teacher->parafGuru = $parafguruName;

        $teacher->save();

        return redirect()->route('teachers')->with('success', 'Sukses Menambah Guru');
    }

    public function destroy($id)
    {
        $teacher = Teachers::find($id);
        unlink(public_path('images').'/'.$teacher->photoGuru);
        unlink(public_path('images').'/'.$teacher->parafGuru);
        $teacher->delete();        
        return redirect()->route('teachers')->with('success', 'Berhasil Menghapus Data Guru');
    }

    public function edit($id)
    {
        $teacher = Teachers::find($id);
        return view('teachers.edit', compact('teacher'));
    }

    public function update(Request $request)
    {
        $request->validate( [
            'nuptk' => 'required',
            'namaGuru' => 'required',
            'email' => 'required|email',
            'noHpGuru' => 'required',
            'photoGuru' => 'image|mimes:jpeg,jpg,png',
            'parafGuru' => 'image|mimes:jpeg,jpg,png'
        ] );

        $teacher = Teachers::find($request->id);

        if( $request->hasFile('photoGuru') )
        {
            unlink(public_path('images').'/'.$teacher->photoGuru);
            $fotoguru = $request->file('photoGuru');
            $fotoguruName = mt_rand(1000000, 9999999) . '.' . $fotoguru->extension();
            $fotoguru->move(public_path('images'), $fotoguruName);
            $teacher->photoGuru = $fotoguruName;
        }

        if( $request->hasFile('parafGuru') )
        {
            unlink(public_path('images').'/'.$teacher->parafGuru);
            $parafguru = $request->file('parafGuru');
            $parafguruName = mt_rand(1000000, 9999999) . '.' . $parafguru->extension();
            $parafguru->move(public_path('images'), $parafguruName);
            $teacher->parafGuru = $parafguruName;
        }

        $teacher->nuptk = $request->nuptk;
        $teacher->email = $request->email;
        $teacher->namaGuru = $request->namaGuru;
        $teacher->noHpGuru = $request->noHpGuru;

        $teacher->save();

        return redirect()->route('teachers')->with('success', 'Berhasi Mengubah Data Guru');

    }
}
