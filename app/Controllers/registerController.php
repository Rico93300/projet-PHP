<?php







if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {


    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userQuery = "SELECT* FROM user WHERE email= :email";
    $userStatement = $mysqlClient->prepare($userQuery);
    $userStatement->bindParam(':email', $email);

    $userStatement->execute();
    $user = $userStatement->fetch();

    if ($user) {
        $error = "Email deja existant";
    } else {

        // $passwordValid = preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $password);
        // if ($passwordValid) {
        $userQuery = "INSERT INTO user(name,email,password) VALUE (:name, :email, :password)";
        $userStatement = $mysqlClient->prepare($userQuery);
        $userStatement->bindParam(':name', $name);
        $userStatement->bindParam(':email', $email);
        $userStatement->bindParam(':password', $password);
        $userStatement->execute();
        redirectToRoute('/login');
        // } else {
        //     $error = "- at least 8 characters <br>
        //     - at least one character in uppercase <br>
        //     - at lest one character in lowercase <br>
        //     - at least one digit <br>
        //     - at least one special character <br>";
        // };
    };
}










require_once(__DIR__ . "/../views/register.view.php");
