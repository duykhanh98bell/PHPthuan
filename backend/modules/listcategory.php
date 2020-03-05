<?php 
include("connection.php");
?>
<div class="col-sm-12">
  <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
    <tr role="row">
      <th>STT</th>
      <th>Tên danh mục</th>
      <th>Trạng thái</th>
      <th>Ngày tạo</th>
      <th>Thực thi</th>
    </tr>
    <?php 
      $sqlselect = "SELECT `cat_id`, `cat_name`, `status`, `date_create` FROM `category`";
      $result = mysqli_query($conn, $sqlselect);
      $i=0;
      if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            $i++;
     ?>
      <tr role="row" class="odd">
       	<td><?php echo $i; ?></td>
        <td><?php echo $row["cat_name"]; ?></td>
        <td><?php echo isset($row["status"])?"còn hàng":"hết hàng"; ?></td>
        <td><?php echo date( "d/m/y h:i:s", strtotime($row["date_create"])); ?></td>
        <td>
          <a href="index.php?module=editcategory&id=<?php echo $row["cat_id"]; ?>">Sửa</a>
          <a href="index.php?module=deletecategory&id=<?php echo $row["cat_id"]; ?>" onclick= "return confirm('xác nhận xóa')" >Xóa</a>
        </td>
      </tr>
      <?php } 
    }
    ?>

  </table>
</div>