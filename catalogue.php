<?php
$page_title = 'Catalogue';
$page_meta = 'Vous pouvez vous informer sur les hobbies';
include 'header.php';
?>
<main>
<div class="container py-5">
    <h1 class="text-center mb-5">Catalogue d'appareils</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">

      <!-- Device Card 1 -->
      <div class="col">
        <div class="card h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Device 1">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Smartphone X1</h5>
            <p class="card-text">A high-performance smartphone with great battery life and camera.</p>
            <div class="mt-auto">
              <a href="#" class="btn btn-primary me-2">Buy Now</a>
              <a href="index.php?page=contact" class="btn btn-outline-secondary">Contact Technical Service</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Device Card 2 -->
      <div class="col">
        <div class="card h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Device 2">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Laptop Pro 15</h5>
            <p class="card-text">Lightweight and powerful laptop ideal for professionals and students.</p>
            <div class="mt-auto">
              <a href="#" class="btn btn-primary me-2">Buy Now</a>
              <a href="index.php?page=contact" class="btn btn-outline-secondary">Contact Technical Service</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Device Card 3 -->
      <div class="col">
        <div class="card h-100">
          <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Device 3">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">Tablet Z10</h5>
            <p class="card-text">Versatile tablet for reading, drawing, and light productivity tasks.</p>
            <div class="mt-auto">
              <a href="#" class="btn btn-primary me-2">Buy Now</a>
              <a href="index.php?page=contact" class="btn btn-outline-secondary">Contact Technical Service</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Add more devices by copying the structure above -->

    </div>
  </div>
</main>

<?php 
include 'footer.php';
?>