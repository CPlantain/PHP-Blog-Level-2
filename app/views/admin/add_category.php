<?php $this->layout('admin/layout', ['title' => 'AdminLTE New Category']); ?>

<div class="box-body">
  <div class="">
  <div class="box-header">
    <h2 class="box-title">Create new category</h2>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="col-md-6">
          <form action="add-category-handler" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Category name</label>
              <input name="name" type="text" class="form-control" id="exampleInputEmail1" >
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-success">Create</button>
            </div>
          </form>
      </div>
  </div>
  <!-- /.box-body -->
</div>
