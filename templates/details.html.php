<?php if ($errors) : ?>
	<div class="container">
		<div class="row my-5 text-center">
			<div class="col-lg-8 m-auto">
				Aucune donnée.
			</div>
		</div>
	</div>
<?php else : ?>
	<div class="container">
		<div class="row mt-5">
			<div class="col-lg-8 m-auto">
				<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
					<div class="p-3" style="background-color: #eee;">
						<div class="carousel-inner">
							<?php foreach ($images as $k => $image) : ?>
								<div class="carousel-item <?php echo ($image['type'] == 'primary') ? 'active' : '' ?>">
									<img class="d-block w-100" src="/uploads/<?php echo $image["file_name"]; ?>">
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
								<li>Titre : <strong><?php echo $announcement['title']  ?></strong></li>
								<li>Category: <strong><?php echo $announcement['category']  ?> </strong></li>
								<li>Prix: <strong><?php echo $announcement['price']  ?> Dhs </strong></li>
								<li>Date de publication: <strong><?php echo $announcement['created_at']  ?> </strong></li>
							</ul>
						</div>
						<div class="col-lg-6">
							<ul>
								<li>Date_der_modif <strong><?php echo $announcement['updated_at']  ?></strong></li>
								<li>Ville <strong><?php echo $announcement['city']  ?></strong></li>
								<li>Adresse <strong><?php echo $announcement['address']  ?></strong></li>
								<li>Code postal <strong><?php echo $announcement['postal_code']  ?></strong></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col">
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
								Contacter l'annonceur
							</button>
							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content">
										<div class="modal-header">
											<h1 class="modal-title fs-5" id="exampleModalLabel">Numéro de téléphone</h1>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<span><strong>+212<?php echo $announcement['phone']; ?></strong></span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
<?php endif; ?>