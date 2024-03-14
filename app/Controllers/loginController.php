<?php
if (isset($_SESSION['user'])){
    redirectToRoute('/');
}
if (isset($_POST["email"]) && isset($_POST["password"])) {
    
    
    $email = $_POST['email'];
    $password = $_POST['password'];

   


   
    $userQuery = "SELECT* FROM user WHERE email= :email";
    $userStatement = $mysqlClient->prepare($userQuery);
    $userStatement->bindParam(':email', $email);

    $userStatement->execute();
    $user = $userStatement->fetch();

    if ($user) {
        if($password == $user['password']){
            $_SESSION['user']= [
        'id'=> uniqid(),
        'email'=> $user["email"],
        'admin' => $user["admin"],
        'idUser' => $user["id"],
        ];
        redirectToRoute('/');

        }else{
            $error = "incorrect Email or password" ;
            require_once(__DIR__ . "/../views/register.view.php");
            exit;
        }
    } else {
        
        $error = "incorrect Email or password" ;
            
            
            
            }
        }
 
    require_once(__DIR__ . "/../views/login.view.php");
