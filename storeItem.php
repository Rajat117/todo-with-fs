<?php
//session_start();

if(!empty($_POST['item'])) {
  $name=$_POST["item"];
  fopen("tasks.txt", "a+") or die("Unable to open file!");
  $file = file_get_contents("tasks.txt");
  if(!empty($file))
  {
  $todoCollection = unserialize($file);
  }
  else
  {
    $todoCollection=[];
  }
  array_push($todoCollection , ['caption' => $name ,'status' => 0 ]);
  $b=serialize($todoCollection);
  file_put_contents("tasks.txt",$b);
  }
   header("Location: http://todo.local.geekydev.com")
?>