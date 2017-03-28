<!doctype html>
<html itemscope itemtype="http://schema.org/">
<head>
<meta charset="utf-8" />
<title><?php echo html($page->title()) ?> | <?php echo html($site->title()) ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="content-language" content="de" />

<!-- Please support http://humanstxt.org/ -->
<link type="text/plain" rel="author" href="<?php echo url('humans.txt') ?>" />

<!-- Feed -->
<link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="Feed | <?php echo html($site->title()) ?>" />

<link rel="canonical" href="<?php echo html($page->url()) ?>" />  

<meta name="title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
<meta name="author" content="<?php echo html($site->author()) ?>" />
<meta name="publisher" content="<?php echo html($site->author()) ?>" />
<meta name="copyright" content="<?php echo html($site->author()) ?>" />
<meta name="description" content="<?php echo html($page->teaser()) ?>" />
<meta name="robots" content="index,follow" />
<meta name="DC.Title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
<meta name="DC.Creator" content="<?php echo html($site->author()) ?>" />
<meta name="DC.Rights" content="<?php echo html($site->author()) ?>" />
<meta name="DC.Publisher" content="<?php echo html($site->author()) ?>" />
<meta name="DC.Description" content="<?php echo html($page->description()) ?>"/ >
<meta name="DC.Language" content="en" />

<meta property="og:title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
<meta property="og:type" content="blog" />
<meta property="og:url" content="<?php echo html($page->url()) ?>" />
<?php if (($page->template() == 'article') && ($page->teaser() != '')) : ?>
	<meta property="og:description" content="<?php echo html($page->teaser()) ?>" />
<?php endif ?>
<?php if (($page->hasImages()) && ($page->template() == 'article')) : ?>
	<meta property="og:image" content="<?php echo $page->images()->first()->url() ?>" />
<?php endif ?>

<meta itemprop="name" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>">
<meta itemprop="description" content="<?php echo html($page->teaser()) ?>">

<!-- Styles -->
<link rel="stylesheet" href="<?php echo url('assets/css/main.css') ?>" type="text/css" media="all" />

<!-- Favicons -->
<link rel="shortcut icon" href="<?php echo url('assets/images/icons/favicon.ico') ?>" />
<link rel="apple-touch-icon" href="<?php echo url('assets/images/icons/icons/iOS/apple-touch-icon-72x72.png') ?>" />
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo url('assets/images/icons/iOS/apple-touch-icon-72x72.png') ?>" />
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo url('assets/images/icons/iOS/apple-touch-icon-114x114.png') ?>" />

<link rel="me" href="https://twitter.com/mkeipert" />
<link rel="me" href="https://www.facebook.com/mario.keipert" />
<link rel="me" href="https://plus.google.com/u/0/100675718588556306485/posts" />


</head>
<body>

	<header  class="header cf" role="banner">
		<nav id="menu">
	    	<ul>
	    	<?php foreach ($pages->visible() as $page) : ?>
	    		<li><a href="<?php echo $page->url() ?>"><?php echo $page->title()->html() ?></a></li>
	    	<?php endforeach ?>
	    	</ul>
    	</nav>
    	<a href="<?php echo url() ?>">
	    	<h1>textwärts.</h1>
    	</a>
	</header>