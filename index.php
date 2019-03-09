<?php
session_start();
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
*{
    color:black;
}
ul{
    list-style-type:none;
}
</style>
</head>
<body>
<div class="jumbotron text-center">
<h1 >ToDo List Application PHP </h1>
</div>
<div class="container">
<form  method="post" action="storeItem.php" >
<div class="form-group">
    <label for="Task">Task</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="item" aria-describedby="task" placeholder="Enter task">
    <small id="emailHelp" class="form-text text-muted">Enter The task needed to be done</small>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
<?php fopen("tasks.txt", "a+") or die("Unable to open file!");
  $file = file_get_contents("tasks.txt");
  $list=unserialize($file);
   ?>
<div class="container">
<ul class="list-group">
   <?php for($i = 0; $i < sizeof($list); $i++) { ?>
    
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <?php echo $list[$i]["caption"]; ?><input type="button" class="btn btn-outline-primary" value="Remove" 
        onclick=" location.href = 'remove.php?index=<?php echo $i ?>';">
        </li>
    <?php } ?>
</ul>
</div>	
</body>
</html>
