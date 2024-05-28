<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('auth.login');
        
    }
    public function homepage(){
        $features = Feature::where('name', 'like', '%cek%')->get();

        return view('home', compact('features'));
    }

    public function feature(){
        $features = Feature::all();

        return view('feature', compact('features'));
    }

    public function profile(){
        $dateOnly = Auth::user()->created_at->format('Y-m-d');

        return view('userProfile', compact('dateOnly'));
    }

    public function updateProfile(Request $request){
        if ($request->hasFile('photo')) {
            $oldPhotoPath = public_path('photoprofile/' . Auth::user()->photo);
            if (file_exists($oldPhotoPath) && is_file($oldPhotoPath)) {
                unlink($oldPhotoPath);
            }
            $photo = Auth::id() . time() . '-' .$request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('photoprofile'), $photo);
            Auth::user()->photo = $photo;
        }


        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'bday' => $request->bday,
            'address' => $request->address,
            'gender' => $request->gender,
            'age' => $request->age,
            'tb' => $request->tb,
            'bb' => $request->bb,
        ];

        Auth::user()->fill($data);
        Auth::user()->save();

        return redirect('/Profile')->with('success', 'Profile updated successfully!');
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        $results = Feature::where('name', 'LIKE', "%{$query}%")->get();
        $link = Feature::select('link');

        return response()->json($results);
    }
}
