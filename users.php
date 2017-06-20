<?php
/**
 * @author Shawn Norris
 * @copyright 2016
 * This copyright notice must remain in the header section of this file.
 */

include("core.php");

//user class file

    class User {

        public function isUser($username) {

            //check database to see if user is registered;
            return false;

        }

        public $username; //username
        public $register_date; //date registered
        public $registered_for; //time elapsed since user registered
        public $post_count; // amount of posts user has made


    }


?>