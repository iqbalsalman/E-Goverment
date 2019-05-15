<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();


class AsetController extends Controller
{

    public function index()
    {
        return view('Dashboard.aset');
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
            $upload_path = 'upload/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
        }
        $data['upload'] = $image_url;
        DB::table('upload')->insert($data);
        Session::put('message', 'Data Aset added Successfuly !!');
        return Redirect::to('/aset');
    }
    public function aset_all()
    {
        $data = DB::table('upload')->get();
        return view('Dashboard/ViewAsset', ['data' => $data]);
    }
    public function Edit($id)
    {
        $data = DB::table('upload')->where('id', $id)->first();

        return view('Dashboard.editAset')->with('data', $data);
    }

    public function update(Request $request, $id)
    {
       
        $data = array();
        $data['idSekolah'] = $request->idSekolah;
        $data['created_at'] = Carbon::now('Asia/jakarta');
        $image = $request->file('upload');
        if ($image) {
            $fileName = $image->getClientOriginalName();
            $image_full_name = $fileName;
            $upload_path = 'upload/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
        }
        $data['upload'] = '';
        $data = DB::table('upload')
            ->where('id', $id)
            ->update($data);
        Session::put('message', 'Data Aset Update Successfuly !!');
        return Redirect::to('/DataAset');
    }
    public function delete($id)
    {
        $data = DB::table('upload')
            ->where('id', $id)
            ->delete();
        Session::put('message', 'Data Aset Delete Successfuly !!');
        return Redirect::to('/DataAset');
    }
}
