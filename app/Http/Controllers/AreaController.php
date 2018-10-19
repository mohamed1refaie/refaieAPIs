<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use JWTAuth;

class AreaController extends Controller
{
    protected $user;
    public function __construct()
    {
        try {
            $this->user = JWTAuth::parseToken()->authenticate();
        } catch (\Exception $e) {

        }
    }
    public function index()
    {
        $response = json_decode(file_get_contents('https://restcountries.eu/rest/v2/all'),true);

        return $response;
    }

}