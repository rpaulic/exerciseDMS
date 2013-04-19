<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Welcome</title>
</head>
<body>
    <?php include 'library/connect_db.php'; ?>
    
    <header>
        <p>Please, log into the Data Management System:</p>
    </header>

    <form name="input" action="" method="">
        <fieldset>
            <lebel>
                Username: <input type="text" name="user"><br />
            </lebel>
            <lebel>
                Password: <input type="password" name="pwd"><br />
            </lebel>
            <label>
                <input type="submit" value="Log in">
            </label>
        </fieldset>
    </form>

    <a href="/exerciseDMS/register.php">Not a member?</a>

    <footer></footer>
</body>
</html>
