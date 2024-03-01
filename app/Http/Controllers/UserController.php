<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Mail\verifiedEmail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('super_user');
        return view('admin.user.index', [
            'title' => 'User',
            'no' => 1,
            'user' => User::where('deleted_at', null)->get()
        ]);
    }

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('super_user');
        return view('admin.user.create', [
            'title' => 'Tambah User'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('super_user');
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
            'email' => ':attribute tidak sesuai!',
            'max' => ':attribute terlalu panjang!',
            'unique' => ':attribute sudah ada!',
            'confirmed' => ':attribute password tidak sesuai!',
            'min' => ':attribute harus lebih 8 karakter!',
        ]);

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'super_user' => $request['super_user'] ? 1 : 0,
            'password' => Hash::make($request['password']),
        ]);
        Mail::to($request['email'])->send(new verifiedEmail($user));
        $user ? Alert::success('kerja bagus', 'Data berhasil disimpan!') : Alert::error('kerja buruk', 'Data gagal disimpan!');
        return redirect('/admin/user');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $this->authorize('super_user');
        return view('admin.user.edit', [
            'title' => 'Edit User',
            'user' => User::find(Crypt::decryptString($id))
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sosmed  $sosmed
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('super_user');
        $user = User::find(Crypt::decryptString($id));

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
        ], [
            'required' =>  ':attribute tidak boleh kosong!',
            'email' => ':attribute tidak sesuai!',
            'max' => ':attribute terlalu panjang!',
            'unique' => ':attribute sudah ada!',
            'confirmed' => ':attribute password tidak sesuai!',
            'min' => ':attribute harus lebih 8 karakter!',
        ]);

        if (isset($request->password)) {
            $request->validate([
                'password' => ['string', 'min:8', 'confirmed'],
            ], [
                'unique' => ':attribute sudah ada!',
                'confirmed' => ':attribute password tidak sesuai!',
                'min' => ':attribute harus lebih 8 karakter!',
            ]);

            User::find($user->id)->update([
                'password' => Hash::make($request['password']),
            ]);
        }

        User::find($user->id)->update([
            'name' => $request['name'],
            'email' => $request['email'],
        ]);

        Alert::success('kerja bagus', 'Data berhasil diperbarui!');
        return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sosmed  $sosmed
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('super_user');
        $user = User::find(Crypt::decryptString($id));

        $user->delete();

        Alert::success('kerja bagus', 'Data berhasil dihapus!');
        return redirect('/admin/user');
    }
    
    public function verifyMail($id_user, $matcher)
    {
        $user = User::find(Crypt::decryptString($id_user));

        if ($user->password == $matcher) {
            $user->update([
                "email_verified_at" => Carbon::now()
            ]);

            Alert::success('kerja bagus', 'Email berhasil diverifikasi!');
        }

        return redirect('/admin/dashboard');
    }
    
    public function sendVerifyMail($id_user)
    {
        $user = User::find(Crypt::decryptString($id_user));
        Mail::to($user->email)->send(new verifiedEmail($user));

        Alert::success('kerja bagus', 'Email berhasil dikirim!');
        return redirect('/admin/dashboard');
    }
}
