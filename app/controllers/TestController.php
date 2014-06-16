<?php

class TestController extends BaseController {

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function show()
    {
        $z = Input::get('z');
        $param =  Input::get('param');
        $x = 4; $y = 3;
        if($z && $param){
            $res = ($x + $y)/$z+$param+$z;
        }else{
            $res = $x + $y;
        }
        return View::make('test', ['res' => $res]);
    }

}
