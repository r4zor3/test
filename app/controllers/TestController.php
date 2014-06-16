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
        $zz = Input::get('z');
        $x = 20; $y = 100;
        $r = 3;
        //comment
		$test = 'tttttt';
		$test2 = 'asd';
        if($zz){
            $res = ($x + $y)/$zz-$zz;
        }else{
            $res = $x + $y;
        }
        return View::make('test', ['res' => $res]);
    }

}
