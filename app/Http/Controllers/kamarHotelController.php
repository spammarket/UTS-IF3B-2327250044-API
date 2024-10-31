<?php

namespace App\Http\Controllers;

use App\Models\DataKamarHotel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class kamarHotelController extends Controller
{
    //
    public function store(Request $request)
    {
        $validate = $request->validate([
            'ruangan' => 'required|string',
            'lantai' => 'required|integer',
            'grade' => 'required|string',
            'status' => 'required|string'
        ]);

        $result = DataKamarHotel::create($validate);
        if ($result) {
            $data['success'] = true;
            $data['message'] = "Data kamar berhasil disimpan";
            $data['result'] = $result;
            return response()->json($data, Response::HTTP_CREATED);
        }
    }

    public function show()
    {
        $datakmrHotel = DataKamarHotel::all();
        $data['success'] = true;
        $data['result'] = $datakmrHotel;
        return response()->json($data, Response::HTTP_OK);
        
    }
}
