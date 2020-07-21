<!doctype html>

<?php
  include 'target.php';
?>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Pangdean Old Barn - Live Stream</title>
  <meta name="description" content="Pangdean Old Barn - Live Stream">
  <meta name="author" content="Not Just PCs">

  <link rel="icon" type="image/jpg" href="/favicon.jpg"/>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="/style.css?v=20200721">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <?php
  if ($streamlink !== '') {
    header("Location: $streamlink");
  }
  ?>

  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="refresh" content="10; url=/" />
</head>

<body>
Waiting for the next event to begin...
</body>
</html>
