<?php include('PHP/nav.php'); ?>
    <!-- Sliders -->
    <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                <img src="images/sliders/porsche.jpg" class="d-block w-100" alt="Porsche">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Porsche</h5>
                            <p>Puro 385HP com uma aceleração absurda.</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/sliders/japan-car.jpg" class="d-block w-100" alt="Carro Japônes">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Japan Car</h5>
                        <p>As fotos mais comuns dentro da cidade japão.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/sliders/nissan-r33.jpg" class="d-block w-100" alt="Nissan Skyline GTR R33">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Nisan Skyline</h5>
                        <p>O queridinho da galera! Famoso GTR de Velozes e Furiosos</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/sliders/japan-city.jpg" class="d-block w-100" alt="Cidade Japonesa vista de cima">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Por que Japão?</h5>
                        <p>As 10 maravilhas que nos aguardam no Japão para amantes de carros!</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Proximo</span>
            </button>
        </div>
    </section>
    <!-- Cards -->
    <main>
        <!--<div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="images/cards/evo-car.png" class="card-img-top" alt="Mitsubishi Lancer Evo X ">
                    <div class="card-body">
                        <h5 class="card-title titulo"><a href="#" style="text-decoration:black"> Lancer Evolution X</a></h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/cards/mercedes-gls600.jpg" class="card-img-top" alt="Mercedes Maybach GLS600">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#" style="text-decoration:none">Mercedes GLS600</a></h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="images/cards/tesla-model-x.jpg" class="card-img-top" alt="Tesla Modelo X">
                    <div class="card-body">
                        <h5 class="card-title titulo"><a href="#" style="text-decoration:none"> Tesla Model X</a></h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>-->
        <div class="container">
		    <div class="row row-cols-1 row-cols-md-3 g-4">
		        <?php foreach($results as $post): ?>
		        <div class="col gy-5">
		            <div class="card">
		                <img src="<?= $post["image"] ?>" class="card-img-top" alt="...">
		                <div class="card-body">
		                    <h5 class="card-title">
                                <?= $post["title"] ?>
                            </h5>
		                    <p class="card-text">
                                <?= $post["description"] ?>
                            </p>
		                    <a href="viewBlog.php?id=<?= $post["id"] ?>">
                                <i class="fas fa-eye check-icon">Ver</i>
                            </a>
		                </div>
		            </div>
		        </div>
		        <?php endforeach; ?>
	        </div>
        </div>                
    </main>
    <?php include('PHP/footer.php'); ?>
    

    <!-- Bootstrap script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>