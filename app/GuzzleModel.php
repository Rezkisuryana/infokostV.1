<?php

namespace App;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Model;

class GuzzleModel extends Model
{
    public static function get_guzzle($url)
    {
        $client = new Client();
        try {
            // $response = $client->request('get','http://api-stage.infokost.id/property/lists',array(
            //     'headers' => array(
            //         'Authorization' => config('custom.auth')
            //     ),
            //     'query' => array(
            //         'limit' => 5,
            //         'offset' => 0
            //     )
            // ));
            $response = $client->request('GET', $url, [
                'headers' => [
                    'Authorization' => config('custom.auth')
                ]
            ]);
            return json_decode($response->getBody()->getContents());
        } catch (GuzzleException $e) {
            return json_decode($e->getMessage());
        }
    }

   public static function post_guzzle($url, $param)
   {
       $client = new Client();
       try {
           $response = $client->request('POST', $url, [
               'headers' => [
                   'Authorization' => config('custom.auth')
               ],
               'form_params' => $param
           ]);
           return json_decode($response->getBody()->getContents());
       } catch (GuzzleException $e) {
           return json_decode($e->getCode());
       }
   }
}
