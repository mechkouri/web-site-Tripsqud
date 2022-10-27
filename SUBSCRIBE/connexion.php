<?php
session_start();

    require_once "../DB/data.php";

    function filterData($data){
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        $data = trim($data);
        return $data;
    }
    $email = $password = $error = $erroremail = $errorpwd = "";

    if(isset($_SESSION['auth']['id'])){

            header("location: ../index.php?id=". $_SESSION['auth']['id']);

    }else{
        if(isset($_POST['submit'])){
            $email = filterData($_POST["email"]);
            $password = filterData($_POST["password"]);
            if(empty($email) && empty($password)){
                $erroremail = "<span class='error'>Please enter your Address Email</span>";
                $errorpwd = "<span class='error'>Please enter your Password</span>";
            }else if(empty($email) && !empty($password)){
                $erroremail = "<span class='error'>Please enter your Address Email</span>";
            }else if(!empty($email) && empty($password)){
                $errorpwd = "<span class='error'>Please enter your Password</span>";
            }else{
                $req = $pdo->prepare("SELECT * FROM clients WHERE email = ? AND mot_de_passe = ?");
                $data = [$email, sha1($password)];
                $req->execute($data);
                if($req->rowCount() == 1){
                    $data = $req->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['auth'] = $data;
                    if($_SESSION['auth']['role'] == "admin"){
                      header("location: ../admin/orders.php?id=". $_SESSION['auth']['id']);
                    }else{
                      header("location: ../index.php?id=". $_SESSION['auth']['id']);
                    }
                }else{
                    $error = '<p class="error">Your Email or Password is incorrect</p>';
                }
            }
        }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>

  <meta charset="utf-8">
  <title>CONNEXION</title>
<link rel="stylesheet" href="../css/filecon.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='../css/formjs.js'></script>
</head>
<body>
  <div class="form">
     

    <div class="register">
      <a href="../index.php" id="return"><i class="fa fa-reply-all"></i></a>


     <form id="form" class="form" action="" method="POST">
       <h1>CONNEXION<i class="fa fa-user-circle-o"></i></h1>
       <!--les mesdsages flash-->

          <?php echo $error; ?>

      <div class="form-control ">
        <label for="name1">Email</label><br>


        <input type="email" name="email" id="Email" placeholder="entrez  votre email" value="<?php echo $email;?>">
        <br>
        <?php echo $erroremail; ?>
         <br><br>
      </div>



      <div class="form-control">
        <label for="passe"> Mot de passe : </label><br>

        <input type="password" name="password" id="passe"  placeholder="entrez votre mot de passe" value="<?php echo $password;?>">
        <br>
        <?php echo $errorpwd; ?>


        <br><br>

        <h6 class="h6"><a href="inscription.php">Inscrirez vous maintenant!</a></h6>
        <br><br>
        </div>
        <button type="submit" name="submit">Se connecter</button><br><br>

    </form>

  </div>
</div>

<style type="text/css">
 .form-control a
 {
  text-decoration: 0;
  margin-left: 3%;
  color:white ;
}
.form-control  a
{
  font-size: 14px;
  text-decoration: none;

}
.form-control h6 a:hover
{
  text-decoration: underline;

}



.error
{
  color: #ff0505;
font-weight: bold;
list-style-type: none;


}


</style>

</body>
</html>

<?php
}
?>
