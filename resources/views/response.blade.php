<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donor Darah</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
    <form action="{{route('response.update', $darahId)}}" method="POST" style="width: 500px; margin: 50px auto; display: block;">
        @csrf
        @method('PATCH')
        <div class="input-card">
            <label for="">Status :</label>
            {{--cek apakah data report yang dari compact itu ada, maksudnya adaan itu where di db responsesnya ada data yang punya report_id sama kata yang dikirim kepath(report_id)--}}
            @if ($darah)
            <select name="status" id="status">
                {{--kalau ada--}}
                <option selected hidden disabled>Pilih Status</option> 
                <option value="ditolak" {{ $darah['status'] == 'ditolak' ? 'selected' : ''}}>ditolak</option>
                <option value="proses" {{ $darah['status'] == 'proses' ? 'selected' : ''}}>proses</option>
                <option value="diterima" {{ $darah['status'] == 'diterima' ? 'selected' : ''}}>diterima</option>
            </select>
            @else
            <select name="status" id="status">
                <option selected hidden disabled>Pilih Status</option> 
                <option value="ditolak">ditolak</option>
                <option value="proses">proses</option>
                <option value="diterima">diterima</option>
            </select>
            @endif
        </div>
        <div class="input-card">
            <input type="date" name="tanggal" id="tanggal" rows="3">
        </div>
        @if ($errors->any())
        <ul style="width: 100%; background: red; padding: 10px">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}<li>
        @endforeach
        </ul>
        @endif
        <button type="submit">Kirim Response</button>
    </form>
</body>