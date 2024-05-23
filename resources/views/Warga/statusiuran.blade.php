@extends('./layout/warga')

@section('content')
<p class="text-center text-army-gelap font-bold text-header drop-shadow-md mt-5">CATATAN IURAN</p>

    <div class="bg-login2 mx-44 px-52 py-10 items-center rounded-md shadow-md ">
        <table class="table-auto text-center ">
            <thead>
                <tr>
                    <th scope="col" class="px-28 py-3">NIK</th>
                    <th scope="col" class="px-28 py-3">Nama</th>  
                    <th scope="col" class="px-28 py-3">RT</th> 
                    <th scope="col" class="px-20 py-3">Tanggal Pembayaran</th>
                    <th scope="col" class="px-28 py-3">Status</th>
                </tr>
            </thead>
            <tbody">
                <tr>
                    <td scope="col" class="py-3">2642758273859254</td>
                    <td scope="col" class="py-3">Malcolm Lockyer</td>
                    <td scope="col" class="py-3">2</td>
                    <td scope="col" class="py-3">17/02/2024</td>
                    <td scope="col" class="py-3"><button type="button" class="text-putih bg-hijau cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center" disabled>Lunas</button></td>
                    
                </tr>
                <tr>
                    <td scope="col" class="py-3">2642758273859254</td>
                    <td scope="col" class="py-3">Malcolm Lockyer</td>
                    <td scope="col" class="py-3">2</td>
                    
                    <td scope="col" class="py-3">17/02/2024</td>
                    <td scope="col" class="py-3"><button type="button" class="text-putih bg-hijau cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center" disabled>Lunas</button></td>
                </tr>
                <tr>
                    <td scope="col" class="py-3">2642758273859254</td>
                    <td scope="col" class="py-3">Malcolm Lockyer</td>
                    <td scope="col" class="py-3">2</td>
                    
                    <td scope="col" class="py-3">17/02/2024</td>
                    <td scope="col" class="py-3"><button type="button" class="text-putih bg-merah cursor-not-allowed font-medium rounded-lg text-sm px-5 py-2.5 text-center" disabled>Belum Lunas</button></td>
                </tr>
            </tbody>
        </table>

    </div>
@endsection