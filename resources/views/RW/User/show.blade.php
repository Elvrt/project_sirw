@vite('resources/css/popup.css')

<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<div class="modal fade popup-container" id="ModalShow{{ $data->id_user }}" role="dialog" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-body popup-head">
            <i class="fa-solid fa-square-xmark fa-times text-gray-500 text-4xl close-btn" ></i>
            <p class="text-3xl font-bold mt-5 mb-2">DETAIL DATA USER</p>
            <hr class="my-5 border-b-1 border-black w-11/12 mx-auto">
            <div class="popup-box">

                {{-- <div class="mb-3 flex">
                    <label for="id_warga" class="block text-lg font-semibold mb-3 w-40">Nama</label>
                    <p class="text-lg">{{$data->warga->nama_warga}}</p>
                </div>
                <div class="mb-3 flex">
                    <label for="id_role" class="block text-lg font-semibold mb-3 w-40">Role</label>
                    <p class="text-lg">{{$data->role->nama_role}}</p>
                </div>
                <div class="mb-3 flex">
                    <label for="username" class="block text-lg font-semibold mb-3 w-40">Username</label>
                    <p class="text-lg">{{$data->username}}</p>
                </div>
                <div class="mb-3 flex">
                    <label for="password" class="block text-lg font-semibold mb-3 w-40">Password</label>
                    <p class="text-lg">{{$data->password}}</p>
                </div>
            </div> --}}

            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('ModalShow{{ $data->id_user }}');
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
            const modalBody = document.querySelector('#ModalShow{{ $data->id_user }} .modal-body .popup-box');
            modalBody.innerHTML = '';
    
            // Daftar data yang ingin ditampilkan di modal
            const dataLabels = ['No', 'Nama', 'Role', 'Username', 'Password'];
    
            // Loop untuk setiap data yang ingin ditampilkan
            dataLabels.forEach((label, index) => {
                const dataItem = rowData[index].textContent;
                const html = `
                <div class="mb-3 flex">
                <label for="data_${index}" class="block text-lg font-semibold mb-3 w-40">${label}</label>
                <span class="flex pr-6">:</span>
                    <span class="text-lg text-style">${dataItem}</span>
                </div>

                `;
                modalBody.innerHTML += html; // Tambahkan data ke dalam modal
            });
        }
    });
    </script>