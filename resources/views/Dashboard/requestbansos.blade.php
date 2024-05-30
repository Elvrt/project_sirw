@extends('./layout/warga')
@section('content')

<style>
    .form-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 1rem;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        background-color: #f9f9f9;
        margin-top: 1%
    }
    .form-group {
        margin-bottom: 1rem;
    }
    .form-group label {
        display: block;
        font-weight: bold;
    }
    .form-group input {
        width: 100%;
        padding: 0.5rem;
        margin-top: 0.5rem;
        box-sizing: border-box;
    }
    .form-group button {
        padding: 0.5rem 1rem;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        width: 100%;
        font-size: 1rem;
    }
    .form-group button:hover {
        background-color: #45a049;
    }
</style>
<div><h1 style="text-align: center; margin-top: 2rem; font-size: 50px">Pendaftaran Bantuan Sosial</h1></div>
<div class="bg-putih shadow-md mx-5 mb-2 px-3">
    <a href="/pengajuanbansos" class="bg-army-muda text-putih py-2 px-4 ml-20 mt-44 rounded-lg absolute top-0 left-0  flex items-center hover:bg-army-kuning">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M7.28 7.72a.75.75 0 0 1 0 1.06l-2.47 2.47H21a.75.75 0 0 1 0 1.5H4.81l2.47 2.47a.75.75 0 1 1-1.06 1.06l-3.75-3.75a.75.75 0 0 1 0-1.06l3.75-3.75a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
        </svg>
    </a>
</div>
<div class="form-container">
    <form action="/submit-bansos" method="POST">
        @csrf
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" id="nik" name="nik" required>
        </div>
        <div class="form-group">
            <label for="nkk">NKK</label>
            <input type="text" id="nkk" name="nkk" required>
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div class="form-group">
            <label for="npwp">NPWP</label>
            <input type="text" id="npwp" name="npwp" required>
        </div>
        <div class="form-group">
            <label for="luas_tanah">Luas Tanah</label>
            <input type="text" id="luas_tanah" name="luas_tanah" required>
        </div>
        <div class="form-group">
            <label for="tagihan_listrik">Tagihan Listrik</label>
            <input type="text" id="tagihan_listrik" name="tagihan_listrik" required>
        </div>
        <div class="form-group">
            <label for="gaji">Gaji</label>
            <input type="text" id="gaji" name="gaji" required>
        </div>
        <div class="form-group">
            <label for="jumlah_tanggungan">Jumlah Tanggungan</label>
            <input type="number" id="jumlah_tanggungan" name="jumlah_tanggungan" required>
        </div>
        <div class="form-group">
            <label for="jumlah_kendaraan">Jumlah Kendaraan</label>
            <input type="number" id="jumlah_kendaraan" name="jumlah_kendaraan" required>
        </div>
        <div class="form-group">
            <button type="submit">Submit</button>
        </div>
    </form>
</div>

@endsection
