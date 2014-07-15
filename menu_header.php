<?php
/**
 * Created by PhpStorm.
 * User: jwk
 * Date: 3/18/14
 * Time: 2:05 PM
 */

// define menu items (title, url)
$items = array(
    array("jQuery Popunder", "jquery_popunder.php"),
    array("Airline Rating Survey", "AirlineRatingCreate.php"),
    array("Pop-Under Test", "popunder.php"),
    array("Tab-Under Test", "tabunder.php"),
    array("MSIE Pop-Under Test", "msie_popunder.php"),
    array("XML Test", "xml_test.php"),
);
?>

<style>
    #menu_header {
        border-bottom: 1px solid #ccc;
        width: 100%;

    }
    #menu_header .menu a {
        text-decoration: none;
    }

    #menu_header .menu {
        list-style: none outside none;
        text-align: center;
    }
    #menu_header .menu li {
        display: inline-block;
        margin: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
    }
    #menu_header .menu li:hover {
        background-color: #ccc;
        -webkit-transition: all 200ms ease;
        -moz-transition: all 200ms ease;
        -ms-transition: all 200ms ease;
    }


</style>

<div id='menu_header'>

<ul class='menu'>

<?php
foreach ($items as $item) {
    echo "<li><a href='$item[1]'>$item[0]</a></li>";
}
echo "</ul></div>";

?>

