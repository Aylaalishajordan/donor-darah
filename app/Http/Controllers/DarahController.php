<?php

namespace App\Http\Controllers;

use App\Models\darah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;
use Excel;
use App\Exports\DarahExport;
use App\Models\Response;

class DarahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function exportPDF(){
        
        $data = Darah::with('response')->get()->toArray();
        view()->share('darahs',$data);
        $pdf = PDF::loadView('print', $data)->setPaper('a4', 'landscape');
        return $pdf->download('data_pengaduan_donordarah.pdf');
    }

    public function printPDF($id)
     {
        $data = Darah::with('response')->where('id', $id)->get()->toArray();
        view()->share('darahs', $data);
        $pdf = PDF::loadView('print', $data);
        return $pdf->download('data_perbaris.pdf');
     }

     public function exportExcel()
     {
        $file_name = 'data_keseluruhan_donordarah.xlsx';
        return Excel::download(new DarahExport, $file_name);
     }
    
    public function index()
    {
        $darahs = Darah::orderBy('created_at', 'DESC')->simplePaginate(2);
        return view('index', compact('darahs'));
    }

    public function auth(Request $request)
    {
         $request->validate ([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        $user = $request->only('email', 'password');
        // return redirect()->route(data);
        if (Auth::attempt($user)) {

            if (Auth::user()->role == 'admin') {
                return redirect()->route('data');
            }elseif (Auth::user()->role == 'petugas') {
                return redirect()->route('data.petugas');
            }
        }else {
                return redirect()->back()->with('gagal', 'Gagal login, coba lagi!!');
            }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function data(Request $request) {
        $search = $request->search;

        $darahs = Darah::with('response')->where('name', 'LIKE', '%'. $search . '%')->orderBy('created_at', 'DESC')->get();
        return view('data', compact('darahs'));
    }

    public function dataPetugas(Request $request)
    {
        $search = $request->search;
        //with : ambil relasi (nama fungsi hasOne/hasMany/belongsTo di modelnya), diambil data dari relasi tersebut
        $darahs = Darah::with('response')->where('name', 'LIKE', '%'. $search . '%')->orderBy('created_at', 'DESC')->get();
        return view('data_petugas', compact('darahs'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'age' => 'required',
            'bb' => 'required',
            'no_telp' => 'required',
            'golongan' => 'required',
            'pesan' => 'required',
            'foto' => 'required|image|mimes:jpg,jpeg,png,svg',
        ]);
        $path = public_path('assets/image/');
        $image = $request->file('foto');
        $imgName = rand() . '.' . $image->extension();
        $image->move($path, $imgName);
        
        Darah::create([
            'name' => $request->name,
            'email' =>  $request->email,
            'age' =>  $request->age,
            'bb' =>  $request->bb,
            'no_telp' =>  $request->no_telp,
            'golongan' =>  $request->golongan,
            'pesan' =>  $request->pesan,
            'foto' =>  $imgName,
        ]);
        return redirect()->back()->with('succes', 'Berhasil menambah Donor Darah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function show(donor $donor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function edit(donor $donor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, donor $donor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\donor  $donor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $darah = Darah::where('id', $id)->firstOrfail();
        $image = public_path('assets/image/'.$darah['foto']);
        unlink($image);
        $darah->delete();
        Response::where('darah_id', $id)->delete();
        return redirect()->back();
    }
}
