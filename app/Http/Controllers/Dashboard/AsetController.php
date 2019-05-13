<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class AsetController extends Controller
{

    public function index()
    {
        return view('dashboard.aset');
    }
    public function save_aset(Request $request)
    {

        $data = array();
        $data['idSekolah'] = $request->idSekolah;
        $data['created_at'] = Carbon::now('Asia/jakarta');
        $image = $request->file('upload');
        if ($image) {
            $fileName = $image->getClientOriginalName();
            $image_full_name = $fileName;
            $upload_path = 'image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
        }
        $data['upload'] = $image_url;
        DB::table('upload')->insert($data);
        return Redirect::to('/aset');
    }
    public function aset_all(){
        $data = DB::table('upload')->get();
        return view('dashboard/ViewAsset', ['data' => $data]);
    }
    public function Edit($id){
        $data = DB::table('upload')->where('id', $id)->get();
        return view('dashboard/editAset', ['data' => $data]);
    }
}
