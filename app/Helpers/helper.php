<?php
use App\Models\Advertisement;
use App\Models\Post;
use App\Models\Category;
if(! function_exists('getCurrentUser()')) {
  function getCurrentUser() {
    $data  = ['userID' => Auth()->user()->id, 'shakhaID' => Auth()->user()->shakha_id];
    return $data;
  }
}

//get month names 
if(!function_exists('monthNames')) {
  function monthNames() {
    return array(
      '4' => 'श्रावण',
      '5' => 'भाद्र',
      '6' => 'आश्विन',
      '7' => 'कार्तिक',
      '8' => 'मार्ग',
      '9' => 'पौष',
      '10' => 'माघ',
      '11' => 'फाल्गुन',
      '12' => 'चैत्र',
      '1' => 'वैशाख',
      '2' => 'ज्येष्ठ',
      '3' => 'आषाढ',
    );
  }
}

if(!function_exists('explodeData')) {
  function explodeData($delimiter,$data) {
    return explode($delimiter, $data);
  }
}

if(!function_exists('pp')) {
  function pp($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    exit;
  }
}

if(!function_exists('widgetsAds')) {
  function widgetsAds( $position ) {
    $row = Advertisement::where('position',$position)->orderBy('id','desc')->first();
    if(!empty($row)) {
      return $row->ads_image;
    } else {
      return '';
    }
  }
}

if(!function_exists('getCategoryName')) {
  function getCategoryName( $slug ) {
    $row = Category::where('category_slug',$slug)->first();
    if(!empty($row)) {
      return $row->category_name;
    } else {
      return '';
    }
  }
}
