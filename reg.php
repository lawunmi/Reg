<?php
    if(isset($_POST['submit'])){ 
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phoneno = $_POST['phoneno'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $conf_password = $_POST['conf_password'];

        //Password confirmation
        if($_POST['conf_password'] !=  $_POST['password']){
            echo 'password does not match';
        }else{
            
            $arrayReg = [
                'first_name' => $first_name,
                'last_name' => $last_name,
                'email' => $email,
                'phoneno' => $phoneno,
                'username' => $username,
                'password' => $password,
                'conf_password' => $conf_password,
            ];
    
       // echo $first_name. $last_name. $email. $phoneno. $username. $password. $conf_password;

        //encode array to json
        $jsonReg = json_encode(array('data' => $arrayReg));

        //write json to file
        file_put_contents('files/reg.json', $jsonReg);
    }
   }
?>