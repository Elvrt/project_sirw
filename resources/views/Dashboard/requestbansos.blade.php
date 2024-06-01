@extends('./layout/warga')

@section('content')
    <!-- CONTENT -->
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-10 mb-10">FORM PENGAJUAN BANSOS</p>
    <div class="bg-putih shadow-md mx-5 mb-2 px-3">
        <p class="text-sub">FORM PENGAJUAN BANSOS</p>
        <a href="/pengajuanbansos" class="bg-army-muda text-putih py-2 px-4 ml-20 mt-44 rounded-lg absolute top-0 left-0  flex items-center hover:bg-army-kuning">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path fill-rule="evenodd" d="M7.28 7.72a.75.75 0 0 1 0 1.06l-2.47 2.47H21a.75.75 0 0 1 0 1.5H4.81l2.47 2.47a.75.75 0 1 1-1.06 1.06l-3.75-3.75a.75.75 0 0 1 0-1.06l3.75-3.75a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd" />
            </svg>
        </a>
    </div>

    <div class="bg-putih shadow-md mx-5 py-10 px-8 relative">
            <div class="mb-10">
                <label for="id_rt" class="block text-sm font-bold mb-2">RT</label>
                <select name="id_rt" id="id_rt" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih RT</option>
                </select>
               
            </div>

            <div class="mb-10">
                <label for="nkk" class="block text-sm font-bold mb-2">Nomor KK</label>
                <input type="number" name="nomorkk" id="nomorkk"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Nomor KK">
            </div>

            <div class="mb-10">
                <label for="jumlah_tanggungan" class="block text-sm font-bold mb-2">Jumlah Tanggungan</label>
                <input type="number" name="jumlah_tanggungan" id="jumlah_tanggungan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Jumlah Tanggungan">
            </div>

            <div class="mb-10">
                <label for="jumlah_penghasilan" class="block text-sm font-bold mb-2">Jumlah Penghasilan Keluarga</label>
                <input type="number" name="jumlah_penghasilan" id="jumlah_penghasilan" value="{{old('jumlah_penghasilan')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Jumlah Penghasilan">
            </div>

            <div class="mb-10">
                <label for="gambar_slip" class="block text-sm font-bold mb-2">Foto Slip Gaji</label>
                <input type="file" name="gambar_slip" id="gambar_slip" value="" accept="image/*" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="slipgaji">SVG, PNG, JPG, JPEG (MAX. 2MB).</p>
            </div>

            <div class="mb-10">
                <label for="jumlah_dayalistrik" class="block text-sm font-bold mb-2">Besar Daya Listrik Rumah</label>
                <input type="number" name="jumlah_dayalistrik" id="jumlah_dayalistrik" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Besar Daya Listrik">
            </div>

            <div class="mb-10">
                <label for="luas_bangunan" class="block text-sm font-bold mb-2">Luas Bangungan Rumah</label>
                <input type="number" name="luas_bangunan" id="luas_bangunan" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Luas Bangunan Rumah">
            </div>

            <div class="mb-10">
                <label for="gambar_rumah" class="block text-sm font-bold mb-2">Foto Rumah</label>
                <input type="file" name="gambar_rumah" id="gambar_rumah" value="" accept="image/*" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="slipgaji">SVG, PNG, JPG, JPEG (MAX. 2MB).</p>
            </div>

            <div class="mb-10">
                <label for="jumlah_kendaraan" class="block text-sm font-bold mb-2">Jumlah Kendaraan</label>
                <input type="number" name="jumlah_kendaraan" id="jumlah_kendaraan" value="{{old('jumlah_kendaraan')}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Jumlah Kendaraan">
            </div>

            <div class="mb-10">
                <label for="gambar_kendaraan" class="block text-sm font-bold mb-2">Foto Kendaraan</label>
                <input type="file" name="gambar_kendaraan" id="gambar_kendaraan" value="" accept="image/*" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="slipgaji">SVG, PNG, JPG, JPEG (MAX. 2MB).</p>
            </div>

            <div class="mb-10">
                <label for="keterangan_sktm" class="block text-sm font-bold mb-2">Keterangan</label>
                <textarea name="keterangan_sktm" id="keterangan_sktm" cols="30" rows="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{old('keterangan_sktm')}}</textarea>
            </div>
            <div>
                <button class=" w-max px-10 bg-coklat-muda text-putih font-semibold py-2 rounded-xl mx-auto block hover:bg-coklat mt-10 mb-6">Kirim</button>
            </div>
        </form>
    </div>

@endsection
