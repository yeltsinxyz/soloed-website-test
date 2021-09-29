<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Poppins:wght@700&family=Signika+Negative:wght@300;700&display=swap" rel="stylesheet"> 

        <?php wp_head(); ?>

    </head>

<body>

<header>

    <div class="grid-container">

        <div class="grid-x grid-padding-x align-middle">

            <div class="cell small-3">

                <h1>
                    <a href="">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" role="img">
                            <title>SoloED Logo</title>
                            <path d="M0 48V0H48V48H0ZM9.16923 40H38.8308V34.2423H9.16923V40Z" fill="#6C63FF"/>
                        </svg>
                    </a>

                </h1>

            </div>

            <div class="cell small-9">

                <?php
                wp_nav_menu( array(
                    'menu'  =>  'header',
                    'menu_class'    =>  'menu align-right',
                    'container' => false,
                ) );
                ?>

            </div>

        </div>

    </div>

</header>