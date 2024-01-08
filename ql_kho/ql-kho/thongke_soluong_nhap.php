<?php
require_once("header.php");
?>
<h1 class="tieudeform">Thống kê số lượng nhập</h1>
<?php
    $sql = "select sp.tensanpham, sum(soluongnhap) as sl from chitietphieunhap ct, sanpham sp WHERE ct.masanpham = sp.masanpham group by ct.masanpham";
    // echo $sql;
    $result = $conn->query($sql);
    echo "<table class = 'table table-hover'>";
    echo "<tr><th>Tên sản phẩm</th><th>Số lượng</th></tr>";
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> ";
        echo "<td>" . $row["tensanpham"]. " </td> ";
        echo "<td>". $row["sl"]. "</td>";
        echo "</td>";
    }
    echo "</table>";
    } else {
    echo "0 results";
    }

?>
<?php
require_once("footer.php");
?>