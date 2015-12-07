<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CS 148 - Final Project</title>
        <meta charset="utf-8">
        <meta name="author" content="David Drexler">
        <meta name="description" content="Home of the League of Legends Skirmish Simluator">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" type="text/css" media="screen">
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">

        <?php
        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");
        $path_parts = pathinfo($phpSelf);

        require_once('bin/Database.php');

        $dbUserName = get_current_user() . '_writer';
        $whichPass = "w";
        $dbName = strtoupper(get_current_user()) . '_LEAGUE';

        $thisDatabase = new Database($dbUserName, $whichPass, $dbName);
        ?>

    </head>

    <?php
    print '<body id="' . $path_parts['filename'] . '">';
    ?>