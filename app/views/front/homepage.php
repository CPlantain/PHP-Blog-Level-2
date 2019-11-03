<?php $this->layout('front/layout', ['title' => 'My Blog Homepage']); ?>
			<div class="col-sm-8">

			<?php foreach ($articles as $article) : ?>
				<article class="single-blog">
					<div class="post-thumb">
						<a href="article?id=<?=$this->e($article['id'])?>">
						
						<?php if ($article['picture']) : ?>
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
				
				<div class="post-pagination  clearfix">
					<ul class="pagination text-left">
						
						<!-- блок пагинации -->
			            <?php if ($paginator->getPrevUrl()):?>
			              <li><a href="<?=$paginator->getPrevUrl() ?>"><i class="fa fa-angle-double-left"></i></a></li>
			            <?php endif;

			            foreach ($paginator->getPages() as $page):
			                if ($page['url']): ?>
			                    <li <?=$page['isCurrent'] ? 'class="active"' : '';?>>
			                        <a href="<?=$page['url']?>"><?=$page['num']?></a>
			                    </li>
			                <?php else: ?>
			                    <li class="disabled"><span><?=$page['num']?></span></li>
			                <?php endif;
			            endforeach;

			            if ($paginator->getNextUrl()): ?>
			              <li><a href="<?=$paginator->getNextUrl()?>"><i class="fa fa-angle-double-right"></i></a></li>
			            <?php endif; ?>
					</ul>
				</div>
			</div>

