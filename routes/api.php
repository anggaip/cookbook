<?php

use Illuminate\Http\Request;
use App\User;

Route::middleware('auth:api')->get('/user', function (Request $request, User $user) {
    return response()->json($user->all());
});