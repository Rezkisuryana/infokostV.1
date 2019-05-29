<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyModel extends Model
{
    private static $page = 'property';

    public static function lists($param)
    {
        $url        = config('custom.api_infokost_url') . static::$page . '/lists';
        $response   = GuzzleModel::get_guzzle($url . "?" . http_build_query($param));
        return $response;
    }

    public static function info($param)
    {
        // dd($param);
        $url        = config('custom.api_infokost_url') . self::$page . '/info';
        $response   = GuzzleModel::get_guzzle($url."?".http_build_query($param));
        return $response;
    }
}
