<?php

namespace App\Http\Controllers;
ini_set('max_execution_time', 600); //3 minutes
ini_set('memory_limit', '-1');
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use League\Csv\Reader;


class FileController extends Controller
{
    public function index(Request $request)
    {
    	$url = $request->url;
    	$client = new Client();
    	$response = $client->get($url);
    	//clear content first
    	file_put_contents(public_path('files/Koboldata.json'), '');
    	// then write new content
    	file_put_contents(public_path('files/Koboldata.json'), $response->getBody());
    	session()->flash('success',true);
    	return redirect()->back();
	}
}
// curl GET -X https://kc.humanitarianresponse.info/api/v1/data/472182?filter[start]=2020-09-30T01:02:03+0000
// curl -X GET https://kc.humanitarianresponse.info/api/v1/data/472182?filter[start]=2020-10-2T01:02:03+0000
