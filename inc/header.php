<!DOCTYPE html>

<html id="top">
<head>
    <title><?php echo $title; ?></title>

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/1140.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <div class="container12">
            <ul class="nav-bar">
                <li class="logo-li"><a href="index.php" class="logo-a">LOGO</a></li>
                <li <?php echo 'class="nav-li'; if($active === 'home') { echo ' active'; } echo '"' ?> ><a href="index.php" class="nav-a">Home</a></li>
                <li <?php echo 'class="nav-li'; if($active === 'about') { echo ' active'; } echo '"' ?> ><a href="about.php" class="nav-a">About</a></li>
                <li <?php echo 'class="nav-li'; if($active === 'contact') { echo ' active'; } echo '"' ?> ><a href="contact.php" class="nav-a">Contact</a></li>
            </ul>
        </div>
