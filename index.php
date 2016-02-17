<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>

<!DOCTYPE html>
<html>
<head>
    <title>Nora Saludo P2 DWA xkcd password generator</title>

    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/mystyles.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

    <!--Include php script to process _POST-->
    <?php require "logic.php"; ?>

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" id="home-navbar">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="" class="navbar-brand">dwa15</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="http://p1.donengs.com">Home</a>
                    <li><a href="http://p3.donengs.com">Lorem Ipsum Generator</a>
                    <li><a href="http://p3.donengs.com">Random User Generator</a>
                    <li><a href="http://p4.donengs.com">Final Project</a>
                </ul>
            </div>
        </div>
    </nav>
    <!--End Navbar-->

    <header>
        <div class="container">
            <div class="jumbotron">
                <div class="row">
                    <h3 class="project_title">xkcd Style Password Generator</h3>
                    <div class="box_white">
                        <h4><?php echo $password?><h4>
                    </div>
                    <p class="description"> Tired of gibberish passwords that are hard to remember?  Try this <a href="http://xkcd.com/936/">xkcd strip</a> inspired password generator that uses common english words that are easier to remember but hard to guess. </p>
                </div> <!--End row-->
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6" id="password_options">
                <form class="form-horizontal" method="POST" action="index.php">
                    <!-- Number of words -->
                    <div class="form-group row form-group-md">
                        <div class="col-xs-1"></div>
                        <label for="number_of_words" class="col-xs-5 control-label">Number of Words</label>
                        <div class="col-xs-4">
                            <select class="form-control" name="number_of_words">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4" selected>4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                            </select>
                        </div>
                        <div class="col-xs-2"></div>
                    </div>

                    <!-- Add a Number -->
                    <div class="form-group row form-group-md" >
                        <div class="col-xs-1"></div>
                        <label for="include_number" class="col-xs-6 control-label">Add a number</label>
                        <div class="col-xs-2">
                            <input type="checkbox" class="form-control" name="include_number" value="yes" >
                        </div>
                        <div class="col-xs-1"></div>
                    </div>

                    <!-- Add a separator -->
                    <div class="form-group row form-group-md" >
                        <div class="col-xs-1"></div>
                        <label for="include_separator" class="col-xs-6 control-label">Add a separator</label>
                        <div class="col-xs-2">
                            <input type="checkbox" class="form-control" name="include_separator" value="yes" >
                        </div>
                        <div class="col-xs-1"></div>
                    </div>

                    <!-- Set CamelCase -->
                    <div class="form-group row form-group-md" >
                        <div class="col-xs-1"></div>
                        <label for="set_camelcase" class="col-xs-6 control-label">Uppercase first letter</label>
                        <div class="col-xs-2">
                            <input type="checkbox" class="form-control" name="set_camelcase" value="yes" >
                        </div>
                        <div class="col-xs-1"></div>
                    </div>

                    <div class="form-group text-center">
                        <input id="get_password" type="submit" class="btn btn-default btn-md" value="Get Me A Password!">
                    </div>
                </form>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
        <br>
    </div>

    <footer>Copyright &copy; 2016 Nora Saludo</footer>

</body>
</html>

