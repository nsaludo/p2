<?php

    /* Get list of words from the words_list.json file and save it in an array */
    $json_data = file_get_contents("data/words_list.json");
    $words_array = json_decode($json_data, true);
    $random_words=$words_array["words"];
    $words_max = count($random_words) - 1;

    /* Initialize variables */
    $separator_array= array("~", "#", "$", "%", "&", ".", "*", "=");
    $err_number_selector = "";
    $err_add_number = "";
    $err_add_separator = "";
    $err_set_camelcase = "";
    $password="";
    $number_of_words = 4;
    $include_number = "no";
    $include_separator = "no";
    $set_camelcase = "no";

    /* function to validate GET fields */
    function f_check_isset($var_name,$data_type,$default_value,&$error_message) {

        if (isset($_GET[$var_name])) {
            $var_value = $_GET[$var_name];
            /* Validate value according to data type */
            if ($data_type == "number" && !is_numeric($var_value) ) {
                $error_message = "Number is required";
            } elseif ($data_type == "checkbox" && $var_value != "yes" && $var_value != "no") {
                $error_message = "Invalid selection";
            } else {
                return $var_value;
            }
        } else {
            return $default_value;
        }

    }

    /* function to check and set camelcase */
    function f_set_camelcase($word) {
        global $set_camelcase;
        if ($set_camelcase == "yes") {
            $word = ucfirst($word);
        }
        return $word;
    }

    /* Set variable values from _GET */
    $number_of_words = f_check_isset("number_of_words","number",4,$err_number_selector);
    $include_number = f_check_isset("include_number","checkbox","no",$err_add_number);
    $include_separator = f_check_isset("include_separator","checkbox","no",$err_add_separator);
    $set_camelcase = f_check_isset("set_camelcase","checkbox","no",$err_set_camelcase);

    /* Set the word separator */
    if ($include_separator == "yes") {
        $separator = $separator_array[rand(0,5)];
    } else {
        $separator = "";
    }

    /* Process _GET */

    for ($i = 0; $i < $number_of_words; $i++) {

        if ($i == 0) {
            if ($number_of_words == 1) {
                $password = f_set_camelcase($random_words[rand(0, $words_max)]) . $separator;
            } else {
                $password = f_set_camelcase($random_words[rand(0, $words_max)]);
            }
        } else {
            $password = $password . $separator.f_set_camelcase($random_words[rand(0, $words_max)]);
        }
    }

    /* Add number at the end if needed */
    if ($include_number == "yes") {
        $password = $password.rand(0,9);
    }
?>
