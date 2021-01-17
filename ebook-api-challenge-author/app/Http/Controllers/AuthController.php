<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(){
        return[ 'nis' => '3103118102',
                'name' => 'Nur Bintang Romadhon',
                'gender' => 'Laki-laki',
                'phone' => '+ 62 2242509834',
                'class' => 'XII RPL 3'];
    }
}
