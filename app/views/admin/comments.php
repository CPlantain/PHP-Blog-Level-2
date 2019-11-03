<?php $this->layout('admin/layout', ['title' => 'AdminLTE Comments']); ?>

<div class="box-body">
  <div class="">
  <div class="box-header">
    <h2 class="box-title">All comments</h2>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    
    <table id="example" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Comment</th>
          <th>Author</th>
          <th>Article</th>
          <th>Pubdate</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($comments as $comment) : ?>
          <tr>
            <td><?=$comment['id']?></td>
            <td><?=$comment['message']?></td>
            <td><?=$comment['username']?></td>
            <td><?=$comment['title']?></td>
            <td><?=date('d.m.Y', strtotime($comment['pub_date']))?></td>
            <td>
              <a href="delete-comment?id=<?=$comment['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure?');">
                <i class="fa fa-remove"></i>
              </a>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
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
  <!-- /.box-body -->
</div>