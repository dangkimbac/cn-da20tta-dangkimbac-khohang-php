<?php
    include_once("header.php");
    $sophieuxuat="";
    if (isset($_GET['mm'])) {
        $sophieuxuat = $_GET['mm'];
    }


    ?>

    <h1 class="tieudeform">Thêm Chi tiết phiếu xuất</h1>

<form name="frmMon" action="xli_themchitietphieuxuat.php" method="post" enctype="multipart/form-data">

          

            <div class="form-group">
                <label>Số phiếu xuất</label>
                <input class = "form-control" type = "" name="txtsophieuxuat" readonly value = "<?php echo $sophieuxuat;?>">

                </div>
                <div class="form-group">
                <label>Tên sản phẩm</label>
                <select class="form-select" name="txtsanpham" required>
                    <?php
                   // include("ketnoi.php");
                    $query = "SELECT * FROM sanpham";
                    $result = $conn->query($query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['masanpham'] . "'>" . $row['tensanpham'] . "</option>";
                    }
                    ?>
                </select>
                </div>
                <div class="form-group">
                    <label>Số lượng xuất</label>
                    <input class="form-control" type="number" name="txtsoluongxuat" />
                </div>

            <!--<div class="form-group">
            <label>Đơn vị tính</label>
            <input class="form-control"  type="text" name="txtdonvitinh" /> <br>
        </div>-->





      <!--  <div class="form-group">
                <label>Đơn vị tính</label>
                <select class="form-select" name="txtdonvitinh" required>
                    <?php
                /*    include("ketnoi.php");
                    $query = "SELECT * FROM donvitinh";
                    $result = $conn->query($query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['madonvitinh'] . "'>" . $row['tendonvitinh'] . "</option>";
                    }
                   */ ?>
                </select> <br>
                </div>

                -->
<p></p>
    <input class="btn btn-success" type="submit" name="Themchitietphieuxuat" value="Lưu " />
    <a class='btn btn-success' href='phieuxuathang.php'>Quay lại</a><br><br>

</form>








<h3 >Chi tiết phiếu xuất hàng số <span style="red"><?php echo $sophieuxuat;?></span></h3>

    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
            <th>Id</th>

                <th>Số phiếu xuất</th>
                <th>Tên sản phẩm</th>
                <th>Số lượng xuât</th>

                <th style="text-align:center"colspan="2">Xử lý</th>

            </tr>
        </thead>
        <?php
        // if (isset($_GET['mm'])) {
            // $sophieuxuat = $_GET['mm'];
            $sql = "SELECT  * FROM chitietphieuxuat, sanpham, donvitinh  WHERE chitietphieuxuat.masanpham = sanpham.masanpham
                    AND sanpham.donvitinh = donvitinh.madonvitinh 

             AND chitietphieuxuat.sophieuxuat = '$sophieuxuat' ORDER BY sophieuxuat";

            $kq = $conn->query($sql) or die("Không thể xem chi tiết phiếu nhập hàng");
            while ($row = mysqli_fetch_array($kq)) {
                echo ("<tr>");
                $id = $row["ID"];

                echo ("<td>" . $row["ID"] . "</td>");

                echo ("<td>" . $row["sophieuxuat"] . "</td>");
                echo ("<td>" . $row["tensanpham"] . "</td>");
                echo ("<td>" . $row["soluongxuat"] . "</td>");

                echo ("<td><a class='btn btn-primary' href='suachitietphieuxuat.php?id=$id'>Sửa</a></td>");
    
    
                echo ("<td>");
                ?>
                <a onclick = "return confirm('Bạn có thật sự muốn xoá không')" class="btn btn-danger" href="xoachitietphieuxuat.php?id=<?php echo $id;?>&spx=<?php echo $sophieuxuat;?>">Xóa</a>
                <?php
                echo ("</td>");

                echo ("</tr>");
            }
        // } 
        ?>
    </table>
   
    <?php
    include("footer.php");
    ?>
    </body>
    </html>
