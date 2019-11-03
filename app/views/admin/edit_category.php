<?php $this->layout('admin/layout', ['title' => 'AdminLTE Edit Category']); ?>

<div class="box-body">
  <div class="">
  <div class="box-header">
    <h2 class="box-title">Update category</h2>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="col-md-6">
          <form action="edit-category-handler" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Category name</label>
              
              <input name="name" type="text" class="form-control" id="exampleInputEmail1" value="<?=$category['name']?>">

              <input name="id" type="hidden" value="<?=$category['id']?>">

            </div>

            <div class="form-group">
              <button class="btn btn-warning">Update</button>
            </div>
          </form>
      </div>
  </div>
  <!-- /.box-body -->
</div>
         