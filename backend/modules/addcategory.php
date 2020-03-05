<?php  
      include("connection.php");
      if (isset($_POST["addNew"])) {
        $cat_name = $_POST["cat_name"];
        $status = isset($_POST["status"])?1:0;
        $date_create = date("y/m/d h:i:s");
        $sqladd = "INSERT INTO `category`(`cat_name`, `status`, `date_create`) 
        VALUES ('$cat_name','$status','$date_create')";
        mysqli_query($conn, $sqladd);
        header('location: index.php?module=listcategory ');
      }
?>
<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Quick Example</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    
    <form role="form" method="post">
      <div class="box-body">
        <div class="form-group">
          <label for="cat_name">Tên danh mục</label>
          <input type="text" class="form-control" name="cat_name" id="cat_name" placeholder="Nhập tên danh mục" />
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="1" id="status" name="status"> trạng thái
          </label>
        </div>
      <!-- /.box-body -->

      <div class="box-footer">
        <button type="submit" class="btn btn-primary" name="addNew">Thêm mới</button>
      </div>
    </form>
  </div>
  <!-- /.box -->
</div>