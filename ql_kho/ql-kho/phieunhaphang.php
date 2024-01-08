<?php
include_once("header.php");
?>

<body>
<h1 class="tieudeform">QUẢN LÝ PHIẾU NHẬP HÀNG</h1>
<div><a class='btn btn-success' href='themphieunhaphang.php'>Thêm phiếu nhập hàng</a></div> <br>
<div class="table-responsive">
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>Số phiếu </th>
            <th>Tên nhân viên</th>
            <th>Số điện thoại</th>
            <th>Ngày nhập hàng</th>
            <th>Tên kho</th>
            <th>Tên nhà cung cấp</th>
            <th> &nbsp; </th>

            <th colspan="2" style="text-align:center">Xử lý</th>
        </tr>
    </thead>
    <?php

$sql = "SELECT phieunhaphang.*, nhanvien.hoten, nhanvien.sodienthoai, khohang.tenkho, nhacungcap.tennhacungcap
FROM phieunhaphang 
JOIN nhanvien ON phieunhaphang.tendangnhap = nhanvien.tendangnhap
JOIN khohang ON phieunhaphang.makho = khohang.makho
JOIN nhacungcap ON phieunhaphang.manhacungcap = nhacungcap.manhacungcap
 ORDER BY sophieunhap ASC";

    $kq = $conn->query($sql) or die("Không thể xem phiếu nhập hàng");
    while ($row = mysqli_fetch_array($kq)) {
        echo ("<tr>");
        $sophieunhap = $row["sophieunhap"];
        echo ("<td>" . $row["sophieunhap"] . "</td>");
        echo ("<td>" . $row["hoten"] . "</td>");
        echo ("<td>" . $row["sodienthoai"] . "</td>");
        echo ("<td>" . $row["ngaynhaphang"] . "</td>");
        echo ("<td>" . $row["tenkho"] . "</td>");
        echo ("<td>" . $row["tennhacungcap"] . "</td>");
        echo ("<td><a class='btn btn-info' href='chitietphieunhap.php?mm=$sophieunhap'>Thêm chi tiết</a></td>");
        echo ("<td><a class='btn btn-primary' href='suaphieunhaphang.php?mm=$sophieunhap'>Sửa</a></td>");
        // echo ("<td><a class='btn btn-danger' href='xoaphieunhaphang.php?mm=$sophieunhap'>Xóa</a></td>");


        echo ("<td>");
            ?>
            <a onclick = "return confirm('Bạn có thật sự muốn xoá không')" class="btn btn-danger" href="xoaphieunhaphang.php?mm=<?php echo $sophieunhap;?>">Xóa</a>
            <?php
            echo ("</td>");


        echo ("</tr>");
    }
    ?>
</table>
</div>
<?php
include("footer.php");
?>
</body>
</html>
