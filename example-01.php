<?php
    $password = $_SERVER['argv'][1];

    // Multple Regular Expressions
    // if(
    //     preg_match("/[A-Z]/", $password) &&
    //     preg_match("/\d/", $password) &&
    //     preg_match("/[\$@&]/", $password)
    // ) {
    //     printf("Matched constrains\n");
    // } else {
    //     printf("Not matched constrains\n");
    // }

    // Using Lookahead
    if(preg_match("/(?=.*[A-Z])(?=.*\d)(?=.*[\$@&])/", $password)) {
        printf("Matched constrains\n");
    } else {
        printf("Not matched constrains\n");
    }
