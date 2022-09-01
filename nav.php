<!-- database connection -->
<?php
  require 'connection.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>MarsCRUD</title>
  <style type="text/css">
    .raw_pad{
      padding: 10px;
      margin: 10px;
    }
    b{
      color:white;
    }
  </style>

</head>
<body>
<nav class="navbar navbar-warning bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand col" href="index.php">
      <img src="img/mars-icon.png" alt="" width="40" height="30" class="d-inline-block align-text-top">
      <b>Mars Mission Deployment<b>
    </a>
     <a href="index.php" class="btn btn-primary col">HOME</a>
  </div>

</nav>  
<div class="container-md">