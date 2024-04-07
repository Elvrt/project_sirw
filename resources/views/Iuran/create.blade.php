<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iuran</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white">
    <div class="container pt-5 mx-auto">
        <h1 class="text-3xl font-bold mb-5">TAMBAH DATA IURAN</h1>
        <form action="/iuran" method="POST">
            @csrf
            @method('POST')
            <div class="mb-4">
                <label for="id_rt" class="block text-sm font-bold mb-2">RT</label>
                <select name="id_rt" id="id_rt" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih RT</option>
                    @foreach($rts as $rt)
                        <option value="{{$rt->id_rt}}">{{$rt->nomor_rt}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="id_kk" class="block text-sm font-bold mb-2">No. KK</label>
                <select name="id_kk" id="id_kk" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih No. KK</option>
                    @foreach($kks as $kk)
                        <option value="{{$kk->id_kk}}">{{$kk->no_kk}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="nominal" class="block text-sm font-bold mb-2">Nominal</label>
                <input type="number" name="nominal" id="nominal" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <div class="mb-4">
                <label for="status_iuran" class="block text-sm font-bold mb-2">Status</label>
                <select name="status_iuran" id="status_iuran" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="" disabled selected class="text-gray-400">Pilih Status</option>
                    <option value="Lunas">Lunas</option>
                    <option value="Belum Lunas">Belum Lunas</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="tanggal_iuran" class="block text-sm font-bold mb-2">Tanggal</label>
                <input type="datetime-local" name="tanggal_iuran" id="tanggal_iuran" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
        </form>
    </div>

    <script>
        // Menggunakan JavaScript untuk mengatur opsi dropdown No. KK berdasarkan RT yang dipilih
        document.getElementById('id_rt').addEventListener('change', function() {
            var idRt = this.value; // Mendapatkan nilai id_rt yang dipilih
            var idKkSelect = document.getElementById('id_kk'); // Dropdown No. KK
            idKkSelect.innerHTML = ''; // Menghapus semua opsi yang ada
            // Menambahkan opsi default
            var defaultOption = document.createElement('option');
            defaultOption.value = '';
            defaultOption.text = 'Pilih No. KK';
            defaultOption.disabled = true;
            defaultOption.selected = true;
            defaultOption.classList.add('text-gray-400');
            idKkSelect.appendChild(defaultOption);
            // Menambahkan opsi No. KK berdasarkan id_rt yang dipilih
            @foreach($kks as $kk)
                if ('{{$kk->id_rt}}' == idRt) {
                    var option = document.createElement('option');
                    option.value = '{{$kk->id_kk}}';
                    option.text = '{{$kk->no_kk}}';
                    idKkSelect.appendChild(option);
                }
            @endforeach
        });
    </script>
</body>
</html>
