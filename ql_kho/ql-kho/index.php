<?php
    include_once("header.php");
?>
<h1 class="tieudeform">Sản phẩm mới nhất</h1>
    <table class = "table table-hover ">
        <thead class="table-primary">
            <tr>
            <th>Mã sản phẩm </th>
            <th>Tên sản phẩm</th>
            <th>Màu sắc</th>
            <th>Loại sản phẩm</th>
            <th>Thương hiệu</th>
            <th>Kích thước</th>
            <th>Hình ảnh</th>
            <th>Đơn Giá</th>
            <!-- <th style="text-align:center"colspan="2">Xử lý</th> -->
        </tr>
        </thead>
        <?php
        
        // $sql = "SELECT * FROM sanpham ORDER BY Masanpham ASC";
        
        $sql = "SELECT sanpham.*, loaisanpham.tenloaisanpham,thuonghieu.tenthuonghieu
        FROM sanpham
        JOIN loaisanpham ON sanpham.loaisanpham = loaisanpham.maloaisanpham
        JOIN thuonghieu ON sanpham.mathuonghieu = thuonghieu.mathuongHieu

        ORDER BY masanpham ASC";

// Thực hiện câu truy vấn và hiển thị kết quả
//...






        $kq = $conn->query($sql) or die("Không thể xem sản phẩm");
        while ($row = mysqli_fetch_array($kq)) {
            echo ("<tr>");
            $masanpham = $row["masanpham"];
            echo ("<td>" . $row["masanpham"] . "</td>");
            echo ("<td>" . $row["tensanpham"] . "</td>");
            echo ("<td>" . $row["mausac"] . "</td>");
            echo ("<td>" . $row["tenloaisanpham"] . "</td>");
            echo ("<td>" . $row["tenthuonghieu"] . "</td>");
            echo ("<td>" . $row["kichthuoc"] . "</td>");
            echo ("<td><img class = 'img-fluid' height='100px' width='100px'  src='" . $row['hinhanh'] . "' alt='Hình ảnh sản phẩm'></td>");
            echo ("<td>" . $row["dongia"] . "</td>");
            // echo ("<td><a class='btn btn-primary' href='suasp.php?mm=$masanpham'>Sửa</a></td>");
            // echo ("<td><a class='btn btn-danger' href='xoasp.php?mm=$masanpham'>Xóa</a></td>");


            /* echo ("<td>");
            ?>
            <a onclick = "return confirm('Bạn có thật sự muốn xoá không')" class="btn btn-danger" href="xoasp.php?mm=<?php echo $masanpham;?>">Xóa</a>
            <?php
            echo ("</td>");


            echo ("</tr>");*/
        }
        ?>
    </table><br>
    <!-- <a class='btn btn-success' href='themsp.php'>Thêm sản phẩm</a> -->
    <?php
    include("footer.php");
?>
</body>
</html>