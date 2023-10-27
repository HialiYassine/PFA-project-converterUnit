<?php
ob_start();
    session_start();
    $message="";
    if(count($_POST)>0){
        foreach ($_POST as $key=>$value){
            ${$key}=$value;
        }
    }
    if(isset($valider_inscription)){
       $min=preg_match("#[a-z]#",$pass_inscription);
        $maj=preg_match("#[A-Z]#",$pass_inscription);
        $num=preg_match("#[0-9]#",$pass_inscription);
        if(!preg_match("#[a-zA-ZÄÅÇÉÑÖÜÂÊÁÀËÈÍÎÏÌÓÔÒÚÛÙáàâäãåçéèêëíìîïñóòôöõúùûü \-]+$#",$nom_inscription)) $message="invalide Last Name!";
        elseif(!preg_match("#[a-zA-ZÄÅÇÉÑÖÜÂÊÁÀËÈÍÎÏÌÓÔÒÚÛÙáàâäãåçéèêëíìîïñóòôöõúùûü \-]+$#",$prenom_inscription)) $message=" invalide First name!";
        elseif(!preg_match("#^\w{4,10}$#",$login_inscription)) $message="invalid Login!";
        elseif($min+$maj+$num!=3) $message="Invalid password!";
        elseif($pass_inscription!=$repass) $message="Non-identical passwords!";
        else{
            include("connexion.php");
            $sel=$pdo->prepare("select id from users where login=? limit 1");
            $sel->setFetchMode(PDO::FETCH_ASSOC);
            $sel->execute(array($login_inscription));
            $tab=$sel->fetchAll();
            if(count($tab)>0)
                $message="Login already exists!";
            else{
                $ins=$pdo->prepare("insert into users (date_c,nom,prenom,login,pass) values(now(),?,?,?,?)");
                $ins->execute(array($nom_inscription,$prenom_inscription,$login_inscription,md5($pass_inscription)));
                $_SESSION["login"]="Ok";
                $_SESSION["nomPrenom"]= $nom_inscription." ".$prenom_inscription; 
                $_SESSION['user_nom']=$nom_inscription;
                $_SESSION['user_prenom']=$prenom_inscription;
                $_SESSION['user_login']=$login_inscription;
                header("location:home.php");
                exit;
            }
        } 
    }
    if(isset($valider_login)){
        include("connexion.php");
        $sel=$pdo->prepare("select * from users where login=? and pass=? limit 1");
        $sel->setFetchMode(PDO::FETCH_ASSOC);
        $sel->execute(array($login_login,md5($pass_login)));
        $tab=$sel->fetchAll();
        if(count($tab)>0){
            $_SESSION["login"]="ok";
            $_SESSION["nomPrenom"]=strtoupper($tab[0]["nom"]." ".$tab[0]["prenom"]);
            $_SESSION['user_nom']=$tab[0]["nom"];
                $_SESSION['user_prenom']=$tab[0]["prenom"];
                $_SESSION['user_login']=$tab[0]["login"];
            header("location:home.php");
            exit;
        }
        else
            $message="Wrong login or password!";
    }
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
                <h2 class="form_title title">Create Account</h2>


                <input class="form__input" type="text" placeholder="Last Name" name="nom_inscription" value="<?=@$nom_inscription?>" required>
                <input class="form__input" type="text" placeholder="First Name" name="prenom_inscription" value="<?=@$prenom_inscription?>" required>
                <input class="form__input" type="text" placeholder="Login" name="login_inscription" value="<?=@$login_inscription?>" required>
                <input class="form__input" type="password" placeholder="Password" name="pass_inscription" required>
                <input class="form__input" type="password" placeholder="confirmation Password" name="repass" required>
                <button class="form__button  glow-on-hover " type="submit" style="margin-top: 20px;" name="valider_inscription">SIGN UP</button>
                <!-- message-->
                <?php if(!empty($message)){ ?>
                    <div class="erreur" style="color: red"><?=$message?></div>
                <?php } ?>
            </form>
        </div>

        <!--login------------------------------------------->
        <div class="container b-container" id="b-container">
            <form class="form" id="b-form" name="fo" method="post" action="">
                <h2 class="form_title title">Sign in to Website</h2>

                <input class="form__input" type="text" placeholder="Login" name="login_login" required>
                <input class="form__input" type="password" placeholder="Password" name="pass_login"required>
                <button class="form__button glow-on-hover" type="submit" style="margin-top: 20px;" name="valider_login">SIGN IN</button>
                <!-- message-->
                <?php if(!empty($message)){ ?>
                    <div class="erreur" style="color: red"><?=$message?></div>
                <?php } ?>
            </form>
            
        </div>

        <!--------------------------------------------->
        <div class="switch" id="switch-cnt">

            <div class="switch__circle"></div>
            <div class="switch__circle switch__circle--t"></div>

            <div class="switch__container" id="switch-c1">
            <a href=""><img src="./images/logo1.png" alt=""  height="40" width="250" ></a>
                <h2 class="switch__title title">Welcome Back !</h2>
                <p class="switch__description description">To keep connected with us please login with your personal info</p>
                <button class=" switch__button  switch-btn glow-on-hover " style="margin-top: 20px;">SIGN IN</button>
            </div>

            <div class="switch__container is-hidden" id="switch-c2">
            <a href=""><img src="./images/logo1.png" alt=""  height="40" width="250" ></a>
                <h2 class="switch__title title">Hello Friend !</h2>
                <p class="switch__description description">Enter your personal details and start journey with us</p>
                <button class="switch__button  switch-btn glow-on-hover col-auto" style="margin-top: 20px;">SIGN UP</button>
            </div>
            

        </div>

        
    </div>
    

    <script src="js/singup.js"></script>
</body>



</html>
