<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/*
Route::controller(StudentController::class)->group(function () {
    Route::get("/students", "index");
});
*/

// Route::resource("students", StudentController::class);

Route::prefix("v1")->group(function () {
    Route::controller(StudentController::class)->prefix("students")->group(function () {
        Route::get("/", "index");
        Route::post("/store", "store");
        Route::get("/show/{id}", "show");
        Route::put("/update/{id}", "update");
        Route::patch("/updatePartial/{id}", "updatePartial");
        Route::delete("/destroy/{id}", "destroy");
    }); 
});