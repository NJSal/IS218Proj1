<?php
    include("questionform.html");

    $name = filer_input(INPUT_POST, 'name');
    $about = filer_input(INPUT_POST, 'about');
    $skills = filer_input(INPUT_POST, 'skill');

    $name = (isset($name)) ? $name : '';
    $about = (isset($about)) ? $about: '';
    $skills = (isset($skills)) ? $skills : '';


    $skillset = explode(',' , $skills);
    foreach($skillset as $value)
    {
        echo $value.PHP_EOL;
    }

    $namelength = strlen($name);
    if($namelength < 3) {echo "invalid name length: ".$name." is not at least 3 characters long"; exit();}
    if($empty($name)) {print "you must enter your name"; exit();}

    $aboutlength = strlen($about);
    if($aboutlength > 500) {print "the number of words you entered is > 500"; exit();}
    if($empty($about)) {print "you the the second field empty"; exit();}

    /*
    if(isset($_POST['submit'])) {
        $checked_count = count($_POST['check_list']);
        if (!empty($_POST['skill']) && count($checked_count) >= 2) {
            $total_checked = count($_POST['skill'] as $selected){
                echo "<p>" . $selected . "</p>";
            }
        } else {
            echo "<b>Select at leas 2 options</b>";
        }
    }
    */

?>