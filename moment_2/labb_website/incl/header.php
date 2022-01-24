<?php include("includes/config.php"); ?>
<!DOCTYPE html>
<html lang="se">
<head>
    <title>PHP - Struktur</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title><?= $site_title . $divider . $page_title; ?></title>
</head>
<body>
    <div id="container">

        <header id="mainheader">
            <h1>PHP Struktur</h1>
            <?php include("incl/navbar.php"); ?>
        </header>
        <section id="leftcontent">