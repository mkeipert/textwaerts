<?php snippet('header'); ?>

	<main class="main" role="main">

    <?php if(param('tag')): // show tag results ?>
    	<?php echo '<h1 class="result">Beiträge zum Thema “<strong>' , $tag , '</strong>”</h1>';
    ?>
	<?php endif ?>


	<?php foreach ($articles as $article) : ?>
		<?php if($article->template()=="lyric") : ?>
			<!-- Article Lyric -->
			<article class="item h-entry">
				<?php echo $article->text()->kirbytext() ?>
				<p class="meta dt-published"><?php echo strftime('%d.%m.%Y', $article->date()) ?></p>
			</article>
			<!-- End Lyric -->
		
		<?php else : ?>
    	
			<!-- All other Articles -->
			<article class="item h-entry">

			<!-- Date -->
			<p class="meta dt-published">
				<?php echo strftime('%d.%m.%Y', $article->date()) ?>
			</p>
			
			<!-- Tags -->
          	<?php if($article->tags() != ''): ?>
          		<ul class="tags">
          			<?php foreach(str::split($article->tags()) as $tag): ?>
          				<li>
							<a href="<?php echo url('tag:' . urlencode($tag)) ?>"><?php echo $tag; ?></a>
						</li>
          			<?php endforeach ?>
          		</ul>
          	<?php endif ?>
			<!-- End Tags -->
			
			<?php if ($article->text()->length() > 1000) : ?>
				<a class="u-url" href="<?php echo $article->url() ?>">
					<h1 class="p-name"><?php echo $article->title()->html() ?></h1>
				</a>
			<?php else : ?>
				<h1><?php echo $article->title()->html() ?></h1>
			<?php endif ?>

			
			
			<?php if ($article->text()->length() > 1000) : ?>
				<?php if ($article->hasImages()) : ?>
					<figure>
						<a href="<?php echo $article->url() ?>" title="<?php echo $article->title() ?>">
							<img src="<?php echo $article->images()->first()->url() ?>" />
						</a>
					</figure>
				<?php endif ?>
				<p></p>
				<?php if($article->Teaser() != '') : ?>
					<?php echo $article->Teaser() ?>
				<?php else : ?>
					<?php echo $article->text()->excerpt(300); ?>	
				<?php endif ?>
				<a href="<?php echo $article->url() ?>" class="more">weiterlesen</a>
			<?php else : ?>
				<?php echo $article->text()->kirbytext() ?>
			<?php endif ?>
		</article>
		<?php endif ?>
	<?php endforeach ?>
	
	<?php if($articles->pagination()->hasPages()): /*** pagination ***/ ?>
        <nav class="pagination cf">
            <?php if($articles->pagination()->hasPrevPage()): ?>
            <a class="prev" href="<?= $articles->pagination()->prevPageURL() ?>">&lsaquo;&lsaquo; neuer</a>
            <?php endif ?>
            <?php if($articles->pagination()->hasNextPage()): ?>
            <a class="next" href="<?= $articles->pagination()->nextPageURL() ?>">älter &rsaquo;&rsaquo;</a>
            <?php endif ?>
        </nav>
    <?php endif ?>


  </main>

  <aside>
      <div id="tagcloud">
      <h4>Themen</h4>
        <ul class="tags">
          <?php foreach($tags as $tag): ?>
          <li>
            <a href="<?php echo url($page->url() . '/' . url::paramsToString(['tag' => $tag])) ?>">
            <?php echo html($tag) ?>
            </a>
          </li>
        <?php endforeach ?>
        </ul>
    </div>
	
</aside>


<?php snippet('footer') ?>