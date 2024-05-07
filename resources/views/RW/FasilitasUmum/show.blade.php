@vite('resources/css/popup.css')

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<div class="modal fade popup-container" id="ModalShow{{ $data->id_fasilitas }}" role="dialog" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-body popup-head">
            <i class="fa-solid fa-square-xmark fa-times text-gray-500 text-4xl close-btn" ></i>
            <p class="text-3xl font-bold mt-5 mb-2">DETAIL DATA FASILITAS UMUM</p>
            <hr class="my-5 border-b-1 border-black w-11/12 mx-auto">
            <div class="popup-box">
                <div class="mb-3 flex">
                    <label for="gambar_fasilitas" class="block text-lg font-semibold mb-3 w-40">Gambar</label>
                    <p class="text-lg">{{$data->gambar_fasilitas}}</p>
                </div>
                <div class="mb-3 flex">
                    <label for="nama_fasilitas" class="block text-lg font-semibold mb-3 w-40">Nama</label>
                    <p class="text-lg">{{$data->nama_fasilitas}}</p>
                </div>
                <div class="mb-3 flex">
                    <label for="keterangan_fasilitas" class="block text-lg font-semibold mb-3 w-40">Keterangan</label>
                    <p class="text-lg">{{$data->keterangan_fasilitas}}</p>
                </div>
                <div class="mb-3 flex">
                    <label for="id_rt" class="block text-lg font-semibold mb-3 w-40">RT</label>
                    <p class="text-lg">{{$data->rt->nomor_rt}}</p>
                </div>
                <div class="mb-3 flex">
                    <label for="alamat_fasilitas" class="block text-lg font-semibold mb-3 w-40">Alamat</label>
                    <p class="text-lg">{{$data->alamat_fasilitas}}</p>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('ModalShow{{ $data->id_fasilitas }}');
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
