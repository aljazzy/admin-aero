<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GuzzlePesananController extends Controller
{

    public function index()
    {
        $client = new Client(['base_uri' => 'http://depeloper.com/']);
        $response = $client->request('GET', 'api/pesanan');
        $img = $client->request('GET', 'http://depeloper.com/api/public/uploads/');
        $body = $response->getBody();
        $content = $body->getContents();
        $pesanans = json_decode($content,TRUE);

              return view('pesanans.index')
            ->with('pesanans',$pesanans);
    }

    public function create()
    {
        return view('pesanans.create');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
