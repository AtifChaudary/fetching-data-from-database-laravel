<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ghoom_Lay;
use App\tour_places;
use App\hotel_data;
use App\tour_pakages;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;


class GhoomLay_Controller extends Controller
{
    public function hotel()
    {
        return view('Body.hotel');
    }

    public function hotelBooking()
    {
        $data = request()->all();

        $location = $data['inputLocation'];

        $loc = iconv('utf-8', 'ascii//TRANSLIT', $location);


        $result= DB::select('select * from  hotel_data where HotelLocation like ?',[$loc.'%']);

        return view('Body.HotelBooking') -> with ('hotelData',$result);
    }


}


