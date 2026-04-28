<?php
session_start();

if (isset($_POST['submit'])) {
    $id         = $_REQUEST['id'];
    $username   = $_REQUEST['username'];
    $email      = $_REQUEST['email'];

    if ($username == "" || $email == "") {
        echo "Fields cannot be empty!";
        exit();
    }

    $users = $_SESSION['users'];

    for ($i = 0; $i < count($users); $i++) {
        if ($users[$i]['id'] == $id) {
            $users[$i]['username'] = $username;
            $users[$i]['email'] = $email;
            break;
        }
    }

    $_SESSION['users'] = $users;
?>

<html>
<head>
    <title>Update Status</title>
</head>
<body>
    <h3>Update Successful!</h3>
    
    <table border="1">
        <tr>
            <td>ID</td>
            <td><?=$id?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><?=$username?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?=$email?></td>
        </tr>
    </table>

    <br>
    <a href="../view/user_list.php">Back to User List</a>
</body>
</html>

<?php
} else {
    echo "Invalid request!";
}
?>