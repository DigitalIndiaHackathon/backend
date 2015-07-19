<?php

use \Curl\Curl;

class HomeController extends BaseController {

	public function splash()
	{
		return View::make('splash');
	}

    function api(){
        $apiKey = Input::get('apiKey');
        if(!$apiKey){
          \App::abort(500);
        }
      $sysKey = Config::get('settings.apiKey');

      if($sysKey !== $apiKey){
        \App::abort(500);
        }
    $base = \Input::get('image');
    $binary = base64_decode($base);
    $fname = rand(0,100) . ".jpg";
    header('Content-Type: bitmap; charset=utf-8');
    $file = \File::put(public_path() . "/uploads/" . $fname, $binary);
    $furl =  asset('/uploads/' . $fname);

    $curl = new Curl();
    $key = Config::get('settings.idol.key');
    $url = Config::get('settings.idol.orc_url');
    $response = $curl->get($url, array(
        'apikey' => $key,
        'url' => $furl,
        ));

    if($response && isset($response->text_block)){
        return $response->text_block[0]->text;
    }else{
        return "error";
    }
}

}
