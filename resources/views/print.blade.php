<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Data Pengaduan</title>
</head>
<body>
    <h2 style="text-align: center; margin-button: 20px">Data Keseluruhan Pengaduan</h2>
    <table style="width: 100px">
        <tr>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">age</th>
                <th scope="col">bb</th>
                <th scope="col">phone number</th>
                <th scope="col">date</th>
                <th scope="col">blood group</th>
                <th scope="col">image</th>
                <th scope="col">Status Response</th>
                <th scope="col">Pesan Response</th>
                <th scope="col">Aksi</th>
        </tr>
        @php
        $no = 1;
        @endphp
        @foreach ($darahs as $darah)
       
        <tr>
            <td>{{$no++}}</td>
            <td>{{$darah['name']}}</td>
            <td>{{$darah['email']}}</td>
            <td>{{$darah['age']}}</td>
            <td>{{$darah['bb']}}</td>
            <td>{{$darah['no_telp']}}</td>
            <td>{{\Carbon\Carbon::parse($darah['created_at'])->format('j F, Y')}}</td>
            <td>{{$darah['golongan']}}</td>
            <td>{{$darah['pesan']}}</td>
            <td><img src="assets/image/{{$darah['foto']}}" width="80"></td>
            </td>
            <td>
                @if ($darah['response'])
                    {{$darah['response']['status'] }} 
                @else
                    -
                @endif               
            </td>
            <td>
                @if ($darah['response'])
                    {{$darah['response']['pesan']}}
                @else
                    -
                @endif
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
       
