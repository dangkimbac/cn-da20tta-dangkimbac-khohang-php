<?php
    include_once("header.php");
?>
<?php
$ma = $_REQUEST["mm"];
$sql = "SELECT * FROM phieunhaphang  WHERE sophieunhap='" . $ma . "'";

$kq = $conn->query($sql) or die("Không thể sửa phiếu nhập hàng");

while ($row = mysqli_fetch_array($kq)) {
    echo ("<form name='frmSuaSp' action='xli_suaphieunhaphang.php' method='post'enctype='multipart/form-data'>");
    echo ("<h1 class='tieudeform'>SỬA PHIẾU NHẬP HÀNG</h1>");
    echo ("<div class = 'form-group' ><label>Tên đăng nhập</label>");
    //-----
    $nhanvien=$row["tendangnhap"];
    echo ("<select name = 'txttennhanvien' class = 'form-select'>");
    $query = "SELECT * FROM nhanvien";
    $res = $conn->query($query);
    while ($r = mysqli_fetch_assoc($res)) {
        if($r['tendangnhap']==$nhanvien)
            echo "<option selected value='" . $r['tendangnhap'] . "'>" . $r['tendangnhap'] . "</option>";
        else
            echo "<option value='" . $r['tendangnhap'] . "'>" . $r['tendangnhap'] . "</option>";
    }
    echo ("</select>");
    echo("</div>");
    echo ("<div class = 'form-group' ><label>Số phiếu nhập:</label>  <input type='text' class='form-control' name='txtsophieunhap' value='" . $row["sophieunhap"] . "' readonly></div>");
    echo ("<div class = 'form-group' ><label>Ngày nhập hàng:</label>  <input type='date' class='form-control' name='txtngaynhaphang' value='" . $row["ngaynhaphang"] . "' </div>");

    //.....
    echo ("<div class = 'form-group' ><label>Tên kho:</label>");
    //-----
    $makho=$row["makho"];
    echo ("<select name = 'txtmakho' class='form-select'>");
    $query = "SELECT * FROM khohang";
    $res = $conn->query($query);
    while ($r = mysqli_fetch_assoc($res)) {
        if($r['makho']==$makho)
            echo "<option selected value='" . $r['makho'] . "'>" . $r['tenkho'] . "</option>";
        else
            echo "<option value='" . $r['makho'] . "'>" . $r['tenkho'] . "</option>";
    }
    echo ("</select>");
    echo("</div>");
    //----
    echo ("<div class = 'form-group' ><label>Tên nhà cung cấp:</label>");
    //-----
    $manhacungcap=$row["manhacungcap"];
    echo ("<select name = 'txtmanhacungcap' class='form-select'>");
    $query = "SELECT * FROM nhacungcap";
    $res = $conn->query($query);
    while ($r = mysqli_fetch_assoc($res)) {
        if($r['manhacungcap']==$manhacungcap)
            echo "<option selected value='" . $r['manhacungcap'] . "'>" . $r['tennhacungcap'] . "</option>";
        else
            echo "<option value='" . $r['manhacungcap'] . "'>" . $r['tennhacungcap'] . "</option>";
    }
    echo ("</select>");
    echo("</div><br>"); 
    //----
    echo ("<input class = 'btn btn-primary' type='submit' name='sbmsuaphieunhaphang' value='Sửa'>");
    echo ("</form>");
   }
   
?>
  <?php
    include("footer.php");
?>