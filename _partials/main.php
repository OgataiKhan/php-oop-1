<main class="py-4">
  <div class="container">
    <ul class="d-flex justify-content-center">
      <?php
      foreach ($movies as $movie) {
        echo "<div>";
        $movie->displayProperties();
        echo "</div>";
      }
      ?>
    </ul>
  </div>
</main>