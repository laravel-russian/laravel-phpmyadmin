<?php

namespace LaravelRussian\LaravelPhpmyadmin\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Http\Response;
// use Illuminate\Support\Facades\File;
// use Illuminate\Routing\Controller;


/**
 * @OA\Get(
 *     path="/phpmyadmin",
 *     @OA\Response(response="200", description="Display phpmyadmin.")
 * )
 */
class LaravelPhpmyadminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index(Request $request)
    {
        return view('phpmyadmin::index');
    }
}
