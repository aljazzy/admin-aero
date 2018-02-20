<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GuzzleUnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = new Client(['base_uri' => 'http://depeloper.com/']);
        $response = $client->request('GET', 'api/unit');
        $img = $client->request('GET', 'http://depeloper.com/api/public/uploads/');
        $body = $response->getBody();
        $content = $body->getContents();
        $units = json_decode($content,TRUE);
        //return $arr;
        //dd($units);
        return view('units.index')->with($units,$img);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('units.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $client = new Client();

        $img = $request->file('gambar');
        $ext = $img->getRealPath();
        $name = $img->getClientOriginalName('gambar');




//        $mimeType = $request->getContentType('gambar');

        $body_array = array(
            'id_unit' => $request->input('id_unit'),
            'nama_unit' => $request->input('nama_unit'),
            'type' => $request->input('type'),
            'gambar' => [
                'name' => 'gambar',
                'filename' => $name,
                'content' => fopen($ext,'r'),
                'Content-Type' => 'multipart/form-data'
            ],
            'harga' => $request->input('harga'),
            'info' => $request->input('info'),
            'alamat' => $request->input('alamat'),
            'area' => $request->input('area'),
            'status' => $request->input('status') );

       //dd($body_array);

        $req = $client->request( 'POST', 'http://depeloper.com/api/unit' ,
            [

                'headers' => [
                    'Cache-Control' => 'no-cache',
                    'Content-Type'     => 'application/json',
                    'content-type'      => 'multipart/form-data'
                ],
                'multipart' => $body_array
//                'form_params' => [
//                    'id_unit' => $request->input('id_unit'),
//                    'nama_unit' => $request->input('nama_unit'),
//                    'type' => $request->input('type'),
//                    'gambar' => [
//                        'name' => 'gambar',
//                        'filename' => $fileName,
//                        'Content-Type' => $mimeType
//                    ],
//                    'harga' => $request->input('harga'),
//                    'info' => $request->input('info'),
//                    'alamat' => $request->input('alamat'),
//                    'area' => $request->input('area'),
//                    'status' => $request->input('status'),
//                ]
            ]);
//        try {
//            $response = $req->send();
//
//            echo $req->getBody();
//        } catch (HttpException $ex) {
//            echo $ex;
//        }

        //dd($response);


       // dd($path);
        //return view('units.index')->with($units);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $client = new Client(['base_uri' => 'http://depeloper.com/']);
        $response = $client->request('GET', 'api/unit/'.$id);
        $body = $response->getBody();
        $content = $body->getContents();
        $units = json_decode($content,TRUE);
        //return $arr;
        //dd($units);
        return view('units.show')->with('unit',$units);
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
        $client = new Client(['base_uri' => 'http://depeloper.com/']);
        $response = $client->request('DELETE', 'api/unit/'.$id);
        $body = $response->getBody();
        $content = $body->getContents();
        $units = json_decode($content,TRUE);
        //return $arr;
        //dd($units);
        return view('units.index');
    }
}
