<?php
session_start();
require 'includes/functions.php';
require 'includes/conn.php';
require 'includes/navbar.php';
require_with('includes/miniheader.php', array('pagename' => 'Details'));

$id = $_GET["id"];
$sql = "SELECT * FROM `annonce` WHERE `annonce-id` = $id";
$img = "SELECT  `Img_Url` FROM `galerie` WHERE `announceid` = $id";
$announceDATA = $conn->query($sql)->fetch(PDO::FETCH_ASSOC);
$imgDATA = $conn->query($img)->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="container">
	<div class="row mt-5">
		<div class="col-lg-8 m-auto">
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
				<div class="p-3" style="background-color: #eee;">
					<div class="carousel-inner">
						<?php foreach ($imgDATA as $key => $value) : ?>
							<div class="carousel-item active">
								<img src="<?php echo $value["Img_Url"]; ?>" class="d-block w-100" alt="slide">
							</div>
						<?php endforeach ?>
						<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="visually-hidden">Next</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8 m-auto px-3">
			<div class="bg-light mt-3 p-4">
				<h3 class="">Plus de détail </h3>
				<div class="row">
					<div class="col-lg-6">
						<ul>
							<li>Titre : <strong><?php echo $announceDATA['title']  ?></strong></li>
							<li>Category: <strong><?php echo $announceDATA['category']  ?> </strong></li>
							<li>Prix: <strong><?php echo $announceDATA['Price']  ?> Dhs </strong></li>
							<li>Date de publication: <strong><?php echo $announceDATA['Date_pub']  ?> </strong></li>
						</ul>
					</div>
					<div class="col-lg-6">
						<ul>
							<li>Date_der_modif <strong><?php echo $announceDATA['Date_der_modif']  ?></strong></li>
							<li>Ville <strong><?php echo $announceDATA['city']  ?></strong></li>
							<li>Adresse <strong><?php echo $announceDATA['Adresse']  ?></strong></li>
							<li>Code postal <strong><?php echo $announceDATA['Code_Pos']  ?></strong></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require 'includes/footer.php'; ?>