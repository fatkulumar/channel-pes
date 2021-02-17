<?php

namespace App\Http\Controllers;

use App\Models\Pesantren;
use App\Models\Santri;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PesantrenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pesantren::all();
        $total_channel = Video::count();
        $jumlah_santri = Santri::count();
        $channel = video::all();
        $jumlah_data = Pesantren::count();
        return view('pesantren/index', ['datas' => $data, 'jumlah_data' => $jumlah_data, 'channel' => $channel, 'total_channel' => $total_channel, 'total_santri' => $jumlah_santri]);
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
			'nama_pesantren' => 'required',
			'alamat_pesantren' => 'required',
        ];
        
        $validator = Validator::make($request->all(),$rules);
        
		if ($validator->fails()) {
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}
		else{
            $nama_pesantren = $request->input('nama_pesantren');
            $alamat_pesantren = $request->input('alamat_pesantren');
            
			try{
				$pesantren = new Pesantren;
                $pesantren->nama_pesantren = $nama_pesantren;
                $pesantren->alamat_pesantren = $alamat_pesantren;
				$pesantren->save();
                if($pesantren){
                $data_hitung =  Pesantren::count();
                $data = Pesantren::all();

                $data = [
                    'nama_pesantren' => $nama_pesantren,
                    'alamat_pesantren' => $alamat_pesantren,
                    'jumlah_data' => $data_hitung,
                    'id_pesantren' => $pesantren->id
                ];

    
                return response()->json(['pesantren' => $data]);
                    
                }
                
			}
			catch(\Exception $e){
				return response()->json(['gagal' => 'gagal']);
			}
		}
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
    public function edit(Request $request)
    {
        $id_pesantren = $request->post('id_pesantren');
        $data = Pesantren::where('id_pesantren', '=', $id_pesantren)->get();
        return response()->json(['pesantren' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // return response()->json($request->all());
        $rules = [
            'edit_id_pesantren' => 'required',
			'edit_nama_pesantren' => 'required',
			'edit_alamat_pesantren' => 'required',
        ];
        
        $validator = Validator::make($request->all(),$rules);
        
		if ($validator->fails()) {
            return response()->json('gagal');
			// return redirect('insert')
			// ->withInput()
			// ->withErrors($validator);
		}
		else{
            $id_pesantren = $request->input('edit_id_pesantren');
            $nama_pesantren = $request->input('edit_nama_pesantren');
            $alamat_pesantren = $request->input('edit_alamat_pesantren');
            
			try{

                Pesantren::where('id_pesantren', $id_pesantren)->update([
                    'nama_pesantren' => $nama_pesantren,
                    'alamat_pesantren' => $alamat_pesantren,
                ]);

                // return response()->json(['pesantren' => $data]);
                $data = [
                    'nama_pesantren' => $nama_pesantren,
                    'alamat_pesantren' => $alamat_pesantren,
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {   
        $id_pesantren = $request->input('id_pesantren');
        $data = Pesantren::where('id_pesantren', '=', $id_pesantren)->delete();
        return redirect(route('Pesantren'));
    }

    public function pesantren(Request $request)
    {
        $jumlah_data = Pesantren::count();
        $jumlah_santri = Santri::count();
        $jumlah_pesantren = Pesantren::count();
        $jumlah_channel = Video::count();
        $data = Pesantren::all();
        return response()->json(['pesantren' => $data, "jumlah_data" => $jumlah_data, 'total_santri' => $jumlah_santri, 'total_pesantren' => $jumlah_pesantren, 'total_channel' => $jumlah_channel]);
		
    }
}
