<?php $this->layout('admin/layout', ['title' => 'AdminLTE Users']); ?>

<div class="box-body">
  <div class="">
  <div class="box-header">
    <h2 class="box-title">All users</h2>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>E-mail</th>
          <th>Role</th>
          <th>Status</th>
          <th>Comments</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user) : ?>
          <tr>
            <td><?=$user['id']?></td>
            <td><?=$user['username']?></td>
            <td><?=$user['email']?></td>
            <td>

              <?php if ($user['roles_mask'] == 1) : ?>
                Admin
              <?php else : ?>
                Regular user
              <?php endif; ?>

            </td>
            <td>
              
                <?php if ($user['verified'] == 1) : ?>
                  <span class="btn btn-success">Confirmed</span>
                <?php else : ?>
                  <span class="btn btn-danger">Not confirmed</span>
                <?php endif; ?>  
                
            </td>
            <td><?=$user['count']?></td>
            <td>              
              <a href="delete-user?id=<?=$user['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure?');">
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