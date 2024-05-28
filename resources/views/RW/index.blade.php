<!doctype html>
<html>

<head>
    @extends('./layout/rw')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    @vite('resources/css/table.css')
</head>

<body>
    <div class="justify-center flex sm:block">
        <div class="p-4 sm:ml-64">
            <p class="text-army-gelap font-bold text-header drop-shadow-md container mb-10 mt-10 ml-4">Dashboard</p>
            <div class="bg-putih drop-shadow-md mx-2 px-10 p-4">
                <p class="text-sub font-semibold text-gray-800 ml-4">Belum</p>
            </div>
            <div class="flex justify-center data-center">
                @section('content')
                <div class="bg-putih drop-shadow-md mx-2 mt-5">
                    <div class="card-body pl-10 pt-5">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-12">
                                    <div class="form-group p-5">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection
