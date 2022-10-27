<?php
session_start();
$logo = '../images/logotrip1.png';
    $logocon = '../images/guest.png';
    $acceuil= '#';
    $plage = '../Destination/Plage.php';
    $montagne = '../Destination/Montagne.php';
    $cascade = '../Destination/cascade.php';
    $valle = '../Destination/Valle.php';
    $sahara = '../Destination/Sahara.php';
    $achat = '#';
    $location = '#';
    $livres = '#';
    $reservation = '../reservation/form.php';
    $conciels = '../conciels/conciels.php';
    $deconnexion = '../DB/deconnexion.php';
    $connexion = '../SUBSCRIBE/connexion.php';


      

      require_once "../DB/data.php";

      if(isset($_POST['addToCart'])){
        if(isset($_SESSION['auth']['id'])){
            $fetchCart = $pdo->prepare("SELECT product_id, quantity, subtotal FROM cart WHERE product_id
          = ? AND client_id = ? AND status = 'cart'");
          $fetchCart->execute(array($_POST['product_id'], $_SESSION['auth']['id']));
          $cartData = $fetchCart->fetch(PDO::FETCH_ASSOC);

          $fetch = $pdo->prepare("SELECT * FROM products WHERE id = ?");
          $fetch->execute(array($_POST['product_id']));
          $product_info = $fetch->fetch(PDO::FETCH_ASSOC);

          if($fetchCart->rowCount() >= 1){
            $subTotal = $cartData['subtotal'] + $product_info['price'];
            $quantity = $cartData['quantity'] + 1;
            $update = $pdo->prepare("UPDATE cart SET quantity = ? , subtotal = ? WHERE product_id = ? AND client_id = ?");
            $update->execute(array($quantity,$subTotal, $cartData['product_id'], $_SESSION['auth']['id']));
          }else{
            $insert = $pdo->prepare("INSERT INTO cart(name, price, image, quantity, subtotal, product_id, client_id, status) VALUES(?,?,?,?,?,?,?,?)");
            $insert->execute(array($product_info['product_name'], $product_info['price'],$product_info['image'], 1,$product_info['price'], $product_info['id'], $_SESSION['auth']['id'], 'cart'));
          }
        }else{
  header("Location: ../SUBSCRIBE/connexion.php");
}
      }
 



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Tripsquad </title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../css/style.css">
  
  </head>
  <body>
<?php require "../menu.php" ?>
  <section class="store">
    <div class="container ">
      <br><br><br><br>
      <header>
        <h1>Nouveau arrivage</h1>
        <p><strong>Bienvenue dans notre magazin ici vous trouvez la nouvelle collection de 2020.</strong></p>
      </header>


      <main>
        <?php
        $req = $pdo->prepare("SELECT * FROM products");
        $req->execute();
        $data = $req->fetchAll(PDO::FETCH_ASSOC);

        foreach($data AS $product){
          echo '<form action="#" method="POST" class="singleBlog">
                  <img src="' . $product['image'] . '" alt="">
                  <div class="blogContent">
                    <p>' . $product['product_name'] . '</p>

                    <a href="#" class="btn">' . $product['price'] . ' DHS</a>
                    <input type="hidden" name="product_id" value="' . $product['id'] . '">
                    <button type="submit" name="addToCart" class="btn">Add To Cart</button>
                  </div>
                </form>';
        }




        ?>
        

        

  </main>

</div>
</section>


<?php require "../footer.php" ?>
</body>
</html>
<?php 

            /*echo "<pre>";
            print_r($data);
            echo "</pre>";*/
       ?> 