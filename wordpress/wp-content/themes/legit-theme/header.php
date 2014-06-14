<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dream Home Practice Site</title>
    
    <!--WORDPRESS THEME URL
    http://demo.crocoblock.com/free-themes/dream_home/->

    <!--WEBFONT-->
    <script>
        var __adobewebfontsappname__ = "code"
    </script>
    <script src="http://use.edgefonts.net/ubuntu:n4,i4,n7,i7,n3,i3,n5,i5:all.js"></script>

    <!--STYLESHEET-->
    <link rel="stylesheet" href="<?php> bloginfo("stylesheet_url"); ?>">

</head>

<body>

    <!--HEADER & MAIN NAV-->
    <header>
        <div class="navbar-wrapper">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle btn-styles" type="button" data-toggle="collapse" data-target="#main-nav">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <h1>Dream Home</h1>
                            <h2>Style & Comfort</h2>
                            <!--Add bg img-->
                        </a>
                    </div>
                    <div class="collapse navbar-right navbar-collapse" id="main-nav">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="main-nav" href="">Home</a></li>
                            <li class="dropdown dropdown-toggle main-nav">
                               <a class="dropdown-toggle main-nav" data-toggle="dropdown" href="">About Us</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Testimonials</a></li>
                                        <li><a href="">Archives</a></li>
                                        <li><a href="">FAQs</a></li>
                                    </ul>
                            </li>
                            <li class="dropdown">
                               <a class="dropdown-toggle main-nav" data-toggle="dropdown" href="">Projects</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Project 1</a></li>
                                        <li><a href="">Project 2</a></li>
                                        <li><a href="">Project 3</a></li>
                                    </ul>
                            </li>
                            <li><a class="main-nav" href="">Blog</a>
                            </li>
                            <li><a class="main-nav" href="">Contacts</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>