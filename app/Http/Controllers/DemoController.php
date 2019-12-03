<?php

namespace App\Http\Controllers;

use DB;

class DemoController extends Controller
{

    public function displayStudentData($name)
    {

        // return Response::json([['name' => $name], 200]);
    }

    public function insertData()
    {
        $aname = $_GET['aname'];
        $user = $_GET['user'];
        $password = $_GET['password'];
        $age = $_GET['age'];
        $gender = $_GET['gender'];
        DB::table('admins')->insert(
            [
                'aname' => $aname,
                'user' => $user,
                'password' => $password,
                'age' => $age,
                'gender' => $gender,
            ]

        );

    }

}
