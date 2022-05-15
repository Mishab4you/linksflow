<?php if(isset($_SESSION['message'])): ?>
  <font color="red"><div class="msg <?php echo $_SESSION['type']; ?>">
    <li><?php echo $_SESSION['message']; ?></li>
    <?php
      unset($_SESSION['message']);
      unset($_SESSION['type']);
    ?></font>
  </div>
<?php endif; ?>