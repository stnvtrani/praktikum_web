<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body style="font-family: sans-serif; background-color: #fdfaf2; padding: 50px; display: flex; justify-content: center;">

<form enctype="multipart/form-data" action="proses_login.php" method="post" 
      style="background-color: #ffffff; padding: 30px; border: 1px solid #f4e6ce;">
    
    <h3 style="color: #25386e; margin-top: 0; margin-bottom: 20px; text-align: center;">Silahkan Login</h3>

    Username : <br>
    <input type="text" name="username" 
           style="border: 1px solid #cbd5e1; border-radius: 4px; padding: 6px 10px; width: 200px; margin-top: 5px; outline-color: #3b82f6;"><br><br>
    
    Password : <br>
    <input type= "password" name = "password" 
           style="border: 1px solid #cbd5e1; border-radius: 4px; padding: 6px 10px; width: 200px; margin-top: 5px; outline-color: #3b82f6;"><br><br>

    <input type="submit" value="Login" 
           style="background-color: #739af0; color: white; border: none; border-radius: 4px; padding: 8px 15px; cursor: pointer; width: 100%; font-weight: bold;">
</form>

</body>
</html>