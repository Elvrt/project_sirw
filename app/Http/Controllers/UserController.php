<?php

namespace App\Http\Controllers;

use App\Models\RoleModel;
use App\Models\WargaModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();

        return view('User.index', $data = ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $existingIds = User::pluck('id_warga')->toArray();
        $roles = RoleModel::all();
        $niks = WargaModel::all();

        return view('User.create', compact('roles', 'niks', 'existingIds'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create([
            'id_role' => $request->id_role,
            'id_warga' => $request->id_warga,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/user')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        return view('User.show', $data = ['data' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $existingIds = User::pluck('id_warga')->toArray();
        $roles = RoleModel::all();
        $niks = WargaModel::all();
        $user = User::find($id);

        return view('User.edit', $data = ['data' => $user], compact('roles', 'niks', 'existingIds'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = User::find($id);

        $data->update([
            'id_role' => $request->id_role,
            'id_warga' => $request->id_warga,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/user')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            User::destroy($id);

            return redirect('/user')->with('success', 'Data berhasil dihapus');
        } catch (e) {
            return redirect('/user')->with('error', 'Data gagal dihapus');
        }
    }
}
