# PHP_Array_to_String_Template
```
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
```




dd(arraytostring($a)); 
https://github.com/szrce/PHP_Array_to_String_Template/blob/main/arraytostring_temp.php
```
product--> 
 sub element --->file
 sub element --->docker
sub element is val ---->anne
 sub element --->mevzi
sub element is val ---->baba
 sub element --->alt_mevzi
 sub element --->header
sub element is val ---->baba_ne
 sub element --->footer
sub element is val ---->baba_fe
 sub element --->move
sub element is val ---->translate
base--> 
 sub element --->aga
sub element is val ---->123
 sub element --->memed
sub element is val ---->aslan
 sub element --->ahmet
sub element is val ---->öldü
mustafa--> 
 -->ahmet
