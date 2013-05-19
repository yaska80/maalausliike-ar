<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>

<div class="wrapper">
  <div id="latest">
    <div class="fl_left">
	    <?php 
	      $a = new Area('Main Header Image');
	      $a->display($c);
	    ?>
	</div>
    <div class="fl_right">
	    <?php 
	      $a = new Area('Main Header Featured');
	      $a->display($c);
	    ?>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper">
  <div id="intro">
    <ul>
      <li>
		<?php 
		  $a = new Area('Main Column 1');
		  $a->display($c);
		?>
      </li>
      <li>
		<?php 
		  $a = new Area('Main Column 2');
		  $a->display($c);
		?>
      </li>
      <li class="last">
		<?php 
		  $a = new Area('Main Column 3');
		  $a->display($c);
		?>
      </li>
    </ul>
    <br class="clear" />
  </div>
</div>
<div class="wrapper">
  <div id="container">
  	<div id="content">
    <?php 
      $a = new Area('Main');
      $a->display($c);
    ?>
  	</div>
  	<div id="column">
    <?php 
      $a = new Area('Right Sidebar');
      $a->display($c);
    ?>
  	</div>
  	<br class="clear"/>
  </div>
</div>


<?php $this->inc('elements/footer.php'); ?>
