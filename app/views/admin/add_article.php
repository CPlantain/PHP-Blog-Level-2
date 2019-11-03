<?php $this->layout('admin/layout', ['title' => 'AdminLTE New Article']); ?>

<div class="box-body">
  <div class="">
  <div class="box-header">
    <h2 class="box-title">Create new article</h2>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="col-md-6">
          <form action="add-article-handler" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input name="title" type="text" class="form-control" id="exampleInputEmail1" >
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <textarea name="description" class="form-control"></textarea>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Content</label>
              <textarea name="content" class="form-control" rows="7"></textarea>
            </div>

            <div class="form-group">
              <label>Category</label>
              <select name="category" class="form-control select2" style="width: 100%;">

                <?php foreach ($categories as $category): ?>
                  <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
                <?php endforeach; ?>
        
              </select>
            </div>

            <div class="form-group">
              <label>Picture</label>
              <input name="picture" type="file">
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-success">Create</button>
            </div>
          </form>
      </div>
  </div>
  <!-- /.box-body -->
</div>
