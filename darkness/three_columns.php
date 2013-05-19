<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<div class="wrapper">
  <div id="container">
  	<div id="left_column">
    <?php 
      $a = new Area('Left Sidebar');
      $a->display($c);
    ?>
  	</div>
  	<div id="rest_column">
      <div id="main_column">
      <?php 
        $a = new Area('Main');
        $a->display($c);
      ?>
      </div>
      <div id="right_column">
      <?php 
        $a = new Area('Right Sidebar');
        $a->display($c);
      ?>
      </div>
  	</div>
  	<br class="clear"/>
  </div>
</div>

<?php $this->inc('elements/footer.php'); ?>
