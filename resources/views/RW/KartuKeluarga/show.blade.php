@vite('resources/css/popup.css')

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<div class="modal fade popup-container" id="ModalShow{{ $data->id_kk }}" role="dialog" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-body popup-head">
            <i class="fa-solid fa-square-xmark fa-times text-gray-500 text-4xl close-btn" ></i>
            <p class="text-3xl font-bold mt-5 mb-2">DETAIL DATA KARTU KELUARGA</p>
            <hr class="my-5 border-b-1 border-black w-11/12 mx-auto">
            <div class="popup-box">
                <div class="mb-3 flex">
                    <label for="id_rt" class="block text-lg font-semibold mb-3 w-40">RT</label>
                    <p class="text-lg">{{$data->rt->nomor_rt ?? 'RT tidak ditemukan'}}</p>
                </div>
                <div class="mb-3 flex">
                    <label for="no_kk" class="block text-lg font-semibold mb-3 w-40">No. KK</label>
                    <p class="text-lg">{{$data->no_kk}}</p>
                </div>
                <div class="mb-3 flex">
                    <label for="id_warga" class="block text-lg font-semibold mb-3 w-40">Kepala Keluarga</label>
                    <p class="text-lg">
                        @php
                            $kepalaKeluarga = $data->warga ? $data->warga->firstWhere('status_hubungan', 'Kepala Keluarga') : null;
                            echo $kepalaKeluarga ? $kepalaKeluarga->nama_warga : 'Kepala Keluarga tidak ditemukan';
                        @endphp
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('ModalShow{{ $data->id_kk }}');
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
                // Ambil data warga dari baris yang ditekan
                const rowData = this.closest('tr').querySelectorAll('td');
                // Isi modal dengan data warga yang telah diambil
                fillModal(rowData);
            });
        });

        // Fungsi untuk mengisi modal dengan data warga
        function fillModal(rowData) {
            const modalBody = document.querySelector('#ModalShow{{ $data->id_kk }} .modal-body .popup-box');
            modalBody.innerHTML = '';

            // Daftar data yang ingin ditampilkan di modal
            const dataLabels = ['No', 'RT','Nomor KK', 'Kepala Keluarga'];

            // Loop untuk setiap data yang ingin ditampilkan
            dataLabels.forEach((label, index) => {
                const dataItem = rowData[index].textContent;
                const html = `
                <div class="mb-3 flex">
                    <label for="data_${index}" class="block text-lg font-semibold mb-3 w-40">${label}</label>
                    <span class="flex pr-5">:</span>
                        <span class="text-lg text-style">${dataItem}</span>
                    </div>
                `;
                modalBody.innerHTML += html; // Tambahkan data ke dalam modal
            });
        }
    });
    </script>
