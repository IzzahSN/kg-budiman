<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function utama()
    {
        return view('guest.utama');
    }

    public function ahliJawatankuasa()
    {
        return view('guest.ajk');
    }

    public function fasiliti()
    {
        return view('guest.fasiliti');
    }

    public function aktiviti()
    {
        return view('guest.aktiviti');
    }

    public function budimanBizHub()
    {
        return view('guest.bizhub');
    }

    public function hubungiKami()
    {
        return view('guest.hubungi-kami');
    }
}
