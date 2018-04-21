<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Teacher</title>
    <link rel="stylesheet" href="include/style.css">
</head>
<body>

<h2>Add Teacher</h2>
<form action="include/add.php" method="post">
    <?php
        if(isset($_GET['first'])){
            $first = $_GET['first'];
            echo '<input type="text" name="first" placeholder="First Name"  value="'.$first.'">';
        }
        else{
            echo '<input type="text" name="first" placeholder="First Name">';
        }

        if(isset($_GET['last'])){
            $last = $_GET['last'];
            echo '<input type="text" name="last" placeholder="Last Name" value="'.$last.'">';
        }
        else{
            echo '<input type="text" name="last" placeholder="Last Name">';
        }

        if(isset($_GET['email'])){
            $email = $_GET['email'];
            echo '<input type="text" name="email" placeholder="E-mail" value="'.$email.'">';
        }
        else{
            echo '<input type="text" name="email" placeholder="E-mail">';
        }

        if(isset($_GET['phone'])){
            $phone = $_GET['phone'];
            echo '<input type="tel" name="phone" placeholder="Phone Number" value="'.$phone.'">';
        }
        else{
            echo '<input type="tel" name="phone" placeholder="Phone Number">';

        }

        if(isset($_GET['leave'])){
            $leave = $_GET['leave'];
            echo '<input type="number" name="leave" placeholder="Available leave" value="'.$leave.'">';
        }
        else{
            echo '<input type="number" name="leave" placeholder="Available leave">';

        }

    ?>
    <input type="submit" name="submit" value="Submit">

</form>

<?php
    if (!isset($_GET['add'])){
        exit();
    }
    else {
        $check = $_GET['add'];

        if ($check == 'error'){
            echo "<p class='error'>Please don't try to cheat!</p>";

        } elseif ($check == 'empty'){
            echo "<p class = 'error'>Please fill in all the details!</p>";

        }elseif ($check == 'invalidemail'){
            echo "<p class = 'error'>Please enter a valid email address!</p>";

        }elseif ($check == 'successful'){
            echo "<p class = 'success'>You have been registered!</p>";
        }
    }


?>
</body>
</html>
