<div class="col-md-6">
  <!-- general form elements -->
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Quick Example</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <?php  
      if (isset($_POST["addNew"])) {
        $folder = "uploads/";
        if (isset($_FILES["image"]) && $_FILES["image"]["name"] !="" ) {
          if ($_FILES["image"]["type"] == "image/jpeg" || $_FILES["image"]["type"] == "image/jpg" || $_FILES["image"]["type"] == "image/png" || $_FILES["image"]["type"] == "image/gif" ) {
            if ($_FILES["image"]["size"] < 5000000 ) {
              if ($_FILES["image"]["error"] == 0) {
                
                  $fileName = $_FILES["image"]["tmp_name"];
                  move_uploaded_file($fileName, "./".$folder.$_FILES["image"]["name"]);
                  $fileIMG = $folder.$_FILES["image"]["name"];

              }else
              echo "lỗi file";
            }else
            echo "ảnh quá lớn";
          }else
          echo "sai định dạng";
        }else
        echo "file rỗng" .$_FILES["image"]["name"];
      

        include('connection.php');
        if (isset($_POST["addNew"])) {
          $pro_name= $_POST["pro_name"];
          $cat_id = $_POST["cat_id"];
          $style_id = $_POST["style_id"];
          $size_id = $_POST["size_id"];
          $colors_id = $_POST["colors_id"];
          $brand_id = $_POST["brand_id"];
          $Price = $_POST["Price"];
          $Sale = $_POST["Sale"];
          /*$image = $_POST["image"];*/
          $Desception= $_POST["Desception"];
          $status = isset($_POST["status"])?"1":"0";
          $date_create = date("y/m/d h:i:s");

          $sqladdpro = "
          INSERT INTO `product`(`pro_name`, `cat_id`, `style_id`, `size_id`, `colors_id`, `brand_id`,`price`, `sale_off`,`img`,`desciption`, `status`, `date_create`) 
          VALUES ('$pro_name','$cat_id','$style_id','$size_id','$colors_id','$brand_id','$Price','$Sale','$fileIMG','$Desception','$status','$date_create')"
          ;
          mysqli_query($conn, $sqladdpro);
          header('location: index.php?module=listproduct ');
        }
      }
    ?>
    
    <form role="form" method="post" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group">
          <label>Tên sản phẩm</label>
          <input type="text" class="form-control" name="pro_name" id="pro_name" placeholder="Nhập tên sản phẩm" />
        </div>

        <div class="form-group">
          <label>Loại sản phẩm</label>
          <select name="cat_id" id="" class="form-control">
            <?php  
                $sqlcategory = "SELECT `cat_id`, `cat_name`, `status`, `date_create` FROM `category`";
                $result = mysqli_query($conn, $sqlcategory);
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <option name="cat_id" value="<?php echo $row["cat_id"]; ?>"><?php echo $row["cat_name"]; ?></option>
          <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label>Kiểu</label>
          <select name="style_id" id="" class="form-control">
            <?php  
                $sqlstyle = "SELECT `style_id`, `style_name` FROM `style`";
                $result = mysqli_query($conn, $sqlstyle);
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <option value="<?php echo $row["style_id"]; ?>"><?php echo $row["style_name"]; ?></option>
          <?php } ?>
          </select>
        </div>

        <div class="form-group">
          <label>Cỡ</label>
          <select name="size_id" id="" class="form-control">
            <?php  
              $sqlsize = "SELECT `size_id`, `size_numbers` FROM `size`";
              $result = mysqli_query($conn, $sqlsize);
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <option value="<?php echo $row["size_id"]; ?>"><?php echo $row["size_numbers"]; ?></option>
          <?php } ?>
          </select>
        </div>

        <div class="form-group">
          <label >Màu</label>
          <select name="colors_id" id="" class="form-control">
            <?php  
              $sqlcolor = "SELECT `colors_id`, `colors_name` FROM `colors`";
              $result = mysqli_query($conn, $sqlcolor);
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <option value="<?php echo $row["colors_id"]; ?>"><?php echo $row["colors_name"]; ?></option>
          <?php } ?>
          </select>
        </div>

        <div class="form-group">
          <label>Thương hiệu</label>
          <select name="brand_id" id="" class="form-control">
            <?php  
              $sqlbrand = "SELECT `brand_id`, `brand_name` FROM `brand`";
              $result = mysqli_query($conn, $sqlbrand);
                while($row = mysqli_fetch_assoc($result)) {
            ?>
            <option value="<?php echo $row["brand_id"]; ?>"><?php echo $row["brand_name"]; ?></option>
          <?php } ?>
          </select>
        </div>

        <div class="form-group">
          <label >Price</label>
          <input type="number" name="Price" class="form-control">
        </div>

        <div class="form-group">
          <label >Sale</label>
          <input type="number" name="Sale" class="form-control">
        </div>

        <div class="form-group">
          <label >image</label>
          <input type="file" name="image" />
        </div>

        <div class="form-group">
          <label for="cat_name">Mô tả</label>
          <input type="text" name="Desception" class="form-control">
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