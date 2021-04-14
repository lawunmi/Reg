<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
<body>
    <span style="float:right"><a href="login.php">Log Out</a></span>
    
<?php 
    //fetch json from file
    $arrayLog = file_get_contents('files/reg.json');

    //decode json to array
    $jsonLog = json_decode($arrayLog, true);

    //Getting username and password that already exist in the file
    $usern = $jsonLog['data']['username'];
    $passw = $jsonLog['data']['password'];

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username != $usern){
            echo "Username does not exist";
        }
        elseif($password != $passw){
            echo "Username and Password does not match";
        }
        else{
            $arrLog = [
                'username' => $username,
                'password' => $password,
            ];

            //encode array to json
            $jsonLogin = json_encode(array('data' => $arrLog));
        
            //write json to file
            file_put_contents('files/log.json', $jsonLogin);
            echo "Welcome $username";
            //echo "<h3>Welcome<h3>&nbsp;&nbsp;$username";
        }
    }
?>
</body>
</html>