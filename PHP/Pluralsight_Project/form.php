<?php

    // Initialize our variables
    $name = '';
    $password = '';
    $gender = '';
    $color = '';
    $langauges = [];
    $comments = '';
    $tc = '';

    if (isset($_POST['submit'])) {
        // Set value to POST if they were filled out in form
        if (isset($_POST['name'])) {
            $name=$_POST['name'];
        }
        if (isset($_POST['password'])) {
            $password=$_POST['password'];
        }
        if (isset($_POST['gender'])) {
            $gender=$_POST['gender'];
        }
        if (isset($_POST['color'])) {
            $color=$_POST['color'];
        }
        if (isset($_POST['languages'])) {
            $languages=$_POST['langues'];
        }
        if (isset($_POST['comments'])) {
            $comments=$_POST['comments'];
        }
        if (isset($_POST['tc'])) {
            $tc=$_POST['tc'];
        }

        printf('User name: %s
        <br>Password: %s
        <br>Gender: %s
        <br>Color: %s
        <br>Language(s): %s
        <br>Comments: %s
        <br>T&amp;C: %s',
        htmlspecialchars($name, ENT_QUOTES),
        htmlspecialchars($password, ENT_QUOTES),
        htmlspecialchars($gender, ENT_QUOTES),
        htmlspecialchars($color, ENT_QUOTES),
        htmlspecialchars(implode(' ', $languages), ENT_QUOTES),
        htmlspecialchars($comments, ENT_QUOTES),
        htmlspecialchars($tc, ENT_QUOTES));
    }



?>

<form action="" method='post'>
    User name: <input type='text' name='name'><br>
    Password: <input type='password' name='pwd'><br>
    Gender: <input type='radio' name='gender' value='m'>Male
            <input type='radio' name='gender' value='f'>Female
            <input type='radio' name='gender' value='o'>Other
    Favorite Color:
            <select name='color'>
                <option value=''>Please select</option>
                <option value='#f00'>Red</option>
                <option value='#0f0'>Blue</option>
                <option value='#00f'>Green</option>
            </select><br>
    Languages spoken:
        <select name='languages[]' multiple size='4'>
            <option value='en'>English</option>
            <option value='es'>Spanish</option>
            <option value='fr'>French</option>
            <option value='it'>Italian</option>
        </select><br>
    Comments: <textarea name='comments'></textarea><br>
        <input type='checkbox' name='tc' value='ok'>
            I accept the T&amp;C<br>
    <input type='submit' name='submit' value='Register'>
</form>