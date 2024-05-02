@vite('resources/css/popup.css')

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<div class="modal fade popup-container" id="ModalShow{{ $data->id_pengaduan }}" role="dialog" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-body popup-head">
            <i class="fa-solid fa-square-xmark fa-times text-gray-500 text-4xl close-btn" ></i>
            <p class="text-3xl font-bold mt-5 mb-2">DETAIL DATA PENGADUAN</p>
            <hr class="my-5 border-b-1 border-black w-11/12 mx-auto">
            <div class="popup-box">

                <div class="mb-3 flex">
                    <label for="id_warga" class="block text-lg font-semibold mb-3 w-40">Nama Pelapor</label>
                    <p class="text-lg">{{$data->warga->nama_warga}}</p>
                </div>
                <div class="mb-3 flex">
                    <label for="judul_pengaduan" class="block text-lg font-semibold mb-3 w-40">Judul Pengaduan</label>
                    <p class="text-lg">{{$data->judul_pengaduan}}</p>
                </div>
                <div class="mb-3 flex">
                    <label for="deskripsi_pengaduan" class="block text-lg font-semibold mb-3 w-40">Deskripsi</label>
                    <p class="text-lg">{{$data->deskripsi_pengaduan}}</p>
                </div>
                <div class="mb-3 flex">
                    <label for="tanggal_pengaduan" class="block text-lg font-semibold mb-3 w-40">Tanggal Pengaduan</label>
                    <p class="text-lg">{{$data->tanggal_pengaduan}}</p>
                </div>
                <div class="mb-3 flex">
                    <label for="status_pengaduan" class="block text-lg font-semibold mb-3 w-40">Status</label>
                    <p class="text-lg">{{$data->status_pengaduan}}</p>
                </div>
            </div>

            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('ModalShow{{ $data->id_pengaduan }}');
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