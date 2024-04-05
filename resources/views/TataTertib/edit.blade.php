<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tata Tertib</title>
</head>
<body>
    <h1>DATA TATA TERTIB</h1>
    <form action="{{url('/tata-tertib/'.$data->id_tatib)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="deskripsi_tatib">Deskripsi</label>
            <input type="text" name="deskripsi_tatib" value="{{$data->deskripsi_tatib}}" id="">
        </div>

        <button type="submit">Submit</button>
</body>
</html>
