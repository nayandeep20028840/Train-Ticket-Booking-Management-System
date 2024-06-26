<?php
require('connection.php');

session_start();

#for login
if (isset($_POST['login'])) {
    $query = "SELECT * FROM `users` WHERE Email ='$_POST[emailid]' ";
    $result = mysqli_query($con, $query);
    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $result_fetch = mysqli_fetch_assoc($result);
            if (password_verify($_POST['passwordd'], $result_fetch['password'])) {
                $_SESSION['logged_in'] = true;
                $_SESSION['username'] = $result_fetch['first_name'];
                header("location: index.php");
            } else {
                echo "<script>
            alert('Incorrect password');
            window.location.href='index.php';
            </script>
            ";
            }
        } else {
            echo "<script>
            alert('Email or Username not registered');
            window.location.href='index.php';
            </script>
            ";
        }
    } else {
        echo "<script>
            alert('cannot run query');
            window.location.href='index.php';
            </script>
            ";
    }
}


#register
if (isset($_POST['register'])) {
    $user_exist_query = "SELECT * FROM `users` Where Email ='$_POST[email]' ";
    $result = mysqli_query($con, $user_exist_query);
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<script>
            alert('Email already registered');
            window.location.href='index.php';
            </script>
            ";
        } else {
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $query = "INSERT INTO `users`(`Email`, `first_name`, `Last_name`, `phone_number`, `password`, `date_of_birth`, `pincode`) VALUES ('$_POST[email]','$_POST[firstname]','$_POST[lastname]','$_POST[phonenumber]','$password','$_POST[dateofbirth]','$_POST[pincode]')";

            if (mysqli_query($con, $query)) {
                echo "<script>
            alert('Registered successfully');
            window.location.href='index.php';
            </script>
            ";
            } else {
                echo "<script>
            alert('cannot run query');
            window.location.href='index.php';
            </script>
            ";
            }
        }
    } else {
        echo "<script>
            alert('cannot run    query');
            window.location.href='index.php';
            </script>
            ";
    }
}





#registertion of passangers for ticket durg
if (isset($_POST['passg'])) {
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        $sql = "SELECT * FROM `durg`";
        $result = mysqli_query($con, $sql);
        $seat_no = mysqli_num_rows(mysqli_query($con, $sql)) + 1;

        $query = "INSERT INTO `durg`(`Seat No`, `Name`, `Age`, `Gender`, `Email`,`Source`,`Destination`,`Date`) VALUES ('$seat_no','$_POST[fname]','$_POST[uage]','$_POST[gender]','$_POST[eemail]','$_POST[src]','$_POST[dest]','$_POST[datee]')";

        if (mysqli_query($con, $query)) {
            echo "<script>
            alert('Ticket Booked Successfully');
            window.location.href='index.php';
            </script>
            ";
        } else {
            echo "<script>
            alert('cannot run query');
            window.location.href='index.php';
            </script>
            ";
        }
    } else {
        echo "<script>
        alert('Login first');
        window.location.href='index.php';
        </script>
        ";
    }
}

if (isset($_POST['passg'])) {
    $sql = "SELECT * FROM `durg`";
    $result = mysqli_query($con, $sql);
    //if (mysqli_query($con, $result)) {
    $seat_no = mysqli_num_rows(mysqli_query($con, $sql));

    $status = "Confirmed";
    $to = "$_POST[eemail]";
    $subject = "Ticket Confirmation";
    $body = "<!DOCTYPE html>
        <html>
        <head>
        </head>
        <body>
        <table rules='all' border='1' style='border-color: #666;' cellpadding='10'>
        <tr style='background: #eee;'><td colspan='2'><strong>Ticket Confirmation Details</strong> </td></tr>
        <tr>
            <td><strong>Name:</strong></td>
            <td>" . $_POST['fname'] . "</td>
        </tr>
        <tr>
            <td><strong>Age:</strong></td>
            <td>" . $_POST['uage'] . "</td>
        </tr>
        <tr>
            <td><strong>Gender:</strong></td>
            <td>" . $_POST['gender'] . "</td>
        </tr>
        <tr>
            <td><strong>Seat NO.:</strong></td>
            <td>" . $seat_no . "</td>
        </tr>
        <tr>
            <td><strong>Source:</strong></td>
            <td>" . $_POST['src'] . "</td>
        </tr>
        <tr>
            <td><strong>Destination:</strong></td>
            <td>" . $_POST['dest'] . "</td>
        </tr>
        <tr>
            <td><strong>Date:</strong></td>
            <td>" . $_POST['datee'] . "</td>
        </tr>
        <tr>
            <td><strong>Status:</strong></td>
            <td>" . $status . "</td>
        </tr>
        </table>
        </body>
        </html>";
    $from = "vipulguru2002@gmail.com";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= "From:" . $from . "\r\n";


    if (mail($to, $subject, $body, $headers)) {
        echo "<script>
            alert('Email sent successfully');
            window.location.href='index.php';
            </script>";
    } else {
        echo "Mailer error";
    }
}


#registertion of passangers for ticket sarnath
if (isset($_POST['passgs'])) {
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
        $sql = "SELECT * FROM `sarnath`";
        $result = mysqli_query($con, $sql);
        $seat_no = mysqli_num_rows(mysqli_query($con, $sql)) + 1;

        $query = "INSERT INTO `sarnath`(`Seat No`, `Name`, `Age`, `Gender`, `Email`,`Source`,`Destination`,`Date`) VALUES ('$seat_no','$_POST[fnames]','$_POST[uages]','$_POST[genders]','$_POST[eemails]','$_POST[srcs]','$_POST[dests]','$_POST[datees]')";

        if (mysqli_query($con, $query)) {
            echo "<script>
            alert('Ticket Booked Successfully');
            window.location.href='index.php';
            </script>
            ";
        } else {
            echo "<script>
            alert('cannot run query');
            window.location.href='index.php';
            </script>
            ";
        }
    } else {
        echo "<script>
        alert('Login first');
        window.location.href='index.php';
        </script>
        ";
    }
}

if (isset($_POST['passgs'])) {
    $sql = "SELECT * FROM `sarnath`";
    $result = mysqli_query($con, $sql);
    //if (mysqli_query($con, $result)) {
    $seat_no = mysqli_num_rows(mysqli_query($con, $sql));

    $status = "Confirmed";
    $to = "$_POST[eemails]";
    $subject = "Ticket Confirmation";
    $body = "<!DOCTYPE html>
        <html>
        <head>
        </head>
        <body>
        <table rules='all' border='1' style='border-color: #666;' cellpadding='10'>
        <tr style='background: #eee;'><td colspan='2'><strong>Passenger Ticket details</strong> </td></tr>
        <tr>
            <td><strong>Name:</strong></td>
            <td>" . $_POST['fnames'] . "</td>
        </tr>
        <tr>
            <td><strong>Age:</strong></td>
            <td>" . $_POST['uages'] . "</td>
        </tr>
        <tr>
            <td><strong>Gender:</strong></td>
            <td>" . $_POST['genders'] . "</td>
        </tr>
        <tr>
            <td><strong>Seat NO.:</strong></td>
            <td>" . $seat_no . "</td>
        </tr>
        <tr>
            <td><strong>Status:</strong></td>
            <td>" . $status . "</td>
        </tr>
        <tr>
            <td><strong>Source:</strong></td>
            <td>" . $_POST['srcs'] . "</td>
        </tr>
        <tr>
            <td><strong>Destination:</strong></td>
            <td>" . $_POST['dests'] . "</td>
        </tr>
        <tr>
            <td><strong>Date:</strong></td>
            <td>" . $_POST['datees'] . "</td>
        </tr>
        </table>
        </body>
        </html>";
    $from = "vipulguru2002@gmail.com";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    $headers .= "From:" . $from . "\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>
            alert('Email sent successfully');
            window.location.href='index.php';
            </script>";
    } else {
        echo "Mailer error";
    }
}
