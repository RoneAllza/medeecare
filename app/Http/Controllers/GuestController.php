<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informasipenyakit;
use App\Models\User;


class GuestController extends Controller
{
    public function registrasi()
    {
        return view('auth.registrasi');
    }

    public function regis_proses(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required' // Ensure the 'name' field is also validated as required
        ]);

        // Create a new user with email, password, and name
        $user = new User([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'name' => $request->name,
        ]);

        // Save the user to the database
        $user->save();

        // Redirect to the login page or another page as needed
        return redirect()->route('login')->with('success', 'Account successfully registered');
    }


    public function informasipenyakit()
    {
      return view('informasipenyakit');
    }

    public function search(Request $request)
    {
        if ($request->has('search')){
            $informasipenyakit = Informasipenyakit::where('judul', 'like', '%' . $request->search . '%')->get();
        }
        else{
            $informasipenyakit = Informasipenyakit::all();
        }
        return view('informasipenyakit',['informasipenyakit' => $informasipenyakit]);
    }
}