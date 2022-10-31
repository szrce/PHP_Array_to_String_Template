<?php

function dd($d){
  echo '<pre>';
    print_r($d);
  echo '</pre>';
}

$a = array('product' => [
    'file' => [
        'docker' => 'anne',
        'mevzi' => 'baba',
        'alt_mevzi' => [
            'header' => 'baba_ne',
            'footer' => 'baba_fe'
        ]
    ],
    'move' => 'translate'
],
'base' => [
    'aga' => 123,
    'memed' => 'aslan',
    'ahmet' => 'öldü'
],
'mustafa' => 'ahmet');

//dd($a);

function arraytostring($array,$sub=false){

  foreach($array as $head=>$val){

    if(!$sub){
      //if main array key get
      $templateString .= $head . '--> <br>';
    }
      if($sub){
        //if reback is data // we get again head
          $templateString .= '&nbsp;sub element --->' . $head . '<br>';
      }
        if(is_array($val)){
            //if exist still array data send up same
          $templateString .= arraytostring($val,true);
        }
      if($sub && !is_array($val)){
          $templateString .= 'sub element is val ---->' . $val . '<br>';
      }
      if(!$sub  && !is_array($val)){
        $templateString .= '&nbsp;-->'. $val  .'<br>';
      }
  }
  return $templateString;
}

dd(arraytostring($a));
//echo $;
