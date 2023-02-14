<?php

//index array

$arr1 = array('car1', 'car2', 'car3');

//associate array

$arr2 = array(
    /*key*/
    'name' => 'KAUSHIK', /*value*/
    'age' => 19,
    'status' => true,
);

//multi-dimensional array

$arr3 = array(
    /*key*/
    'name' => 'KAUSHIK', /*value*/
    'age' => 19,
    'contact' => array('690xxxx244', '936xxxx542'),
    'status' => true,
);


//ANOTHER WAY OF MAKING ARRAY

$arr_1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];

//2ND WAY OF MAKING MULTIDIMENSIONAL ARRAY

$arr_2 = [
    1,
    2,
    3,
    4,
    /*key*/ '5' => [
        57, '63' =>
        [29, 55, '91' =>
        ['speed','weight','age',
    ], 94, 31], 44, 27
    ],
    6,
    7,
];

//OUTPUTS

echo "<pre>";
print_r($arr_1); //print_r used to print array
print_r($arr_2);
print_r($arr1);
print_r($arr2);
print_r($arr3);
echo "</pre>";


echo $arr1[0];
echo $arr2['test'] = "testing";
echo $arr3['execute'] = 'executing';
