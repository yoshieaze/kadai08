<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
// use App\Http\Requests\SearchQiitaRequest;

class QiitaController extends Controller
{
    public function index(){
        $tag_id = "laravel";

        $url = "https://qiita.com/api/v2/tags/" . $tag_id . "/items?page=1&per_page=20";
        $method = "GET";

        //接続
        $client = new Client();

        $response = $client->request($method, $url);

        $qiitas = $response->getBody();
        $qiitas = json_decode($qiitas, true);

        return view('qiita.index', ['qiitas' => $qiitas]);

    }

    //検索
    public function store(Request $request)
        {
                $tag_id = $request ->input('search');

                if(!empty($tag_id)){
                    $url = "https://qiita.com/api/v2/tags/" . $tag_id . "/items?page=1&per_page=20";
                    $method = "GET";

                    //接続
                    $client = new Client();

                    $response = $client->request($method, $url);

                    $qiitas = $response->getBody();
                    $qiitas = json_decode($qiitas, true);

                    return view('qiita.index', ['qiitas' => $qiitas]);
                }


        }
    }
