<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Video;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
// use App\Http\Controller\Exception;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Admin::all();
        $total_channel = Video::count();
        $channel = video::all();
        $jumlah_data = Admin::count();
        return view('admin/index', ['datas' => $data, 'jumlah_data' => $jumlah_data, 'channel' => $channel, 'total_channel' => $total_channel]);
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
				$pesantren = new Admin;
                $pesantren->nama_pesantren = $nama_pesantren;
                $pesantren->alamat_pesantren = $alamat_pesantren;
				// $pesantren->save();
                // return redirect('insert')->with('status',"Insert successfully");
                if($pesantren){
                $data_hitung =  Admin::count();
                $data = Admin::all();


                // return response()->json(['pesantren' => $data]);
                $data = [
                    'nama_pesantren' => $nama_pesantren,
                    'alamat_pesantren' => $alamat_pesantren,
                    'jumlah_data' => $data_hitung
                ];

    
                return response()->json(['pesantren' => $data]);
                    
                }
                // $data = [
                //     'nama_pesantren' => $nama_pesantren,
                //     'alamat_pesantren' => $alamat_pesantren
                // ];

    
                // return response()->json(['pesantren' => $data]);
                
			}
			catch(Exception $e){
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
    public function update(Request $request)
    {
        return response()->json(['pesantren' => 'pesantren']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Admin::where('id_pesantren', '=', $id)->delete();
        $data_hitung = Admin::count();
        return redirect(route('admin'));
    }

    public function ambilData(Request $request)
    {
        $id_pesantren = $request->post('id_pesantren');
        $data = Admin::where('id_pesantren', '=', $id_pesantren)->get();
        return response()->json(['pesantren' => $data]);
		
    }

    public function ambilDataChannel(Request $request)
    {
        $id_pesantren = $request->post('id_pesantren');
        $data = Video::where('id_pesantren_channel', '=', $id_pesantren)->get();
        $nama_pesantren = Admin::where('id_pesantren', '=', $id_pesantren)->get();
        return response()->json(['channel' => $data, 'nama_pesantren' => $nama_pesantren]);
		
    }

    public function updateDataChannel(Request $request)
    {
        $rules = [
			'id_pesantren_channel' => 'required',
			'channel_id' => 'required',
        ];

        $validator = Validator::make($request->all(),$rules);

        if ($validator->fails()) {
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}
		else{
            $id_pesantren_channel = $request->input('id_pesantren');
            $channel_id = $request->input('channel_id');
            
			try{
				$pesantren = new Admin;
                $pesantren->id_pesantren_channel = $id_pesantren_channel;
                $pesantren->channel_id = $channel_id;
				// $pesantren->save();
                // return redirect('insert')->with('status',"Insert successfully");
                if($pesantren){
                    // $data_hitung =  Admin::count();
                    $data = Admin::all();


                    // return response()->json(['pesantren' => $data]);
                    // $data = [
                    //     'nama_pesantren' => $nama_pesantren,
                    //     'alamat_pesantren' => $alamat_pesantren,
                    //     'jumlah_data' => $data_hitung
                    // ];

        
                    return response()->json(['pesantren' => $data]);
                        
                }
                
			}
			catch(Exception $e){
				return response()->json(['gagal' => 'gagal']);
			}
		}

    }

    public function tambahChannel(Request $request)
    {
        // return response()->json('umar');
        $rules = [
			'id_pesantren_channel' => 'required',
			'channel_id' => 'required',
        ];
        
        $validator = Validator::make($request->all(),$rules);
        
		if ($validator->fails()) {
            return response()->json('gagal');
			return redirect('insert')
			->withInput()
			->withErrors($validator);
		}
		else{
            $id_pesantren = $request->input('id_pesantren_channel');
            $channel_id = $request->input('channel_id');
            
			try{
				$video = new Video;
                $video->id_pesantren_channel = $id_pesantren;
                $video->channel_id = $channel_id;
				// $video->save();
                // return redirect('insert')->with('status',"Insert successfully");
                if($video){
                    $video_hitung =  Video::count();
                    $video = Video::all();
                    $nama_pesantren = Admin::orderBy('id_pesantren', 'desc')->first();


                // return response()->json(['pesantren' => $data]);
                $data = [
                    
                    'channel_id' => $channel_id,
                    'jumlah_channel' => $video_hitung
                ];

    
                return response()->json(['channel' => $data, 'nama_pesantren' => $nama_pesantren]);
                    
                }
                // $data = [
                //     'nama_pesantren' => $nama_pesantren,
                //     'alamat_pesantren' => $alamat_pesantren
                // ];

    
                // return response()->json(['pesantren' => $data]);
                
			}
			catch(Exception $e){
				return response()->json(['gagal' => 'gagal']);
			}
		}
    }

    //ke index channel
    public function channel()
    {
        return view('admin.channel');
    }

    public function select2()
    {
        return response()->json('nama saya umar');
    }
}
