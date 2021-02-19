<?php

namespace App\Http\Controllers;

use App\Models\Pesantren;
use App\Models\Santri;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\DataTables;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $channel = Video::all();
        return response()->json(['channel' => $channel]);
    }

    public function dashboard()
    {
        return view('admin');
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
    public function store(Video $video ,Request $request)
    {
        // return response()->json(['channel' => $request->all()]);
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
				$video->save();
                $video_hitung =  Video::count();

                $data = [
                    'nama_pesantren' => $id_pesantren,
                    'channel_id' => $channel_id,
                    'jumlah_channel' => $video_hitung,
                    'id_videos' => $video->id
                ];

    
                    return response()->json(['channel' => $data]);
                    
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
    public function show(Request $request)
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
        $id_videos = $request->input('id_videos');
        $data = Video::where('id_videos', $id_videos)->get();
        return response()->json(['channel' => $data]);
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
        $rules = [
            'id_videos' => 'required',
			'id_pesantren' => 'required',
			'channel_id' => 'required',
        ];
        
        $validator = Validator::make($request->all(),$rules);
        
		if ($validator->fails()) {
			return response()->json('gagal');
			// ->withInput()
			// ->withErrors($validator);
		}
		else{
            $id_pesantren = $request->input('id_pesantren');
            $channel_id = $request->input('channel_id');
            $id_videos = $request->input('id_videos');
            // return response()->json($id_videos);
			try{
				
                Video::where('id_videos', $id_videos)->update([
                    'id_pesantren_channel' => $id_pesantren,
                    'channel_id' => $channel_id,
                ]);

                // $data = [
                //     'channel_id' => $channel_id,
                //     'nama_pesantren' => $id_pesantren,
                // ];
                $data = Video::all();

    
                return response()->json(['channel' => $data]);
                    
                
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
        $id_videos = $request->input('id_videos');
        Video::where('id_videos', $id_videos)->delete();
        $data = Video::all();
        return response()->json(['channel' => $data]);
    }

    public function modalTambahChannel()
    {
        $data = DB::table('pesantren')
        ->leftjoin('video', 'pesantren.id_pesantren', '=', 'video.id_pesantren_channel')
        ->select('pesantren.nama_pesantren', 'pesantren.id_pesantren')
        ->whereNotIn('pesantren.id_pesantren', DB::table('video')->select('id_pesantren_channel'))
        ->groupBy('pesantren.nama_pesantren')
        ->get();
        return response()->json(['channel' => $data]);
    }

    public function datatableChannel(Request $request)

    {
        return DataTables::of(Video::select('id_pesantren_channel', 'channel_id'))
            ->addIndexColumn()
            ->addColumn('action', function($row){

     

            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        // $data = DB::table('pesantren')
        // ->leftjoin('video', 'pesantren.id_pesantren', '=', 'video.id_pesantren_channel')
        // ->select('pesantren.nama_pesantren', 'pesantren.id_pesantren')
        // ->whereNotIn('pesantren.id_pesantren', DB::table('video')->select('id_pesantren_channel'))
        // ->groupBy('pesantren.nama_pesantren')
        // ->get();
        // $total_channel = Video::count();
        // $jumlah_santri = Santri::count();
        // $channel = video::all();
        // $jumlah_data = Pesantren::count();

        // if ($request->ajax()) {

        //     $datar = Video::select('*');

        //     return Datatables::of($datar)

        //             ->addIndexColumn()

        //             ->addColumn('action', function($row){

     

        //                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';

       

        //                     return $btn;

        //             })

        //             ->rawColumns(['action'])

        //             ->make(true);

        // }

        

        // return view('pesantren/index', ['datas' => $data, 'jumlah_data' => $jumlah_data, 'channel' => $channel, 'total_channel' => $total_channel, 'total_santri' => $jumlah_santri]);

    }
}
