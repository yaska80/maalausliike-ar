<?php 
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); ?>
<div class="wrapper">
	<div id="container">
<?php 
print $innerContent;
?>
	</div>
</div>

<?php  $this->inc('elements/footer.php'); ?>