<?php snippet('header') ?>

  <main class="main" role="main">

    <article class="text h-entry">
		<p class="meta dt-published"><?php echo strftime('%d.%m.%Y', $page->date()) ?></p>
		<h1 class="p-name"><?php echo $page->title()->html() ?></h1>
		<div class="e-content"> <?php echo $page->text()->kirbytext() ?></div>
		<div class="author"><a rel="author" class="p-author h-card" href="http://mariokeipert.de">(Mario Keipert)</a></div>
    </article>
    
    <?php 
	    $Options = array('visibleOnly' => true, 'startURI' => '/textwaerts', 'searchField' => 'Tags');
	    $related = relatedpages($Options);
	?>
		
	<?php if ($related != '') : ?>
	
	<hr>
	<h3>Verwandte Beiträge</h3>

    	<?php foreach($related as $relpage): ?>
			<article class="related">
				<h4><a href="<?php echo $relpage->url() ?>"><?php echo $relpage->title() ?></a></h4>
				<?php if ($relpage->teaser() != '') : ?>
					<p><?php echo $relpage->teaser()->html() ?>
				<?php else : ?>
					<p><?php echo $relpage->text()->excerpt(200) ?>
				<?php endif ?>
				&nbsp;<a href="<?php echo $relpage->url() ?>" class="more">weiterlesen</a>
			</article>
		<?php endforeach ?>
	
	
	<?php endif ?>
	
	<hr>
	
	<h3>Kommentare</h3>
	<div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'textwrts';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

  </main>

<?php snippet('footer') ?>