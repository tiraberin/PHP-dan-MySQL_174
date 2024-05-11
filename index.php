<?php
$host="localhost"; 
$username="root"; 
$password=""; 
$database = "pertemuan7";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "erin" && $password == "mochigula") {
        $vusername=$_POST['username']; 
        $vpasword=$_POST['password']; 
        $insert_query = "INSERT INTO login set username='$vusername', pasword='$vpasword'";
        mysqli_query($conn, $insert_query);
        header("Location: cetak.php");
        exit;
    } else {
        $error = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if(isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form action="" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>



