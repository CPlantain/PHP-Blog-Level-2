<?php $this->layout('front/layout', ['title' => $article['title']]) ?>
<div class="col-sm-8">
	<article class="single-blog">
					<div class="post-thumb">
						<img src="uploads/<?=$this->e($article['picture'])?>" alt="">
					</div>
					<div class="post-content">
						<div class="entry-header text-center text-uppercase">
							<a href="category?id=<?=$this->e($article['category_id'])?>" class="post-cat"><?=$this->e($article['name'])?></a>
							<h2><?=$this->e($article['title'])?></h2>
						</div>
						<div class="entry-content">
							<p><?=$this->e($article['description'])?></p>
							<p><?=$this->e($article['content'])?></p>
						</div>

						<div class="post-meta">
							<ul class="pull-left list-inline author-meta">
								<li class="author">By <a href="#"><?=$this->e($article['username'])?> </a></li>
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
			
				<div class="comment-area">
					<div class="comment-heading">
						<h3>Thoughts about this:</h3>
					</div>
					
					<!-- блок комментариев -->
					<?php foreach ($comments as $comment) : ?>
						<div class="single-comment">
							<div class="media">
								<div class="media-left text-center">
									<a href="#"><img class="media-object" src="assets/images/reply-1.jpg" alt=""></a>
								</div>
								<div class="media-body">
									<div class="media-heading">
										<h3 class="text-uppercase">
											<a><?=$this->e($comment['username'])?></a>

											<!-- <?php //if ($_SESSION['auth_logged_in'] === true) : ?>
												<a href="#" class="pull-right reply-btn">reply</a>
											<?php //endif; ?> -->

										</h3>
									</div>
									<p class="comment-date">
										<?=date("d.m.Y", strtotime($comment['pub_date']))?>
									</p>
									<p class="comment-p">
										<?=$this->e($comment['message'])?>
									</p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>

				</div> 
				
				<!-- форма добавления комментария -->
				<?php if ($_SESSION['auth_logged_in'] === true) : ?>

					<?= $flash ?>

					<div class="leave-comment">
						<h4>Leave a reply</h4>
						<form class="form-horizontal contact-form" method="post" action="/add-comment">
							<div class="form-group">
								<div class="col-md-12">
									<textarea class="form-control" rows="6" name="message" placeholder="Write Message" required></textarea>
								</div>
								<input type="hidden" name="article_id" value="<?=$this->e($article['id'])?>">
							</div>
							<button type="submit" class="btn send-btn">Post Comment</button>
						</form>
					</div>	
				<?php endif; ?>		
				</div>