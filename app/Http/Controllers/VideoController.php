<?php

namespace App\Http\Controllers;

use App\Models\Pesantren;
use App\Models\Santri;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('pesantren')->join('video', 'pesantren.id_pesantren', '=', 'video.id_pesantren_channel')->select('pesantren.nama_pesantren', 'video.channel_id')->get();
        $total_channel = Video::count();
        $jumlah_santri = Santri::count();
        $channel = video::all();
        $jumlah_data = Pesantren::count();
        return view('video/daftar-channel', ['datas' => $data, 'jumlah_data' => $jumlah_data, 'channel' => $channel, 'total_channel' => $total_channel, 'total_santri' => $jumlah_santri]);
    }

    public function detail($id_channel_pesantren){
        $id_channel_pesantren = $id_channel_pesantren;
        $data = Pesantren::all();
        $total_channel = Video::count();
        $jumlah_santri = Santri::count();
        $channel = video::all();
        $jumlah_data = Pesantren::count();
        return view('video/detail', ['datas' => $data, 'jumlah_data' => $jumlah_data, 'channel' => $channel, 'total_channel' => $total_channel, 'total_santri' => $jumlah_santri, 'id_channel_pesantren' => $id_channel_pesantren]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
