<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentors;

class MentorController extends Controller
{
    public function index()
    {
        $mentors = Mentors::latest()->paginate(5);
        return view('mentors.index', compact('mentors'))->with('i', (request()->input('page', 1) - 1 ) * 5 );
    }

    public function create()
    {
        return view('mentors.create');
    }

    public function store(Request $request)
    {
        $request->validate( [
            'namaMentors' => 'required',
            'email' => 'required|email',
            'noHpMentors' => 'required',
            'photoMentors' => 'required|image|mimes:jpeg,jpg,png',
            'parafMentors' => 'required|image|mimes:jpeg,jpg,png'
        ] );

        $fotomentor = $request->file('photoMentors');
        $fotomentorName = mt_rand(1000000, 9999999) . '.' . $fotomentor->extension();
        $fotomentor->move(public_path('images'), $fotomentorName);

        $parafMentor = $request->file('parafMentors');
        $parafMentorName = mt_rand(1000000, 9999999) . '.' . $parafMentor->extension();
        $parafMentor->move(public_path('images'), $parafMentorName);

        $mentor = new Mentors();
        $mentor->namaMentors = $request->namaMentors;
        $mentor->email = $request->email;
        $mentor->noHpMentors = $request->noHpMentors;
        $mentor->photoMentors = $fotomentorName;
        $mentor->parafMentors = $parafMentorName;

        $mentor->save();

        return redirect()->route('mentors')->with('success', 'Sukses Menambah Mentor');
    }

    public function destroy($id)
    {
        $mentor = Mentors::find($id);
        unlink(public_path('images').'/'.$mentor->photoMentors);
        unlink(public_path('images').'/'.$mentor->parafMentors);
        $mentor->delete();        
        return redirect()->route('mentors')->with('success', 'Berhasil Menghapus Data Mentor');
    }
}
