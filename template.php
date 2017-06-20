<?php
/**
 * @author Shawn Norris
 * @copyright 2016
 * This copyright notice must remain in the header section of this file.
 */

//include core file to gain access to classes and functions.

include("core.php");

//set page title
$title = "Template";



/******************IMPORTED VARS*********************
 * $conn - SocialSql object. methods: open(), close($link)
 *
 *
 *
 */

//display header

page_display('header');

//display nav bar

page_display('pre_content');

?>

    <!-- content goes here --->
    <h1>CONTENT</h1>


<?php

//display post content to shore things up

page_display("post_content");

//display footer

page_display("footer");

?>