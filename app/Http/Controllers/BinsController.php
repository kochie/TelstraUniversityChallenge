<?php

namespace App\Http\Controllers;

use App\bin;

use Illuminate\Http\Request;

use App\Http\Requests;

class BinsController extends Controller
{
    public function index()
    {
        return bin::all();
    }

    public function teamSelect($id)
    {
        if ($id == 0){
            return bin::all();
        }
        else{
            return bin::where(function($query) use($id){
                $query->where('team','=',  $id );
            }) ->get();
        }

    }

    public function show($id)
    {
        return bin::findOrFail($id);
    }

    public function create()
    {
        return view('bins.create');
    }

    public function store(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $data = $data['points'];
        foreach ($data as $item){
            bin::create($item);
        }
    }
}
