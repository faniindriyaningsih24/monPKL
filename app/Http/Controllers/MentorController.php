<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentors;
use App\Models\User;
use Hash;

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
            'email' => 'required',
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
        
        if($mentor->save()){
            $user = new User;
            $user->name = ucwords(strtolower($request->namaMentors));
            $user->email = strtolower($request->email);
            $user->password = Hash::make("mentor1234");
            $user->level = "mentor";
            $user->email_verified_at = \Carbon\Carbon::now();
            $user->save();
        }

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

    public function edit($id)
    {
        $mentor = Mentors::find($id);
        return view('mentors.edit', compact('mentor'));
    }

    public function update( Request $request )
    {
        $request->validate( [
            'namaMentors' => 'required',
            'email' => 'required|email',
            'noHpMentors' => 'required',
            'photoMentors' => 'image|mimes:jpeg,jpg,png',
            'parafMentors' => 'image|mimes:jpeg,jpg,png'
        ] );

        $mentor = Mentors::find($request->id);

        if( $request->hasFile('photoMentors') )
        {
            unlink(public_path('images').'/'.$mentor->photoMentors);
            $fotomentor = $request->file('photoMentors');
            $fotomentorName = mt_rand(1000000, 9999999) . '.' . $fotomentor->extension();
            $fotomentor->move(public_path('images'), $fotomentorName);
            $mentor->photoMentors = $fotomentorName;
        }

        if( $request->hasFile('parafMentors') )
        {
            unlink(public_path('images').'/'.$mentor->parafMentors);
            $parafmentor = $request->file('parafMentors');
            $parafmentorName = mt_rand(1000000, 9999999) . '.' . $parafmentor->extension();
            $parafmentor->move(public_path('images'), $parafmentorName);
            $mentor->parafMentors = $parafmentorName;
        }

        $mentor->namaMentors = $request->namaMentors;
        $mentor->email = $request->email;
        $mentor->noHpMentors = $request->noHpMentors;

        $mentor->save();

        return redirect()->route('mentors')->with('success', 'Berhasi Mengubah Data Mentor');
    }
}
