<?php
    fopen("tasks.txt", "a+") or die("Unable to open file!");
    $file = file_get_contents("tasks.txt");
    $list=unserialize($file);
    $i=$_REQUEST["index"];
    array_splice($list,$i,1);
    $b=serialize($list);
    file_put_contents("tasks.txt",$b);
    header("Location: http://todo.local.geekydev.com")
?> 