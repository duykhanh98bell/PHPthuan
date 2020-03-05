<?php 
include("connection.php");
?>
<div class="col-sm-12">
  <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
    <tr role="row">
      <th>STT</th>
      <th>Tên sản phẩm</th>
      <th>Cat_id</th>
      <th>Style_id</th>
      <th>Size_id</th>
      <th>Colors_id</th>
      <th>Brand_id</th>
      <th>Price</th>
      <th>Sale_off</th>
      <th>Ảnh</th>
      <th>Desciption</th>
      <th>Status</th>
      <th>Ngày tạo</th>
    </tr>
    <?php 
      $sqlselect = "
      SELECT `pro_id`, `pro_name`, `cat_id`, `style_id`, `size_id`, `colors_id`, `brand_id`,`price`, `sale_off`, `img`, `desciption`, `status`, `date_create` 
      FROM `product` 
      ";
      $result = mysqli_query($conn, $sqlselect);
      $i=0;
      if (mysqli_num_rows($result) > 0) {
          while($row = mysqli_fetch_assoc($result)) {
            $i++;
     ?>
      <tr role="row" class="odd">
       	<td><?php echo $i; ?></td>
        <td><?php echo $row["pro_name"]; ?></td>
        <td><?php echo $row["cat_id"]; ?></td>
        <td><?php echo $row["style_id"]; ?></td>
        <td><?php echo $row["size_id"]; ?></td>
        <td><?php echo $row["colors_id"]; ?></td>
        <td><?php echo $row["brand_id"]; ?></td>
        <td><?php echo $row["price"]; ?></td>
        <td><?php echo $row["sale_off"]; ?></td>
        <td><?php echo $row["img"]; ?></td>
        <td><?php echo $row["desciption"]; ?></td>
        <td><?php echo isset($row["status"])?"còn hàng":"hết hàng"; ?></td>
        <td><?php echo date( "d/m/y h:i:s", strtotime($row["date_create"])); ?></td>
        <td>
          <a href="index.php?module=editproduct&id=<?php echo $row["pro_id"]; ?>">Sửa</a>
          <a href="index.php?module=delproduct&id=<?php echo $row["pro_id"]; ?>" onclick= "return confirm('xác nhận xóa');" >Xóa</a>
        </td>
      </tr>
      <?php } 
    }
    ?>

  </table>
</div>