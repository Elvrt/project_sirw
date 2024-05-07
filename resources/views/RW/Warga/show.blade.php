
@vite('resources/css/popup.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<div class="modal fade popup-container" id="ModalShow{{ $data->id_warga }}" role="dialog" >
    <div class="modal-dialog modal-lg" role="document">
            <div class="modal-body popup-head">
                <i class="fa-solid fa-square-xmark fa-times text-gray-500 text-4xl close-btn" ></i>
                <p class="text-3xl font-bold mt-5 mb-2">DETAIL DATA WARGA</p>
                <hr class="my-5 border-b-1 border-black w-11/12 mx-auto">
                <div class="popup-box">
                    <div class="mb-3 flex ">
                        <label for="id_rt" class="block text-lg font-semibold mb-3 w-40">Nomor RT</label>
                        <p class="text-lg">{{$data->kartuKeluarga->rt->nomor_rt}}</p>
                    </div>
                    <div class="mb-3 flex ">
                        <label for="no_kk" class="block text-lg font-semibold mb-3 w-40">No. KK</label>
                        <p class="text-lg">{{$data->kartuKeluarga->no_kk}}</p>
                    </div>
                    <div class="mb-3 flex ">
                        <label for="nik" class="block text-lg font-semibold mb-3 w-40 ">NIK</label>
                        <p class="text-lg">{{$data->nik}}</p>
                    </div>
                    <div class="mb-3 flex ">
                        <label for="nama_warga" class="block text-lg font-semibold mb-3 w-40">Nama</label>
                        <p class="text-lg">{{$data->nama_warga}}</p>
                    </div>
                    <div class="mb-3 flex ">
                        <label for="jenis_kelamin" class="block text-lg font-semibold mb-3 w-40">Jenis Kelamin</label>
                        <p class="text-lg">{{$data->jenis_kelamin === 'L' ? 'Laki-laki' : 'Perempuan'}}</p>
                    </div>
                    <div class="mb-3 flex ">
                        <label for="tempat_lahir" class="block text-lg font-semibold mb-3 w-40">Tempat Lahir</label>
                        <p class="text-lg">{{$data->tempat_lahir}}</p>
                    </div>
                    <div class="mb-3 flex ">
                        <label for="tanggal_lahir" class="block text-lg font-semibold mb-3 w-40">Tanggal Lahir</label>
                        <p class="text-lg">{{$data->tanggal_lahir}}</p>
                    </div>
                    <div class="mb-3 flex ">
                        <label for="alamat" class="block text-lg font-semibold mb-3 w-40">Alamat</label>
                        <p class="text-lg">{{$data->alamat}}</p>
                    </div>
                    <div class="mb-3 flex ">
                        <label for="nomor_telepon" class="block text-lg font-semibold mb-3 w-40">Nomor Telepon</label>
                        <p class="text-lg">{{$data->nomor_telepon}}</p>
                    </div>
                    <div class="mb-3 flex ">
                        <label for="agama" class="block text-lg font-semibold mb-3 w-40">Agama</label>
                        <p class="text-lg">{{$data->agama}}</p>
                    </div>
                    <div class="mb-3 flex ">
                        <label for="pekerjaan" class="block text-lg font-semibold mb-3 w-40">Pekerjaan</label>
                        <p class="text-lg">{{$data->pekerjaan}}</p>
                    </div>
                    <div class="mb-3 flex ">
                        <label for="penghasilan" class="block text-lg font-semibold mb-3 w-40">Penghasilan</label>
                        <p class="text-lg">{{$data->penghasilan}}</p>
                    </div>
                    <div class="mb-3 flex ">
                        <label for="status_hubungan" class="block text-lg font-semibold mb-3 w-40">Status Hubungan</label>
                        <p class="text-lg">{{$data->status_hubungan}}</p>
                    </div>

                </div>

            </div>

        </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('ModalShow{{ $data->id_warga }}');
        const closeBtn = modal.querySelector('.close-btn');

        function showModal() {
            modal.classList.add('active');
        }

        function closeModal() {
            modal.classList.remove('active');
        }

        closeBtn.addEventListener('click', closeModal);

        const detailBtns = document.querySelectorAll('.detail');
        detailBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                showModal(modal);
            });
        });
    });
</script>

