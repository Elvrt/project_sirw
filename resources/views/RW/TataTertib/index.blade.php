<!DOCTYPE html>
<html lang="en">
<head>
    @extends('./layout/rw')
    <meta charset="UTF-8">
    <meta name="viewpoBerita" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> --}}
</head>
<body>
<div class="flex justify-center datas-center">
    <div class="p-4 sm:ml-64">
        <p class="text-army-gelap font-bold text-header drop-shadow-md container mb-10 mt-10 ml-4">Data Berita</p>
        <div class="bg-putih drop-shadow-md mx-4 px-10 p-4">
            <a href="Berita/create">
                <button class="bg-hijau hover:bg-hijau-gelap text-putih font-bold py-2 px-4 rounded-lg float-right">
                    + Tambah Data Berita
                </button>
            </a>
            <p class="text-sub ml-4">Data</p>
        </div>
        <div class="flex justify-center datas-center">
            @section('content')
            <!-- TABLE -->
            <div class="bg-putih drop-shadow-md mx-2 mt-5">
                <div class="card-body pl-10 pt-5">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="form-group ">
                                    <label class="col-1 control-label col-form-label">Filter:</label>
                                    <div class="max-w-xs relative">
                                        <div class="border cursor-pointer">
                                            <div class="col-3">
                                                <select class="form-control w-full" id="id_Berita" name="id_Berita" required>
                                                    <option value="">-  Semua -</option>
                                                    {{-- @foreach($Berita as $data)
                                                        <option value="{{ $data->id_berita }}">{{ $data->id_berita }}</option>
                                                    @endforeach --}}
                                                </select>
                                            </div>
                                        </div>
                                        <small class="form-text text-muted">Nomor Berita</small>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 offset-md-6">
                                            <div class="form-group text-right pr-10">
                                                <div class="col-md-6 offset-md-6">
                                                    <label class="col-1 control-label col-form-label">Search:</label>
                                                    <input type="search" class="form-control rounded border pl-2" id="search" placeholder="Masukkan Nomor Berita">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-span-6 mt-4 p-10 sm:ml-68 drop-shadow-md text-left mr-9"> 
                    <!-- HEADER -->
                    <div class="table-responsive">
                        <table id="table_Berita" class="table-auto">