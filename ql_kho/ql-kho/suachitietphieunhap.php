<?php
    include_once("header.php");
   
?>
<?php
//$sophieu = $_REQUEST["sp"];
//$masp = $_REQUEST["msp"];
$id = $_REQUEST["id"];
$sql = "SELECT * FROM chitietphieunhap  WHERE id='" . $id . "'";

$kq = $conn->query($sql) or die("Không thể sửa phiếu nhập hàng");

while ($row = mysqli_fetch_array($kq)) {
    echo ("<form name='frmSuaSp' action='xli_suachitietphieunhap.php' method='post'enctype='multipart/form-data'>");
    echo ("<h1 class='tieudeform'>SỬA CHI TIẾT PHIẾU NHẬP </h1>");
    //-----
    echo ("<div class = 'form-group' ><label>Id :</label>  <input type='text' class='form-control' name='txtid' value='" . $row["ID"] . "'readonly></div>");

    echo ("<div class = 'form-group' ><label>Số phiếu nhập:</label>  <input type='text' class='form-control' name='txtsophieunhap' value='" . $row["sophieunhap"] . "'readonly></div>");

    // echo ("<div class = 'form-group' ><label>Số phiếu nhập:</label>");

    // $spn=$row["sophieunhap"];
    // echo ("<select name = 'txtsophieunhap' class = 'form-select'>");
    // $query = "SELECT * FROM phieunhaphang";
    // $res = $conn->query($query);
    // while ($r = mysqli_fetch_assoc($res)) {
        // if($r['sophieunhap']==$spn)
            // echo "<option selected value='" . $r['sophieunhap'] . "'>" . $r['sophieunhap'] . "</option>";
        // else
            // echo "<option value='" . $r['sophieunhap'] . "'>" . $r['sophieunhap'] . "</option>";
    // }
    // echo ("</select>");
    // echo("</div>");
    echo ("<div class = 'form-group' ><label>Số lượng nhập:</label>  <input type='text' class='form-control' name='txtsoluongnhap' value='" . $row["soluongnhap"] . "' </div>");

    //.....
    echo ("<div class = 'form-group' ><label>Tên sản phẩm:</label>");
    //-----
    $sp=$row["masanpham"];
    echo ("<select name = 'txtmasanpham' class='form-select'>");
    $query = "SELECT * FROM sanpham";
    $res = $conn->query($query);
    while ($r = mysqli_fetch_assoc($res)) {
        if($r['masanpham']==$sp)
            echo "<option selected value='" . $r['masanpham'] . "'>" . $r['tensanpham'] . "</option>";
        else
            echo "<option value='" . $r['masanpham'] . "'>" . $r['tensanpham'] . "</option>";
    }
    echo ("</select><br>"); 
    echo("</div>");
    //----
    //-----
    echo ("<div class = 'form-group' >");
    echo ("<input class = 'btn btn-primary' type='submit' name='sbmsua' value='Sửa'>");
    echo ("</div>");
    echo ("</form>");
   }
   
?>
  <?php
    include("footer.php");
?>