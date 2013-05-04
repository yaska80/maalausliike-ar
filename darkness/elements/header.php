<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="<?=$this->getThemePath()?>/styles/layout.css" type="text/css" />
<?=Loader::element("header_required");?>
</head>
<body id="top">
<link href='http://fonts.googleapis.com/css?family=Mrs+Saint+Delafield|Open+Sans' rel='stylesheet' type='text/css'>
<!-- <link href='http://fonts.googleapis.com/css?family=Italianno' rel='stylesheet' type='text/css'> -->
<div class="wrapper">
  <div id="header">
    <div id="logo">
      <?php 
        $a = new GlobalArea('Site Logo');
        $a->display();
      ?>
    </div>
    <div id="topnav">
      <?php 
        $a = new GlobalArea('Header Nav');
        $a->display();
      ?>
    </div>
    <br class="clear" />
  </div>
</div>