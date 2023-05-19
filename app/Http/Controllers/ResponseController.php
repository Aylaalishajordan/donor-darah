<?php

namespace App\Http\Controllers;

use App\Models\Response;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function show(Response $response)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function edit($darah_id)
    {
        //ambil data response yang bakal dimunculin, data yang diambil data response yang darah_id nya sama kaya $repor_id dari patch dinamis (rport_id)
        //kalau ada, datanya diambil satu / first ()
        //kenapa ga pake fistOrfaill() karena nanti bakal munculin not found view, kalau pakai first () view nya tetep bakal ditampilin
        $darah = Response::where('darah_id', $darah_id)->first();
        //karena mau kirim data (darah_id) buat diroute updatenya, jadi biar bisa dipakai diblade kita simpan data patch dinamis $darah_id nya ke variable baru yang bakal dicompact dan dipanggil blade nya
        $darahId = $darah_id;
        return view('response', compact('darah', 'darahId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $darah_id)
    {
        $request->validate([
            'status'=> 'required',
            'tanggal'=> 'required',
        ]);
        Response::updateOrCreate(
            [
                'darah_id' => $darah_id,
            ],
            [
                'status' => $request->status,
                'tanggal' => $request->tanggal,
            ]
            );
            //setelah berhasil, arahkan keroute yang name nya data.petugas dengan pesan alert
            return redirect()->route('data.petugas')->with('responseSuccess', 'Berhasil mengubah response!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Response  $response
     * @return \Illuminate\Http\Response
     */
    public function destroy(Response $response)
    {
        //
    }
}
