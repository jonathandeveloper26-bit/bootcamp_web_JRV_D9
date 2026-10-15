<?php
    function whoami() {

        $name = $_POST["name"] ?? "";
        $age = $_POST["age"] ?? "";

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