<?php
require('libs/Smarty.class.php');

$smarty = new Smarty;
$options = [
    ['value' => 'option1', 'label' => 'Option 1'],
    ['value' => 'option2', 'label' => 'Option 2'],
    ['value' => 'option3', 'label' => 'Option 3'],
];

$smarty->assign('options', $options); 

$smarty->assign("text", "Abhay");


$table = range(1, 10);
$smarty->assign('table', $table);

$smarty->assign("greeting", "Hello");


$smarty->assign('sequence', 5);

$smarty->assign(
    'data',
    array(
        'fax' => '555-222-9876',
        'email' => 'megha@ucertify.com',
        'phone' => array(
            'home' => '555-444-3333',
            'cell' => '555-111-1234'
        )
    ),
    array(
        'fax' => '555-222-8876',
        'email' => 'pete.gupta@ucertify.com',
        'phone' => array(
            'home' => '555-444-8888',
            'cell' => '555-111-9999'
        )
    )
);


$smarty->assign(
    'our_culture',
    array(
        array(
            "point_one" => "To be the best in the world.",
        ),
        array(
            "point_two" => "We produce results.",
        ),
        array(
            "point_three" => "We keep our word - We do what we say we will do.",
        ),
        array(
            "point_four" => "Coach, mentor and help the team grow."
        )
    )
);

$number = 7;
$smarty->assign('number', $number);


$checkbox_values = ['Red', 'Green', 'Blue'];
$selected_colors = ['Green', 'Blue'];

$radio_values = ['Male', 'Female'];
$selected_gender = 'Female';

$smarty->assign('checkbox_values', $checkbox_values);
$smarty->assign('selected_colors', $selected_colors);
$smarty->assign('radio_values', $radio_values);
$smarty->assign('selected_gender', $selected_gender);



$smarty->display('template/example.tpl');
?>

