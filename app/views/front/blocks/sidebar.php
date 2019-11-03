<div class="col-sm-4">
				<div class="kotha-sidebar">
					<aside class="widget latest-post-widget">
						<h2 class="widget-title text-uppercase text-center">Latest Posts</h2>

						<?php foreach ($sidebar['latest_articles'] as $article) : ?>

							<ul>
								<li class="media">
									<div class="media-left">
										<a href="article?id=<?=$this->e($article['id'])?>" class="popular-img"><img src="uploads/<?=$this->e($article['picture'])?>" alt="">
										</a>
									</div>
									<div class="latest-post-content">
										<h2 class="text-uppercase"><a href="article?id=<?=$this->e($article['id'])?>"><?=$this->e($article['title'])?></a></h2>
										<p>On <?= date("d.m.Y", strtotime($article['pub_date'])); ?></p>
									</div>
								</li>
							</ul>
						<?php endforeach; ?>
				</div>
			</div>