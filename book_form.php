<?php
     $connection = mysqli_connect('localhost','root','','book_db');
     if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $person = $_POST['person'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];

        $request = "insert into book_form(name, email, phone, address, location, person, arrivals, leaving) values ('$name','$email','$phone','$address','$location','$person','$arrivals','$leaving')";

        mysqli_query($connection, $request);
        header('location:book.php');
     }
     else{
        echo 'something went wrong try again';
     }

?>