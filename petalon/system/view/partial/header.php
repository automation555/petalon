<?php fHTML::sendHeader() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title><?php echo $this->prepare('title', 'Default') ?><?php echo (strpos($this->get('title'), 'North Shore Web Geeks') === FALSE ? ' - North Shore Web Geeks' : '') ?></title>
  <meta name="keywords" content="<?php echo $this->get('meta[keywords]') ?>" />
  <meta name="description" content="<?php echo $this->get('meta[description]') ?>" />
  <base href="<?php echo fURL::getDomain() . URL_ROOT ?>" />
  <link href="rss" rel="alternate" type="application/rss+xml" title="North Shore Web Geeks Events" />
  <link rel="stylesheet" type="text/css" href="css/site.css" media="all" />
<?php echo $this->place('css') ?>
<?php echo $this->place('js') ?>
</head>
<body>
  <div id="header">
    <div class="bound">
      <a href=""><img src="img/logo.png" alt="NSWG: North Shore Web Geeks" /></a>
    </div>
  </div>
  <div id="content">
    <div class="bound">