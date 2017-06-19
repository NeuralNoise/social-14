<?php
/**
 * @author Shawn Norris
 * @copyright 2016
 * This copyright notice must remain in the header section of this file.
 */

//include core file to gain access to classes and functions.
include 'core.php';

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
<h1>The Live Feed</h1>

<?php

    //get the link to to open db. use $link to query the database.
    if (!$link = $conn->open()) {
        
        echo("ERROR: Unable to connect to the database.");
        exit("<br  />Fatal Error.");

    }

    //do something with the database

    //close the database

    $conn->close($link);

?>

<?php

//display post content to shore things up

page_display("post_content");

//display footer

page_display("footer");

?>