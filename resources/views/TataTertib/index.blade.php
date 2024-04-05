<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tata Tertib</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container pt-5">
        <h1 >DATA TATA TERTIB</h1>
        @if(session('success'))
        <div class="alert alert-success">{{session('success')}}</div>
    @endif
    @if(session('error'))
    <div class="alert alert-danger">{{session('error')}}</div>
@endif
        <a href="/tata-tertib/create" class="btn btn-primary" >Add</a>
        <table class="table">
            <tr>
                <th>
                    No.
                </th>
                <th>
                    Deskripsi
                </th>
                <th>
                    Action
                </th>

            </tr>
            @foreach ($data as $item)
            <tr>
                <td>{{$item->id_tatib}}</td>
                <td>{{$item->deskripsi_tatib}}</td>
                <td class="">
                    <div class="d-flex gap-3">
                        <a href="/tata-tertib/{{$item->id_tatib}}/edit" class="btn btn-success" >Edit</a>
                        <a href="/tata-tertib/{{$item->id_tatib}}" class="btn btn-primary" >Detail</a>
                        <form action="{{url('tata-tertib/'.$item->id_tatib)}}" method="POST" >
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah anda ingin menghapus data ini ?')" >Delete</button>
                        </form>

                    </div>

                </td>
            </tr>
            @endforeach

        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</nama_penduduk
