<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard', [
            'title' => 'Dashboard',
        ]);
    }

    public function profilAdmin()
    {
        $this->authorize('super_user');
        return view('admin.profil', [
            'title' => 'Profil Admin'
        ]);
    }

    public function updateProfil(Request $request, User $user)
    {
        $this->authorize('super_user');
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
            'email' =>  'Format :attribute salah!'
        ]);

        if (Hash::check($request->password_lama, auth()->user()->password)) {

            if (isset($request->password_baru)) {
                User::where($user->id)->update([
                    'password' => bcrypt($request->password_baru)
                ]);
            }

            User::where($user->id)->update($validateData);
            
            Alert::success('kerja bagus', 'Data berhasil diperbarui!');
            return redirect('/admin/profil');
        }

        Alert::error('kerja bagus', 'Data gagal diperbarui!');
        return redirect('/admin/profil');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('notif_logout', '');
    }
}
