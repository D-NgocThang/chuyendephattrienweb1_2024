<?php
// Start the session
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$_id = NULL;

function hashId($id)
{
    return md5($id);
}

if (!empty($_GET['id'])) {
    // $_id = $_GET['id'];
    $hashID = $_GET['id'];
    $alluser = $userModel->getUsers();

    foreach ($alluser as $t) {
        if (hashId($t['id']) == $hashID) {
            $_id = $t['id'];
            $user = $userModel->findUserById($_id); //Update existing user
            break;
        }
    }
}


if (!empty($_POST['submit'])) {

    if (empty($_POST['name'])) {
        $errors[] = "Name is required.";
    } elseif (!preg_match('/^[a-zA-Z0-9]{5,15}$/', $_POST['name'])) {
        $errors[] = "Tên phải dài từ 5-15 ký tự và chỉ chứa chữ cái và số.";
    }

    // Validate password
    if (empty($_POST['password'])) {
        $errors[] = "Password is required.";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[~!@#$%^&*()]).{5,10}$/', $_POST['password'])) {
        $errors[] = "Mật khẩu phải dài từ 5-10 ký tự và bao gồm ít nhất một chữ cái thường, một chữ cái viết hoa, một số và một ký tự đặc biệt (~!@#$%^&*()).";
    }


    if (empty($errors)) {
        if (!empty($_id)) {
            $userModel->updateUser($_POST);
        } else {
            $userModel->insertUser($_POST);
        }
        header('location: list_users.php');
        exit();
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>

<body>
    <?php include 'views/header.php' ?>
    <div class="container">

        <?php if ($user || !isset($_id)) { ?>
            <div class="alert alert-warning" role="alert">
                User form
            </div>

            <!-- Display validation errors -->
            <?php if (!empty($errors)) { ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($errors as $error) { ?>
                            <li><?php echo $error; ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>

            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $_id ?>">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" name="name" placeholder="Name" value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>'>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>

                <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-success" role="alert">
                User not found!
            </div>
        <?php } ?>
    </div>
</body>

</html>