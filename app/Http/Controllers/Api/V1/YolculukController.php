<?php
namespace App\Http\Controllers\Api\V1;
class YolculukController extends Controller {
    public function index() {
        return response()->json(["message" => "HadiGidek API"]);
    }
}
