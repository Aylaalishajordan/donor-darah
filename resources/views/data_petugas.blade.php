<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donor Darah</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <body>
        <h2 class="title-table">Data Donor Darah (petugas)</h2>
    <div style="display: flex; justify-content: center; margin-bottom: 30px">
        <a href="{{route('logout')}}" style="text-align: center">Logout</a> 
        <div style="margin: 0 10px"> | </div>
        <a href="/" style="text-align: center">Home</a>
        <div style="margin: 0 10px"> | </div>
        <a href="{{route('data.petugas')}}" style="text-align: center">Refresh</a>
    </div>
    <div style="display: flex; justify-content: flex-end; align items: center;">
        <form action="" method="GET">
            @csrf
            <input type="text" name="search" placeholder="cari berdasarkan nama...">
            <a herf="/data" class="fas fa-search" style="margin-right:40px;"></a>
        </form>
    </div>
    <div style="padding: 0 30px">
        <table>
            <table class="table">
            <thead class="thead-dark">
             <tr>
                <th width="5%">No</th>
                <th>name</th>
                <th>email</th>
                <th>age</th>
                <th>bb</th>
                <th>phone number</th>
                <th>blood group</th>
                <th>image</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
            </thead>
      <tbody>
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
            <td>{{$darah['golongan']}}</td>
            <td>
                <img src="{{asset('assets/image/'.$darah->foto)}}" width="120">
            </td>
            <td>
                @if ($darah->response)
                    {{$darah->response['status'] }} 
                @else
                    -
                @endif               
            </td>
            <td>
                @if ($darah->response)
                    {{$darah->response['tanggal'] ? \Carbon\Carbon::parse($darah->response['tanggal'])->format('j F Y') : '-'}}
                @else
                    -
                @endif
            </td>
            <td style="display: flex; justify-content: center;">
                <a href="{{route('response.edit', $darah->id)}}" class="back-btn">Send Response</a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
        