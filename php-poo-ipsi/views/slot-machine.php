<?php
$headTitle = "Slot-Machine";

ob_start();
?>

<section class="main-sections">
  <article class="main-articles">
      
      <article class="slot-machine">
        <div class="reel" id="reel1">🍒</div>
        <div class="reel" id="reel2">🍒</div>
        <div class="reel" id="reel3">🍒</div>
      </article>
      <button id="spinButton">🎲 Lancez la machine 🎲</button>
      <div id="result"></div>
    </div>

    <script src="/sources/js/slot-machine.js"></script>
  </article>
</section>

<?php

$mainContent = ob_get_clean();
?>