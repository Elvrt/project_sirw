@extends('./layout/warga')

@section('content')

    <!-- CONTENT -->
    <p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-10 mb-10">FORM SURAT</p>
    <div class="bg-putih shadow-md mx-5 mb-2 px-3">
        <p class="text-sub">Form Pengajuan Surat</p>
    </div>

    <div class="bg-putih shadow-md mx-5 py-10 px-8">
        <div class="mb-10">
            <p>NIK</p>
            <div
                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="tel" name="username" id="NIK" autocomplete="NIK" minlength="16" maxlength="16"
                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                    placeholder="NIK" required>
            </div>
        </div>
        <div class="mb-10">
            <p>Nama</p>
            <div
                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="Nama" id="Nama" autocomplete="Nama"
                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                    placeholder="Nama" required>
            </div>
        </div>
        <div class="mb-10">
            <p>Alamat</p>
            <div
                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="text" name="Alamat" id="Alamat" autocomplete="Alamat"
                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                    placeholder="Alamat" required>
            </div>
        </div>
        <div class="mb-10">
            <p>No. Telpon</p>
            <div
                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="tel" name="NoTelpon" id="NoTelpon" autocomplete="NoTelpon"
                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                    placeholder="No.Telpon" required>
            </div>
        </div>
        <div class="mb-10">
            <p>RT</p>
            <div
                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                <input type="number" name="NoTelpon" id="NoTelpon" autocomplete="NoTelpon" min="1"
                    max="8"
                    class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                    placeholder="No.Telpon" required>
            </div>
        </div>
        <div class="mb-10">
            <p>Jenis Surat</p>
            <select id="Jenis Surat" class="flex rounded-md shadow-sm ring-1  sm:max-w-md" required>
                <option selected>Pilih Jenis Surat</option>
                <option value="US">Surat Domisili</option>
                <option value="CA">Surat Keterangan Usaha</option>
                <option value="FR">Surat Kematian</option>
            </select>
        </div>
        <div class="mb-10">
            <p>Keterangan</p>
            <textarea id="message" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg  border border-army-gelap focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Keterangan"></textarea>
        </div>

        <div>
            <button
                class=" w-max px-10 bg-coklat-muda text-abu-putih font-semibold py-2 rounded-xl mx-auto block hover:bg-coklat focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-10 mb-6">Ajukan</button>
        </div>

@endsection
