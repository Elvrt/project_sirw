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
    public function index(Request $request)
    {
        $perPage = 10;
        $currentPage = $request->query('page', 1);
        $startNumber = ($currentPage - 1) * $perPage + 1;

        // Retrieve filter and search parameters from the request
        $search = $request->query('search');

        // Query the WargaModel based on the parameters
        $userQuery = User::query();

        if ($search) {
            $userQuery->where(function ($query) use ($search) {
                $query->where('username', 'like', '%' . $search . '%')
                    ->orWhereHas('role', function ($query) use ($search) {
                        $query->where('nama_role', 'like', '%' . $search . '%');
                     })
                     ->orWhereHas('warga', function ($query) use ($search) {
                        $query->where('nama_warga', 'like', '%' . $search . '%');
                     });
            });
        }

        // Paginate the result
        $user = $userQuery->paginate($perPage);

        return view('RW.User.index', ['user' => $user, 'startNumber'=> $startNumber]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $existingIds = User::pluck('id_warga')->toArray();
        $roles = RoleModel::all();
        $niks = WargaModel::all();

        return view('RW.User.create', compact('roles', 'niks', 'existingIds'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'id_role' => 'required',
            'id_warga' => 'required|unique:user,id_warga',
            'username' => 'required|max:50|unique:user,username',
            'password' => 'required',
        ]);

        User::create([
            'id_role' => 10,
            'id_warga' => $request->id_warga,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        return redirect('RW/User')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        return view('RW.User.show', $data = ['data' => $user]);
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

        return view('RW.User.edit', $data = ['data' => $user], compact('roles', 'niks', 'existingIds'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            // 'id_role' => 'required',
            'id_warga' => 'required|unique:user,id_warga,'.$id.',id_user',
            'username' => 'required|max:50|unique:user,username,'.$id.',id_user',
            'password' => 'nullable',
        ]);

        User::find($id)->update([
            // 'id_role' => $request->id_role,
            'id_warga' => $request->id_warga,
            'username' => $request->username,
            'password' => $request->password ? bcrypt($request->password) : User::find($id)->password,
        ]);

        return redirect('RW/User')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = User::find($id);
        if (!$check) {
            return redirect('/RW/User')->with('error', 'Data tidak ditemukan');
        }

        try {
            User::destroy($id);

            return redirect('/RW/User')->with('success', 'Data berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('/RW/User')->with('error', 'Data gagal dihapus');
        }
    }
}
