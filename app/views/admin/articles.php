<?php $this->layout('admin/layout', ['title' => 'AdminLTE Articles']); ?>

<div class="box-body">
  <div class="">
  <div class="box-header">
    <h2 class="box-title">All articles</h2>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <a href="add-article" class="btn btn-success btn-lg">Add new</a> <br> <br>
    <table id="example" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Category</th>
          <th>Author</th>
          <th>Pubdate</th>
          <th>Picture</th>
          <th>Comments</th>
          <th>Actions</th>          
        </tr>
      </thead>
      <tbody>
        <?php foreach ($articles as $article) : ?>
          <tr>
            <td><?=$article['id']?></td>
            <td><?=$article['title']?></td>
            <td><?=$article['name']?></td>
            <td><?=$article['username']?></td>
            <td><?=date('d.m.Y', strtotime($article['pub_date']))?></td>
            <td>
              <?php if($article['picture']) : ?>
                <img src="../uploads/<?=$article['picture']?>" width="200">
              <?php endif; ?>
            </td>
            <td><?=$article['count']?></td>          
            <td>
              <a href="edit-article?id=<?=$article['id']?>" class="btn btn-warning">
                <i class="fa fa-pencil"></i>
              </a>
              <a href="delete-article?id=<?=$article['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure?');">
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
