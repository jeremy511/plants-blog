<?php
include_once 'database.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="Css/owl.carousel.min.css">
  <link rel="stylesheet" href="Css/styles.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="contenedor">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background: #fff !important;">

        <a class="navbar-brand" href="index.php"> <img src=" Img/logo.png" style="width: 100px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blogs.php">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Plants</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <div class="blogsparallax"></div>

    <aside style="margin-top:20px;">
      <h1 class="subtitle">Lastest Posts</h1>
      <!-- aqui comienzan las cartas-->
      <div class="card" style="width: 18rem;">
        <img src="Img/cactus.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="Img/cactus.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="Img/cactus.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="Img/cactus.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="Img/cactus.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>


      <div class="card" style="width: 18rem;">
        <img src="Img/cactus.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="Img/cactus.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="Img/cactus.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="Img/cactus.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <img src="Img/cactus.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
            content.</p>
        </div>
        <div class="card-body">
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </aside>

    <footer>
      <p class="parraf"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo vel in, consequatur doloremque
        fugiat minima
        maiores dolor error optio debitis quia architecto minus laborum explicabo excepturi perspiciatis aspernatur
        dolorum vero!locale_filter_matches Lorem ipsum dolor sit, amet consectetur adipisicing elit. At magni nesciunt
        est
        suscipit nihil eius dignissimos alias, asperiores molestiae atque reiciendis expedita repellat pariatur laborum
        illum amet dicta commodi. Id? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus quas modi
        tenetur cupiditate dolorum, voluptas illum veritatis, ex, dolore mollitia temporibus iusto architecto
        praesentium
        aspernatur ut facilis. Commodi, neque dignissimos? Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Labore, obcaecati necessitatibus accusamus dolore rem dolores aliquid facere hic, quibusdam at itaque.
        Doloremque
        voluptatibus consectetur laboriosam delectus voluptatem tenetur, voluptatum sapiente! Lorem ipsum dolor sit amet
        consectetur, adipisicing elit. Similique delectus alias fugiat quam inventore reiciendis? Corporis laudantium
        culpa provident nisi nulla porro debitis unde tempora. Atque quam nesciunt eum error!</p>
    </footer>
    <script>
    ScrollReveal().reveal('.card', {
      interval: 19,
      reset: true,
      delay: 300
    });
    ScrollReveal().reveal('.subtitle');
    ScrollReveal().reveal('.illustracion', {
      interval: 16,
      reset: true,

    });
    ScrollReveal().reveal('.parraf', {
      interval: 16,
      reset: true,
      delay: 200
    });
    </script>