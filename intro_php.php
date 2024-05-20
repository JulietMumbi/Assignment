<?php
    print "This is the first lesson";
    //Displaying a sentence or a string

    print "<br>";

    echo "Today is Monday";

    print "<br>";

    print 1586; // this is an integer

    print "<br>";

    print "4564"; //this is a string

    print '<br>';

    print "15 + 45"; //this is a string

    print '<br>';

    print 15 + 45 ; //this will display the result of the operation

    //php will help us display dynamic content(time/space)
    print '<br>';

    print date ('l');//Display the current week day

    print '<br>';

    print date ('l', strtotime("tomorrow"));//Display the weekday of tomorrow

    print '<br>';

   print date('jS F Y, l');

    //print date ("jS F Y, l" strtotime("+5 months"));

    print '<br>';

    print date('l, jS F Y H:i:s');

    print '<br>';

    print "Today is: ".date('l, F jS Y');

    print '<br>';

    $fname = "Alex Okama ";
    //Declaration of a variable or a string [or a (group of) word]

    $yob = 2006; //Creating (declaring) a PHP variable
    $user_dob = $yob . "-05-21";

    print $fname;
    print '<br>';
    
    //print $user_dob;

    print '<br>';
    $age = date('Y') - $yob;

    $birth_date = new DateTime($user_dob);
    $today = new Datetime("today");

    $interval = $birth_date->diff($today);

    //echo '<pre>';
   // print_r($interval);
    //echo '</pre';

    print $fname . "was born on " .date('l, F jS Y', strtotime("$user_dob"));

    print '<br>';

    print $fname . " is " .$interval->y ." years old ". $interval->m ." months, and " . $interval->d . " days";

    print '<br>';

    $adult_age = 18;

    if($age >= $adult_age){
        print $fname . " is an adult ";//event in block will happen if the condition is true
    }else{
        print $fname . "is NOT an adult ";//event in block will happen if the condition is false
    }

    print '<br>';

    //Variable characteristics

    $lname = 'Okama'; //$lname ><$lname

    print "His last name is $lname";

    print '<br>';

    print 'His last name is ' .$lname;

    print '<br>';

    $perso['lname'] = "Okama";
    print $perso['lname'];

    print '<br>';
    define ('lname', 'Okama');
    print lname;

    ?>