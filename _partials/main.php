<main class="py-4">
  <div class="container">
    <ul class="d-flex justify-content-center flex-wrap">
      <?php
      foreach ($movies as $movie) {
        $movie->displayProperties();
      }
      ?>
    </ul>
  </div>
</main>