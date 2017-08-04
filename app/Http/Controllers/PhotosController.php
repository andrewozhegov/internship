<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function gallery()
    {
        $code = "";
        $code .= "<div class=\"gallery-box\">";
        $code .= "<div class=\"view\">";
        $code .= "<div class=\"big-image\"><img title=\"подсказка по картинке 1\" src=\"../../../public/assets/img/photos/1.jpg\" alt=\"image11\"></div>";
        $code .= "<a href=\"#\" class=\"prev\"></a><a href=\"#\" class=\"next\"></a></div>";
        $code .= "<div class=\"thumbnails\">";
        $code .= "<a href=\"../../../public/assets/img/photos/1.jpg\" class=\"active\"><img title=\"подсказка по картинке 1\" src=\"../../../public/assets/img/photos/mic/1.jpg\" alt=\"\"/></a>";
        for($i = 2; $i <= 15; $i++) {
            $code .= "<a href=\"../../../public/assets/img/photos/".$i.".jpg\"><img title=\"подсказка по картинке ".$i."\" src=\"../../../public/assets/img/photos/mic/".$i.".jpg\" alt=\"\"/></a>";
        }
        $code .= "</div></div>";

        return $code;
    }

    public function show()
    {
        $photos = $this->gallery();

        $resp = view('photos')->withPhotosVar($photos)->render();

        return $resp;
    }
}
