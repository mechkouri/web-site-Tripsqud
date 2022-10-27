<?php
session_start();
		require_once "../DB/data.php";

		$req = $pdo->prepare("SELECT * FROM cart WHERE status = 'order'");
		$req->execute();
		$data = $req->fetchAll(PDO::FETCH_ASSOC);

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
		if($_SESSION['auth']['role'] == "client"){
                      header("location: ../index.php?id=". $_SESSION['auth']['id']);
        }else{
             
		



?>
<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<?php require "../menu.php" ?>
	<div class="container orders">
		<h1>Orders</h1>
		<table class="table table-striped table-hover">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Products</th>
		      <th scope="col">Quantity</th>
		      <th scope="col">Price</th>
		      <th scope="col">Total</th>
		      <th scope="col">Client</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php 
		  			foreach ($data as $val) {
		  				echo '<tr>
							      <th scope="row">'. $val['id'] .'</th>
							      <td>'. $val['name'] .'</td>
							      <td>'. $val['quantity'] .'</td>
							      <td>'. $val['price'] .' DHS</td>
							      <td>'. $val['subtotal'] .' DHS</td>
							      <td>'. $val['client_id'] .'</td>
						      </tr>';
		  			}
		  		
		  	?>
		    
		  </tbody>
		</table>
		<?php
				/*echo "<pre>";
	            print_r($data);
	            echo "</pre>";*/

		?>
	</div>
	<?php require "../footer.php" ?>
</body>
</html>

<?php }?>