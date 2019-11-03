<?php 
$title = 'All from ' . reset($articles)['name'];

$this->layout('front/layout', ['title' => $title]) ?>


			<div class="col-sm-8">

			<?php foreach ($articles as $article) : ?>
				<article class="single-blog">
					<div class="post-thumb">
						<a href="article?id=<?=$this->e($article['id'])?>">
						
						<?php if ($article['picture'] !== null) : ?>
							<img src="uploads/<?=$this->e($article['picture'])?>" alt="">
						<?php endif; ?>

						</a>
					</div>
					<div class="post-content">
						<div class="entry-header text-center text-uppercase">
							<a href="category?id=<?=$this->e($article['category_id'])?>" class="post-cat"><?=$this->e($article['name'])?></a>
							<h2><a href="article?id=<?=$this->e($article['id'])?>"><?=$this->e($article['title'])?></a></h2>
						</div>
						<div class="entry-content">
							<p><?=$this->e($article['description'])?></p>
						</div>
						<div class="continue-reading text-center text-uppercase">
							<a href="article?id=<?=$this->e($article['id'])?>">Continue Reading</a>
						</div>
						<div class="post-meta">
							<ul class="pull-left list-inline author-meta">
								<li class="author">By <a href="#"><?=$this->e($article['username'])?></a></li>
								<li class="date"> On <?= date("d.m.Y", strtotime($article['pub_date'])); ?></li>
							</ul>
							<ul class="pull-right list-inline social-share">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</article>
			<?php endforeach; ?>
			</div>

