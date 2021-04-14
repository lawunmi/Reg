<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
<body style=" height:100vh; width:100vw; display: flex; align-items: center; overflow:hidden;">
    <div style="margin:0 auto; height:100px; width:300px; border-radius:5px; background-color:#f0f0f0; padding:10px;">
        <form action="logval.php" method="post">
            <span style="margin-left:55px;"><input type="text" name="username"placeholder="username"><br><br></span>
            <span style="margin-left:55px;"><input type="password" name="password"placeholder="password"><br><br></span>
            <p style="display:inline; font-size: 12px; color:red">Not Registered yet?&nbsp;&nbsp;<a href="index.php">Sign Up</a></p>
            <span style="float:right"><button type="submit" name="login">Login</button></span>
        </form>
    </div>
</body>
</html>