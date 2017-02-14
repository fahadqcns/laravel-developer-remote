<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //return $request->input('product_name');
        //$content = View::make('xml.index', $request->name)->render();


        File::put(storage_path().'/file.xml', $request->input('product_name'));

        $fp = fopen('results.json', 'w');
        fwrite($fp, json_encode($response));
        fclose($fp);

        return Response::make($request->input('product_name'), 200)->header('Content-Type', 'application/xml');

    }


}
