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
        <h2 class="title-table">Data Donor Darah</h2>
    <div style="display: flex; justify-content: center; margin-bottom: 30px">
        <a href="{{route('logout')}}" style="text-align: center">Logout</a> 
        <div style="margin: 0 10px"> | </div>
        <a href="/" style="text-align: center">Home</a>
        <div style="margin: 0 10px"> | </div>
        <a href="{{route('data')}}" style="text-align: center">Refresh</a>

    </div>
    <div style="display: flex; justify-content: flex-end; align items: center;">
        <form action="" method="GET">
            @csrf
            <input type="text" name="search" placeholder="cari berdasarkan nama...">
            <a herf="/data" class="fas fa-search" style="margin-left:20px;"></a>
        </form>
        <a href="{{route('export-pdf')}}" style="margin-right:20px; margin-left: 10px; margin-top: 5px">Cetak PDF</a>
        <a href="{{route('export-excel')}}" style="margin-right:30px; margin-left: -10px; margin-top: 5px">Cetak EXCEL</a>
    </div>
    <div style="padding: 0 30px">
    <table>
        <table class="table">
            <thead class="table-dark">
            </thead>
        <thead>
          <tr>
            <th width="5%">No</th>
            <th>name</th>
            <th>email</th>
            <th>age</th>
            <th>bb</th>
            <th>blood group</th>
            <th>phone number</th>
            <th>image</th>
            <th>Status </th>
            <th>Tanggal</th>
            <th>Aksi</th>
          </tr>
        </thead>
      
      <body style="padding: 8px">
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
            <td>{{$darah['golongan']}}</td>
         @php
             $telp = substr_replace($darah->no_telp, "62", 0, 1);
         @endphp
         @php
         if ($darah->response) {
            $pesanWa = 'Hallo' . $darah->nama . '!pengaduan anda di '. $darah->response['status'] . '.Berikut pesan ntuk anda :' . $darah->response['pesan'];
         }else{
            $pesanWa = '!Belum ada data response!';
         }
         @endphp
            <td><a href="https://wa.me/{{$telp}}?text={{$pesanWa}}" target="_blank">{{$telp}}</a></td>
            <td>
                <a href="../assets/image/{{$darah->foto}}" target="_blank">
                  <img src="{{asset('assets/image/'.$darah->foto)}}" width="120">
                </a>
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
            <td>

                <div>
                    <form action="{{route('print-pdf', $darah->id)}}" method="get"  style="margin-button:-15px">
                        @csrf
                        <button class="submit">Print</button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>