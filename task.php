#!php
<?php

require_once __DIR__.'/includes/autoloader.php';


$obj1 = new Operations();


if($argv[1] == "add")
{
    $a = readline('add task: ');
    $b = readline('add priority: ');
    $obj1->Store_Record($a,$b);
    $obj1->view_record();
}
elseif ($argv[1] == "list")
{
    $obj1->view_record();
}
elseif ($argv[1] == "delete")
{
    $a = (int)readline('Enter delete id: ');
    $obj1->Delete_Record($a);
    $obj1->view_record();
}
elseif ($argv[1] == "action")
{
    $b = (int)readline('Enter an update id: ');
    $a = readline('Enter a status: ');
    $obj1->insert_Updaterecord($a,$b);
    $obj1->view_record();
}
