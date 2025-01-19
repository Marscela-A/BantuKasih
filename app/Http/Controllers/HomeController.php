<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Profile;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('logout');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
        $profile = Profile::where('user_id', $user->id)->first();
        return view('profile', compact('user', 'profile'));
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'Anda telah berhasil logout.');
    }
    //edit->get.head->akun{akun}/edit, index->get.head, store->post, create->get.head->akun/create, show->get.head->akun{akun}
//update->put.patch->akunn{akun}, destroy->delete->akun{akun}
    public function create()
    {
        //
        $user = auth()->user();
        $profile = Profile::where('user_id', $user->id)->first();
        return view('profile_create', compact('profile'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $request->validate([
            'name' => 'required|string|max:255',
            'phone_number' => 'required',
            'address' => 'required',
            'sex' => 'required'
        ]);

        User::create($request->only('phone_number', 'address', 'sex'));
        return route('profile_show')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = Auth::user();
        $profilePhoto = asset('storage/profile_pictures/' . $user->profile_photo); // Handle default if no photo
        $profile = Profile::where('user_id', $user->id)->first();
        return view('profile_show', compact('user', 'profilePhoto', 'profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $user = auth()->user();
        $profile = Profile::where('user_id', $user->id)->first();
        return view('profile_edit', compact('user','profile'));        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255', // Hanya untuk validasi, tidak diupdate
            'email' => 'required|string|email|unique:users,email,' . $user->id, // Hanya untuk validasi, tidak diupdate
            'photo' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'mobile_number' => 'required|string',
            'address' => 'required|string',
            'gender' => 'required|in:male,female,none',
        ]);

        // Update user profile data
        $user->update([
            'mobile_number' => $request->mobile_number,
            'address' => $request->address,
            'gender' => $request->gender,
        ]);

        // Handle photo upload
        if ($request->hasFile('photo')) {
            if ($user->profile && $user->profile->photo) {
                Storage::disk('public')->delete('photos/' . $user->profile->photo); 
            }

            $path = $request->file('photo')->store('photos', 'public');
            $user->profile->update(['photo' => $path]);
        }

        return redirect()->route('profile')->with('success', 'Profil berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect()->route('profile')->with('success', 'Data Akun berhasil dihapus.');
    }
}
