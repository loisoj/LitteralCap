<?php require_once 'variacap.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Тест рекапчи</title>
  </head>
  <body>

<span style="margin:0 auto;">
  <form class="exoCap" action="exo-cap.php" method="post">
    <div class="stih-q">
      <?php
       echo $rCheck; ?>
    </div>
    <input type="text" name="exoCapPron" value="">
  </form>
</span>

  </body>
</html>
