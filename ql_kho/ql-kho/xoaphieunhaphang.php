

<?php
include("ketnoi.php");
$ma=$_REQUEST["mm"];

$sql = "SELECT * FROM chitietphieunhap WHERE sophieunhap='".$ma."'";

$result = $conn->query($sql);
if($result->num_rows>0)
{
    $sql1 = "delete from chitietphieunhap where sophieunhap='".$ma."';";
    // $kq = $conn -> query($sql) or die("Không thể xóa ");

    $sql1.="delete from phieunhaphang where sophieunhap='".$ma."';";
    // $kq_1 = $conn -> query($sql_1) or die("Không thể xóa ");

}
else
{
    $sql1.="delete from phieunhaphang where sophieunhap='".$ma."';";
}
echo $sql1;
$sql1.="UPDATE sanpham SET soluongton='(soluongton-$sln)' WHERE masanpham='$sp'";
$kq = $conn -> multi_query($sql1) or die("Không thể xóa ");
echo ("<script language='javascript'>alert('Xóa thành công');window.location.assign('phieunhaphang.php');</script>");
?>