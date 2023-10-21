<?php

namespace App\Http\Controllers;
use App\Services\SimpleService;
use Illuminate\Http\Request;

// DI - Method 2
class SampleController extends Controller
{
    private $simpleService;
    public function __construct(SimpleService $simpleService) {
        $this->simpleService = $simpleService;
    }
    public function index(Request $request) {
        $this->simpleService->log("This is a Test log");
        $this->anotherMethod();
        
        return $request->all();
    }
    public function anotherMethod() {
        $this->simpleService->log("Hello World - LOG");
    }
}
