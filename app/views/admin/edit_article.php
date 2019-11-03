<?php $this->layout('admin/layout', ['title' => 'AdminLTE Edit Article']); ?>

<div class="box-body">
  <div class="">
  <div class="box-header">
    <h2 class="box-title">Edit article</h2>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
      <div class="col-md-6">
          <form action="edit-article-handler" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputEmail1">Title</label>
              <input name="title" type="text" class="form-control" id="exampleInputEmail1" value="<?=$article['title']?>">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Description</label>
              <textarea name="description" class="form-control" rows="3"><?=$article['description']?></textarea>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Content</label>
              <textarea name="content" class="form-control" rows="7"><?=$article['content']?></textarea>
            </div>

            <div class="form-group">
              <label>Category</label>
              <select name="category" class="form-control select2" style="width: 100%;">
                  <option value="<?=$article['category_id']?>"><?=$article['current_cat']?></option>

                <!-- вывод списка категорий -->
                <?php foreach ($categories as $category): ?>
                  <option value="<?= $category['id']; ?>"><?= $category['name']; ?></option>
                <?php endforeach; ?>
        
              </select>
            </div>

            <div class="form-group">
              <label>Picture</label>
              <input name="picture" type="file">
              <img src="../uploads/<?=$article['picture']?>" width="200" alt="">
            </div>

            <input type="hidden" name="id" value="<?=$article['id']?>">
            <input type="hidden" name="old_picture" value="<?=$article['picture']?>">

            <div class="form-group">
              <button type="submit" class="btn btn-warning">Update</button>
            </div>
          </form>
      </div>
  </div>
  <!-- /.box-body -->
</div>