<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppHelper extends ServiceProvider
{
    public static function img_filter_small($image_array, $single)
    {
        $single_image = array('https://res.cloudinary.com/infokost/image/upload/w_480,h_300/v1552531062/static/no_images.jpg');
        if (!empty($image_array)) {
            $gambar = array();
            foreach ($image_array as $image) {
                if (strchr($image, "https://res.cloudinary.com/infokost")) {
                    $gambar[] = self::change_to_large($image);
                } else {
                    $gambar[] = $image;
                }
            }

            if ($single == "true") {
                $single_image = $gambar[0];
            } else {
                $single_image = $gambar;
            }
        } else {
            $single_image = $single == "true" ? $single_image[0] : $single_image;
        }
        return $single_image;
    }
    public static function change_to_277($url)
    {
        $new_url = str_replace('upload/w_660,h_420/', 'upload/c_thumb,w_277,h_173/', $url);
        return $new_url;
    }

    public static function change_to_480($url)
    {
        $new_url = str_replace('upload/w_660,h_420/', 'upload/w_480,h_300/', $url);
        return $new_url;
    }
    
    public static function change_to_large($url)
    {
        $new_url = str_replace('upload/', 'upload/w_660,h_420/', $url);
        return $new_url;
    }

    public static function to_icon($icon)
    {
        $rv = asset('img/svg/tempat_tidur.svg');
        if ($icon != null) {
            $rv = strtolower(str_replace(' ','_', $icon));
        }
        return $rv;
    }

    public static function if_not_empty($string, $to)
    {
        if (!empty($string) || $string != '') {
            return $string;
        } else {
            return $to;
        }
    }
}
