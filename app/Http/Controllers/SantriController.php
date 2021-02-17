<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use App\Models\Pesantren;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlah_santri = Santri::count();
        $data = Pesantren::all();
        $total_channel = Video::count();
        $channel = Video::all();
        $jumlah_data = Pesantren::count();
        return view('santri/index', ['datas' => $data, 'jumlah_data' => $jumlah_data, 'channel' => $channel, 'total_channel' => $total_channel, 'total_santri' => $jumlah_santri]);
        
        $data = DB::table('admin')->select('id_pesantren', 'nama_pesantren')->get();
        return view('santri.index');
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
        $rules = [
			'id_pesantren' => 'required',
            'no_induk' => 'required',
            'nama_santri' => 'required',
            'kamar_santri' => 'required',
			'alamat_santri' => 'required',
            'hp_santri' => 'required'
        ];
        
        $validator = Validator::make($request->all(),$rules);
        
		if ($validator->fails()) {
			return  response()->json('gagal input santri');
			// ->withInput()
			// ->withErrors($validator);
		}
		else{
            $id_pesantren_santri = $request->input('id_pesantren');
            $no_induk = $request->input('no_induk');
            $nama_santri = $request->input('nama_santri');
            $kamar_santri = $request->input('kamar_santri');
            $alamat_santri = $request->input('alamat_santri');
            $hp_santri = $request->input('hp_santri');
			try{
                $santri = new Santri;
                $santri->id_pesantren_santri = $id_pesantren_santri;
                $santri->no_induk = $no_induk;
                $santri->nama_santri = $nama_santri;
                $santri->kamar_santri = $kamar_santri;
                $santri->alamat_santri = $alamat_santri;
                $santri->hp_santri = $hp_santri;
				$santri->save();
                if($santri){
                $data_hitung =  Santri::count();

                $data = [
                    'id_pesantren_santri' => $id_pesantren_santri,
                    'no_induk' => $no_induk,
                    'nama_santri' => $nama_santri,
                    'kamar_santri' => $kamar_santri,
                    'alamat_santri' => $alamat_santri,
                    'hp_santri' => $hp_santri,
                    'jumlah' => $data_hitung,
                    'id_santri' => $santri->id
                ];

    
                return response()->json(['santri' => $data]);
                    
                }
                
			}
			catch(\Exception $e){
				return response()->json(['gagal tambah santri']);
			}
		}
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function show(santri $santri, Request $request)
    {
        $id_santri = $request->input('id_santri');
        $data = Santri::where('id_santri', $id_santri)->get();
        return response()->json(['santri' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function edit(santri $santri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $rules = [
            'edit_id_santri' => 'required',
			'edit_id_pesantren' => 'required',
			'edit_no_induk' => 'required',
			'edit_nama_santri' => 'required',
			'edit_kamar_santri' => 'required',
			'edit_alamat_santri' => 'required',
			'edit_hp_santri' => 'required',
        ];
        
        $validator = Validator::make($request->all(),$rules);
        
		if ($validator->fails()) {
			return response()->json('gagal');
			// ->withInput()
			// ->withErrors($validator);
		}
		else{
            $id_santri = $request->input('edit_id_santri');
            $id_pesantren = $request->input('edit_id_pesantren');
            $no_induk = $request->input('edit_no_induk');
            $nama_santri = $request->input('edit_nama_santri');
            $kamar_santri = $request->input('edit_kamar_santri');
            $alamat_santri = $request->input('edit_alamat_santri');
            $hp_santri = $request->input('edit_hp_santri');
			try{
				
                Santri::where('id_santri', $id_santri)->update([
                    'id_pesantren_santri' => $id_pesantren,
                    'no_induk' => $no_induk,
                    'nama_santri' => $nama_santri,
                    'kamar_santri' => $kamar_santri,
                    'alamat_santri' => $alamat_santri,
                    'hp_santri' => $hp_santri,
                ]);

                $data = [
                    'id_pesantren_santri' => $id_pesantren,
                    'no_induk' => $no_induk,
                    'nama_santri' => $nama_santri,
                    'kamar_santri' => $kamar_santri,
                    'alamat_santri' => $alamat_santri,
                    'hp_santri' => $hp_santri
                ];

    
                return response()->json(['pesantren' => $data]);
                    
                
			}
			catch(\Exception $e){
				return response()->json(['gagal' => 'gagal']);
			}
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\santri  $santri
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id_santri = $request->input('id_santri');
        $data = Santri::where('id_santri', $id_santri)->delete();
        return response()->json($id_santri);
    }

    //menagmbil data samtri
    public function data()
    {
        $data = DB::table('pesantren')
                ->rightjoin('santri', 'pesantren.id_pesantren', '=', 'santri.id_pesantren_santri')
                ->select('pesantren.nama_pesantren', 'santri.*')
                ->get();
        $jumlah_santri = Santri::count();
        $jumlah_pesantren = Pesantren::count();
        $jumlah_channel = Video::count();
        return response()->json(['santri' => $data, 'total_santri' => $jumlah_santri, 'total_pesantren' => $jumlah_pesantren, 'total_channel' => $jumlah_channel]);
    }   
}