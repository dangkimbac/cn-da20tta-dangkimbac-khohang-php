
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Đăng nhập</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <form action="xli_login.php" method="post">
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Đăng nhập</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="txtTenDangNhap" type="text" name = "txtTenDangNhap" placeholder="" />
                                                <label for="txtTenDangNhap">Tên đăng nhập</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="txtMatKhau" type="password" name = "txtMatKhau" placeholder="Password" />
                                                <label for="txtMatKhau">mật khẩu</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                            <button class="btn btn-primary" type="submit">Đăng nhập</button> 
                                                &nbsp;&nbsp;&nbsp;
                                                <a class="btn btn-primary" href="">Huỷ bỏ</a>
                                            </div>
                                           
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                       
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content between small">
                            <div class="text-muted">Copyright &copy; Kho hàng MinhPhuong 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</form>
</html>
