<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 

    "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Jotorres Login Form</title>
</head>
<body>
    <form method="post" action="validate_login.php" >
        <table border="1" >
            <tr>
                <td><label for="users_email">Email</label></td>
                <td><input type="text" 

                  name="users_email" id="users_email"></td>
            </tr>
            <tr>
                <td><label for="users_pass">Password</label></td>
                <td><input name="users_pass" 

                  type="password" id="users_pass"></input></td>
            </tr>
            <tr>
                <td><input type="submit" value="Submit"/>
                <td><input type="reset" value="Reset"/>
            </tr>
        </table>
    </form>
</body>
</html>