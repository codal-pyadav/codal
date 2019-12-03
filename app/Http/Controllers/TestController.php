<?php

namespace App\Http\Controllers;

use App\Student;
use DB;
use Response;

class TestController extends Controller
{
    /**
     * @OA\Get(
     *     tags={"Pankaj API"},
     *     path="/test/{name}/{age}/{dob}",
     *     description="Returns all bmp for Swppp",
     *     summary="List bmp of swppp",
     *     operationId="ListSwpppBmp",
     *     @OA\Response(
     *         response=200,
     *         description="success response",
     *         @OA\JsonContent(ref="#/components/schemas/SuccessResponse")
     *     ),
     *     @OA\Parameter(
     *         description="Inspection Id",
     *         in="path",
     *         name="name",
     *         required=false,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     @OA\Parameter(
     *         description="Inspection Id",
     *         in="path",
     *         name="age",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *                format="int32"
     *         )
     *     ),
     *     @OA\Parameter(
     *         description="Inspection Id",
     *         in="path",
     *         name="dob",
     *         required=false,
     *         @OA\Schema(
     *             type="string",
     *         )
     *     ),
     *     security={
     *         {"API-Key": {}}
     *     }
     * )
     * Its an Open API for SSW
     */

// Try For Jsson Retun Array
    public function index($name, $age, $dob)
    {
        return Response::json([['hello' => $name, 'Age' => $age, 'dob' => $dob], 200]);

    }

    /**
     * @OA\Get(
     *     tags={"Pankaj API"},
     *     path="/display/{name}",
     *     description="Returns all bmp for Swppp",
     *     summary="List bmp of swppp",
     *     operationId="ListSwpppBmp",
     *     @OA\Response(
     *         response=200,
     *         description="success response",
     *         @OA\JsonContent(ref="#/components/schemas/SuccessResponse")
     *     ),
     *     @OA\Parameter(
     *         description="Student Name",
     *         in="path",
     *         name="name",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     security={
     *         {"API-Key": {}}
     *     }
     * )
     * Its an Open API for SSW
     */

// Search User Data By Name
    public function display($name)
    {
        //$student = Student::all();

        $student = DB::table('students')
            ->where('sname', $name)
            ->get();

        // echo $student;exit;
        return Response::json([$student, 200]);

    }
    /**
     * @OA\Get(
     *     tags={"Pankaj API"},
     *     path="/demoStudent/{name}",
     *     description="Returns all bmp for Swppp",
     *     summary="List bmp of swppp",
     *     operationId="ListSwpppBmp",
     *     @OA\Response(
     *         response=200,
     *         description="success response",
     *         @OA\JsonContent(ref="#/components/schemas/SuccessResponse")
     *     ),
     *     @OA\Parameter(
     *         description="Student Name",
     *         in="path",
     *         name="name",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         )
     *     ),
     *     security={
     *         {"API-Key": {}}
     *     }
     * )
     * Its an Open API for SSW
     */

    public function demoStudent($name)
    {

        return Response::json([["name" => $name], 200]);
    }

}
