<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Laravolt\Indonesia\Models\City;
use App\Http\Controllers\Controller;
use Laravolt\Indonesia\Models\Village;
use Laravolt\Indonesia\Models\District;

class WilayahController extends Controller
{

    public static function middleware(): array
    {
        return [
            // examples with aliases, pipe-separated names, guards, etc:
            'permission:master wilayah.index',
        ];
    }
    /**
    * Get Wilayah Indonesia.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return view('backend.wilayah.index');
    }

    /**
    * Get City.
    *
    * @return \Illuminate\Http\Response
    */
    public function getcity($province_code)
    {
        // menampilkan data menggunakan Query builder buka elequent
        // $subcategory = DB::table('postsubcategories')->where('province_code', $province_code)->get();
        $cities = City::where('province_code', $province_code)->get();
        return response()->json($cities);
    }

    /**
    * Get District.
    *
    * @return \Illuminate\Http\Response
    */
    public function getdistrict($city_code)
    {
        $districts = District::where('city_code', $city_code)->get();
        return response()->json($districts);
    }

    /**
    * Get Village.
    *
    * @return \Illuminate\Http\Response
    */
    public function getvillage($district_code)
    {
        $city = Village::where('district_code', $district_code)->get();
        return response()->json($city);
    }

}
