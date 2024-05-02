<?php

namespace App\Http\Controllers;

use App\Models\RtModel;
use App\Models\KartuKeluargaModel;
use App\Models\WargaModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class WargaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $warga = WargaModel::all();
        $kartuKeluarga = KartuKeluargaModel::all();
        $rt = RtModel::all();

        return view('RW.Warga.index', ['warga' => $warga, 'kartuKeluarga' => $kartuKeluarga, 'rt' => $rt]);
    }

    // public function list(Request $request)
    // {
    //     // Mulai dengan membangun kueri untuk mendapatkan data warga
    //     $wargas = WargaModel::select(
    //         'id_warga',
    //         'id_kk',
    //         'nik',
    //         'nama_warga',
    //         'jenis_kelamin',
    //         'tempat_lahir',
    //         'tanggal_lahir',
    //         'alamat',
    //         'nomor_telepon',
    //         'agama',
    //         'pekerjaan',
    //         'penghasilan',
    //         'status_hubungan'
    //     )->with('kartuKeluarga.rt'); // Memuat relasi rt dari kartuKeluarga

    //     // Jika ada nomor KK yang diberikan di dalam permintaan, filter data warga berdasarkan KK tersebut
    //     if ($request->has('id_rt')) {
    //         $wargas->whereHas('kartuKeluarga.rt', function ($query) use ($request) {
    //             $query->where('id_rt', $request->id_rt);
    //         });
    //     }

    //     // Gunakan DataTables untuk membuat respons yang sesuai dengan format yang diharapkan
    //     return DataTables::of($wargas)
    //             ->addIndexColumn()
    //             ->addColumn('rt', function ($warga) {
    //                 return $warga->kartuKeluarga->rt->nomor_rt ?? '-';
    //             })
    //             ->addColumn('aksi', function ($warga) {
    //                 $detailUrl = url('/RW/Warga/' . $warga->id_warga);
    //                 $editUrl = url('/RW/Warga/' . $warga->id_warga . '/edit');
    //                 $deleteUrl = url('/RW/Warga/' . $warga->id_warga);

    //                 $btn = '<a href="' . url('/RW/Warga/' . $warga->id_warga) . '" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg">Detail</a> ';
    //                 $btn .= '<a href="' . url('/RW/Warga/' . $warga->id_warga . '/edit') . '" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-lg">Edit</a> ';
    //                 $btn .= '<form class="inline-block" method="POST" action="' . url('/RW/Warga/' . $warga->id_warga) . '">'
    //                         . csrf_field() . method_field('DELETE')
    //                         . '<button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg" onclick="return confirm(\'Apakah Anda yakin menghapus data ini?\')">Hapus</button></form>';
    //                 return $btn;
    //             })
    //             ->rawColumns(['aksi'])
    //             ->make(true);
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rts = RtModel::all();
        $kks = KartuKeluargaModel::all();

        return view('RW.Warga.create', compact('rts', 'kks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        WargaModel::create([
            'id_kk' => $request->id_kk,
            'nik' => $request->nik,
            'nama_warga' => $request->nama_warga,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            'penghasilan' => $request->penghasilan,
            'status_hubungan' => $request->status_hubungan,
        ]);

        return redirect('/RW/Warga')->with('success', 'Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $warga = WargaModel::find($id);

        return view('RW.Warga.show', $data = ['data' => $warga]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rts = RtModel::all();
        $kks = KartuKeluargaModel::all();
        $warga = WargaModel::find($id);

        return view('RW.Warga.edit', $data = ['data' => $warga], compact('rts', 'kks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = WargaModel::find($id);

        $data->update([
            // 'id_kk' => $request->id_kk,
            'nik' => $request->nik,
            'nama_warga' => $request->nama_warga,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'nomor_telepon' => $request->nomor_telepon,
            'agama' => $request->agama,
            'pekerjaan' => $request->pekerjaan,
            // 'penghasilan' => $request->penghasilan,
            'status_hubungan' => $request->status_hubungan,
        ]);

        return redirect('/RW/Warga')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            WargaModel::destroy($id);

            return redirect('/RW/Warga')->with('success', 'Data berhasil dihapus');
        } catch (e) {
            return redirect('/RW/Warga')->with('error', 'Data gagal dihapus');
        }
    }
}
