<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Providers\AppHelper;
use App\PropertyModel;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function manggil()
    {   
        $data       = array();
        $get_hasil  = array();
        $param      = array();

        $param['limit']     = 9;
        $param['offset']    = 0;
        $param['sort']      = "asc";

        $query_hasil = PropertyModel::lists($param);
        if($query_hasil->code == 200)
        {
            $total = $query_hasil->total;
            foreach ($query_hasil->result as $row)
            {
                $images = AppHelper::img_filter_small($row->images, 'true');
                $get_hasil[] = (object)array(
                    'property_id'           => $row->property_id,
                    'property_slug '        => $row->property_slug,
                    'property_name'         => $row->property_name,
                    'property_address'      => $row->property_address,
                    'property_daily_max'    => $row->property_daily_max,
                    'images'                => AppHelper::change_to_large($images),
                    'facility'              => self::LoopData($row->facility)
                );
            }
            
        }

        $data['hasil']  = $get_hasil;
        $data['total']  = $total;
        return view('pages/hasilpencarian', $data);
    }

    // nge Loop Data
    public static function LoopData($data){
        $param = array();
        foreach ($data as $value) {
            $param[] = $value;
        }

        return $param;
    }
}
