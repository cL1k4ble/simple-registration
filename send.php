<?php

if(isset($_POST['name'])||(isset($_POST['age'])||(isset($_POST['gender'])||
(isset($_POST['contact'])||(isset($_POST['address'])||(isset($_POST['prevDent']))))))){
        include 'form.php';



       function validate($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
        }

        $name = validate($_POST['name']);
        $age = validate($_POST['age']);
        $gender = validate($_POST['gender']);
        $contact = validate($_POST['contact']);
        $address = validate($_POST['address']);
        $prevDent = validate($_POST['prevDent']);
        


        if (empty($name) || empty($age) || empty($gender)|| empty($contact)|| empty($address)|| empty($prevDent)){
                header("Location: index.html");    
        }else {

                $sql = "INSERT INTO test (name, age, gender, contact, address, prevDentist) VALUE('$name','$age',
                '$gender','$contact','$address','$prevDent')";

                $res = mysqli_query($conn, $sql);

                if ($res){
                        echo "Your message was sent successfully!";
                
                }else{
                        echo "your message could not be sent!";
                }
        }

}else {
        header("Location: index.html");
}