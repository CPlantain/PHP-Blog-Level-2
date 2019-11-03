<?php $this->layout('admin/layout', ['title' => 'AdminLTE Categories']); ?>


<div class="box-body">
  <div class="">
  <div class="box-header">
    <h2 class="box-title">All categories</h2>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <a href="add-category" class="btn btn-success btn-lg">Add new</a> <br> <br>
    <table id="example" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>Articles</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($categories as $category) : ?>
        <tr>
          <td><?=$category['id']?></td>
          <td><?=$category['name']?></td>
          <td><?=$category['count']?></td>
          <td>
            <a href="edit-category?id=<?=$category['id']?>" class="btn btn-warning">
              <i class="fa fa-pencil"></i>
            </a>
            <a href="delete-category?id=<?=$category['id']?>" class="btn btn-danger" onclick="return confirm('Are you sure?');">
              <i class="fa fa-remove"></i>
            </a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>
          