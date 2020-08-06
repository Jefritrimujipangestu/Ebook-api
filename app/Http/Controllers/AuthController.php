<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function me()
    {
        return
        [
            "NIS" => "3103118078",
            "Name" => "Jefri tri muji pangestu",
            "Gender" => "Laki-Laki",
            "Phone" => "085227560321",
            "Kelas" => "XII RPL 3",
        ];
    }
}