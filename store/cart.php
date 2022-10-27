<?php
session_start();

      if(isset($_SESSION['auth']['id'])){

        require_once "../DB/data.php";

        $req = $pdo->prepare("SELECT name, price, quantity, subtotal, image, product_id FROM cart WHERE client_id = ? AND status = 'cart'");
        $req->execute(array($_SESSION['auth']['id']));
        $data = $req->fetchAll(PDO::FETCH_ASSOC);

        $logo = '../images/logotrip1.png';
        $logocon = '../images/guest.png';
        $acceuil= '#';
        $plage = '../Destination/Plage.php';
        $montagne = '../Destination/Montagne.php';
        $cascade = '../Destination/cascade.php';
        $valle = '../Destination/Valle.php';
        $sahara = '../Destination/Sahara.php';
        $achat = '../store/store.php';
        $location = '#';
        $livres = '#';
        $reservation = '../reservation/form.php';
        $conciels = '../conciels/conciels.php';
        $deconnexion = '../DB/deconnexion.php';
        $connexion = '../SUBSCRIBE/connexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php require "../menu.php" ?>
    <!-- cart -->

    <section class="cart small-container" >
    <?php
     if($req->rowCount() > 0){

        echo '<form action="#" method="POST">
            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>';

                $i = 1;
                foreach($data as $data){
                    echo '<tr>
                    <form action="#" method="POST">
                        <td>
                            <div class="product-info">
                                <img src="'. $data['image'] .'">
                                <div>
                                    <p>'. $data['name'] .'</p>
                                    <input type="hidden" name="product_id" value="'. $data['product_id'] .'">
                                    <small>price: <span class="price">'. $data['price'] .'</span> DHS</small>
                                    <button type="submit" name="remove" class="remove">Remove</button>
                                    <input type="hidden" name="product_id'. $i .'" value="'. $data['product_id'] .'">
                                </div>
                            </div>
                        </td>
                        <td>
                            <button class="minus" type="button">-</button>
                            <span class="quantity">'. $data['quantity'] .'</span>
                            <input type="hidden" name="quantity'. $i .'" value="'. $data['quantity'] .'" class="quantityHidden">
                            <button class="plus" type="button">+</button>
                        </td>
                        <td class="subtotal">
                            <span>'. $data['subtotal'] .'</span> DHS
                            <input type="hidden" name="subtotal'. $i .'" value="'. $data['subtotal'] .'">
                        </td>
                    </form>
                </tr>';
                $i++;
                }

            echo '</table>
            <div class="totale-price">
                <table>
                    <tr>
                        <td>Total</td>';

                        $fetchTotal = $pdo->prepare("SELECT SUM(subtotal) AS total FROM cart WHERE client_id = ? AND status = 'cart'");
                        $fetchTotal->execute([$_SESSION['auth']['id']]);
                        $Total = $fetchTotal->fetch(PDO::FETCH_ASSOC);
                        
                       if($Total['total'] == 0){
                         echo '<td>00.00 DH</td>';
                       }else{
                         echo '<td><span class="total">'. $Total['total'] .'</span> DHS</td>';
                       }

                    echo '</tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="checkout" class="btn">Proceed to checkout &#8594;</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>';

                

                if(isset($_POST['remove'])){
                    $delete = $pdo->prepare("DELETE FROM cart WHERE product_id = ? AND client_id = ?");
                    $delete->execute([$_POST['product_id'], $_SESSION['auth']['id']]);
                    echo '<script type="text/javascript"> window.location="cart.php"; </script>';
                }
                if(isset($_POST['checkout'])){
                    $fetchProductNum = $pdo->prepare("SELECT COUNT(client_id) AS product_number FROM cart WHERE client_id = ? AND status = 'cart'");
                    $fetchProductNum->execute([$_SESSION['auth']['id']]);
                    $product_number = $fetchProductNum->fetch(PDO::FETCH_ASSOC);
                    $n = $product_number['product_number'];
                    for($j = 1 ; $j <= $n; $j++){
                        $updateCart = $pdo->prepare("UPDATE cart SET quantity = ? , subtotal = ? ,status = 'order' WHERE client_id = ? AND product_id = ?");
                        $updateCart->execute([$_POST['quantity'. $j .''],$_POST['subtotal'. $j .''],$_SESSION['auth']['id'], $_POST['product_id'. $j .'']]);
                    }
                    echo '<script type="text/javascript"> window.location="cart.php"; </script>';
                }
            }else{
                echo '<div style="width: 100%; display: flex; justify-content: center; align-items: center;flex-direction: column;">
                            <img src="images/empty-cart.png" width="350" >
                            <p style="color: #60b4df;text-align: center; margin-top: 15px;margin-left: 60px">Your cart is empty<p>
                            <p style="text-align: center; margin-top: 15px;margin-left: 60px">Add something to make me Happy :)</p>
                      </div>';
            }


            ?>

        
    </section>
    <?php require "../footer.php" ?>
    <script src="js/script.js" type="text/javascript"></script>
</body>
</html>
<?php
            /*echo "<pre>";
            print_r($data);
            echo "</pre>";*/
}else{
  header("Location: ../SUBSCRIBE/connexion.php");
}
        ?> 