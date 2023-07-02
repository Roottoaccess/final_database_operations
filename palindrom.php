<?php

    $input = readline("Enter the number or the word you want to check: ");

        $updated_input = strrev($input);
        # Checking with the conditional statement
            if($input == $updated_input){
                echo "$input is palindrom !";
            }
            else{
                echo "$input is not palindrom !";
            }
?>