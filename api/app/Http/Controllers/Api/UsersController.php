<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function show(Request $request): \Illuminate\Http\JsonResponse
    {
        return response()->json($request->user());
    }
}
