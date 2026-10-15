<?php
    function whoami() {
        $name = $_POST["name"] ?? "";
        $age = $_POST["age"] ?? "";
        $curriculum = $_POST["curriculum"] ?? "";

        if ($curriculum) {
            if ($name and $age) {
            print("Hi, my name is $name and I'm $age years old. I'm a student of $curriculum.");
            }
            elseif (!$name and $age) {
                print("Hi, I have no name and I'm $age years old. I'm a student of $curriculum.");
            }
            elseif ($name and !$age) {
                print("Hi, my name is $name. I'm a student of $curriculum.");
            }
            elseif (!$name and !$age) {
                print("Hi, I have no name and I have always existed. I'm a student of $curriculum.");
            }
        }

        else {
            if ($name and $age) {
                print("Hi, my name is $name and I'm $age years old.");
            }
            elseif (!$name and $age) {
                print("Hi, I have no name and I'm $age years old.");
            }
            elseif ($name and !$age) {
                print("Hi, my name is $name.");
            }
            elseif (!$name and !$age) {
                print("Hi, I have no name and I have always existed.");
            }
        }       
    }

    function form_is_submitted() {
        if ($_POST["submit"] ?? "") {
            return true;
        }
        else {
            return false;
        }
        
    }