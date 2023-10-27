<?php
ob_start();
    session_start();
    if(!isset($_SESSION["login"]))
        header("location:index.php");

    $message="";

    if(count($_POST)>0){
        foreach ($_POST as $key=>$value){
            ${$key}=$value;
        }
    }
    
    
    if(isset($valider_Update)){
        $min=preg_match("#[a-z]#",$pass_update);
        $maj=preg_match("#[A-Z]#",$pass_update);
        $num=preg_match("#[0-9]#",$pass_update);
        if(!preg_match("#[a-zA-ZÄÅÇÉÑÖÜÂÊÁÀËÈÍÎÏÌÓÔÒÚÛÙáàâäãåçéèêëíìîïñóòôöõúùûü \-]+$#",$nom_update)) $message="invalide Last Name!";
        elseif(!preg_match("#[a-zA-ZÄÅÇÉÑÖÜÂÊÁÀËÈÍÎÏÌÓÔÒÚÛÙáàâäãåçéèêëíìîïñóòôöõúùûü \-]+$#",$prenom_update)) $message=" invalide First name!";
        elseif(!preg_match("#^\w{4,10}$#",$login_update)) $message="invalid Login!";
        elseif($min+$maj+$num!=3) $message="Invalid password!";
        elseif($pass_update!=$rpass_update) $message="Non-identical passwords!";
        else{
            include("connexion.php");

        $login_check = $pdo->prepare(" select id from users where login=? ");
        $login_check->execute(array($login_update));
        $existing_user = $login_check->fetch(PDO::FETCH_ASSOC);

        if (!$existing_user || $login_update==$_SESSION['user_login']){
            $update = $pdo->prepare("update users set nom=?, prenom=?, login=?, pass=? where login=?");
            $update->execute(array($nom_update, $prenom_update, $login_update, md5($pass_update), $_SESSION['user_login']));

            $_SESSION["nomPrenom"] = $nom_update . " " . $prenom_update;

            $_SESSION['user_nom']=$nom_update;
            $_SESSION['user_prenom']=$prenom_update;
            $_SESSION['user_login']=$login_update;

            $message = "Profile updated successfully!";
            header("location:home.php");

        }  else{
            $message = "Login already exists!";
        }  

    }
}

    if (isset($Yes)) {
        include("connexion.php");
        $login_check = $pdo->prepare("delete from users where login=? ");
        $login_check->execute(array($_SESSION['user_login']));
        $_SESSION['delete_acount']="ok";
        unset($_SESSION["login"]);//delete logon var 
        header("location:deconnexion.php");
    }
    if (isset($No))
        header("location:changeinfo.php");
ob_end_flush(); // Envoie la sortie mise en mémoire tampon

?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/singup.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">
        <div class="container a-container" id="a-container">
            <!--inscription------------------------------------------->
            <form class="form" id="a-form"  action="" name="fo" method="post">
                <h2 class="form_title title">Change Informations</h2>

                <input class="form__input" type="text" placeholder="New Last Name" name="nom_update" value="<?=@$_SESSION['user_nom']?>" required>
                <input class="form__input" type="text" placeholder="New First Name" name="prenom_update" value="<?=@$_SESSION['user_prenom']?>" required>
                <input class="form__input" type="text" placeholder="New Login" name="login_update" value="<?=@$_SESSION['user_login']?>" required>
                <input class="form__input" type="password" placeholder="New Password" name="pass_update" required>
                <input class="form__input" type="password" placeholder="confirmation the New Password" name="rpass_update" required>
                <button class="form__button  glow-on-hover " type="submit" style="margin-top: 20px;" name="valider_Update">Update</button>
                <button class="form__button  glow-on-hover " type="submit" style="margin-top: 14px;width: 130px;height: 30px; font-size:15px" name="Delete_acount">Delete acount</button>

                <!-- message-->
                <?php if(!empty($message)){ ?>
                    <div class="erreur" style="color: red"><?=$message?></div>
                <?php }?>
            </form>

           
        </div>


        <!--------------------------------------------->
        <div class="switch" id="switch-cnt">

            <div class="switch__circle"></div>
            <div class="switch__circle switch__circle--t"></div>

            <div class="switch__container" id="switch-c1">
            <a href=""><img src="./images/logo1.png" alt=""  height="40" width="250" ></a>
                <h2 class="switch__title ">Change Informations</h2>
                <p class="switch__description description">When you change your information, you will be redirected to the page</p>
                <a href="home.php"><button class="glow-on-hover " style="margin-top: 20px;">Cancul</button></a>
                <?php if(isset($Delete_acount)){ ?>

                    <form class="form" id="a-form"  action="" name="fo" method="post">
                    <p style="margin-top:20px;font-size:14px">Are you sure you want to delete your acount:</p>
                    <div class="row1">
                        <button class="col-5 form__button  glow-on-hover " type="submit" style="margin-top: 20px;width: 100px;height: 40px" name="Yes">Yes</button>
                        <button class="col-5 form__button  glow-on-hover " type="submit" style="margin-top: 20px;width: 100px;height: 40px" name="No">No</button>
                    </div>

                    </form>
                <?php }?>
            </div>

            
        </div>
    </div>
    

    <script src="js/singup.js"></script>
</body>

</html>