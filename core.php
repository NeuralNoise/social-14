<?php
/**
 * @author Shawn Norris
 * @copyright 2016
 * This copyright notice must remain in the header section of this file.
 */

/**
 * This is the core file that contains classes and functions
 * that make the site go.
 */

/**
 * SQL connection class
 */

class SocialSql {
    
    function open () {

        if (!include("../../config.php")) {

            echo ("ERROR: Config file not available.");
            exit("<br  />Fatal Error");

        }
        else {

            //make database connection link   
            $link = mysqli_connect($hostname, $db_user, $db_pass, $database);

            //unset tha database vars...
            unset($hostname, $db_user, $db_pass, $database);

            if (!$link) {

                return false;

            }
            else {

                return $link;

            }

        }


    }
    function close ($link) {

        if ($link) {

            mysqli_close($link);

        }

        if (!$link) {

            return true;

        }
        else {

            return false;

        }

    }

}

/*
 * end sql conection class.
 */

//the majority of this layout is from start bootstrap and startbootstrap.com
//it is used under the apache 2.0 license
//and is copyright startbootstrap.com

/**
 * page display function
 * expects section
 * page_display($section)
 * @param $section
 * sections: header, pre_content, post_content, footer
 */

function page_display ($section) {

    //declare globals
    global $title;

    if ($section == "header") {

?>
        <!DOCTYPE html>
        <html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

            <title><?php echo("Social - $title"); ?></title>

            <!-- Bootstrap Core CSS -->
            <link href="css/bootstrap.min.css" rel="stylesheet">

            <!-- Custom CSS -->
            <link href="css/logo-nav.css" rel="stylesheet">

            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->

        </head>

<?php

    }

if ($section == "pre_content") {

?>


<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./">
                    <img src="./img/logo.png" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="./login.php">Sign In</a>
                    </li>
                    <li>
                        <a href="./join.php">Register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
<div class="container">
    <div class="row">
    <div class="col-lg-12">

<?php

}

if ($section == "post_content") {

?>

    </div>
    </div>
</div>
    <!-- /.container -->

<?php

}

    if ($section == "footer") {

?>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        </body>

        </html>


<?php

    }
}


//set site variable

//create SocialSql object

    $conn = new SocialSql();


?>

