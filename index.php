<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Popunder Demo Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

<!--
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
-->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <style>
            .cf:before,
            .cf:after {
                content: " "; /* 1 */
                display: table; /* 2 */
            }

            .cf:after {
                clear: both;
            }

             /*For IE 6/7 only */
            .cf {
                *zoom: 1;
            }

            .press {
                width: 100px;
                height: 50px;
                margin: 10px 10px 10px 5px;
                border: 1px solid black;
                border-radius: 5px;
                padding: 5px;
                text-align: center;
                background-color: #efe;
            }
            .display {
                display: inline-block;
                margin: 10px 10px 10px 5px;
                border: 1px solid black;
                padding: 10px;
                background-color: #eee;
                background-clip: content-box;
            }
            .wrap {
                display: inline-block;
                margin: 10px 10px 10px 5px;
                border: 1px solid black;
                border-radius: 5px;
                padding: 10px;
                text-align: center;
            }
            .wrap p {
                margin-top: 5px;
                margin-bottom: 5px;
            }
            button {
                padding: 15px;
            }
            button::-moz-focus-inner {
                border: 0;
                padding: 15px;
                margin-top:-2px;
                margin-bottom: -2px;
            }
        </style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?php include("menu_header.php"); ?>

    <p>Select a demo/test page from the menu above.</p>

    </body>
</html>
