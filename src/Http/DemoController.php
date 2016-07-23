<?php

namespace Websanova\Demo\Http;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use App\Http\Requests;
use Demo;

class DemoController extends BaseController
{
    public function index()
    {
        return view('websanova-demo::index');
    }
}
