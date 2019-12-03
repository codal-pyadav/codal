<?php

namespace App\Http\Controllers;

use App\admin;

class admins extends Controller
{
    function list() {

        return admin::all();
    }
}
