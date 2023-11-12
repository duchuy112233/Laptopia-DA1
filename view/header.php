<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dự án 01</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="../css/view.css">
</head>
<body>
    <div class="container">
        <div class="top-header"></div>
        <div class="bottom-header">
            <a href="index.php"><img src="../image/logo1.png"></a>
            <div class="timkiem-header">
                <form class="search-box" method="post" action="#">
                    <input type="text" name="kyw" placeholder="Nhập tên sản phẩm...">
                    <button type="submit" class="search-btn"><i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i></button>
                </form>
                <div class="form-menu">
                    <div class="dn-header">
                        <?php if(isset($_SESSION['user'])) { ?>
                            <li class="nav-item"><a href="index.php?act=dangnhap"><i class="fa-solid fa-user" style="color: #000000;"></i> <?php echo $_SESSION['user']['user'] ?> </i></a>
                            <ul class = "submenu" >
                                <li class="header-tk"> <a  href="#">Quên mật khẩu </a></li>
                                <li class="header-tk"> <a  href="#">Cập nhật tài khoản </a></li>
                                <?php if($_SESSION['user']['role']==1){ ?>
                                <li class="header-tk"> <a  href="../admin/index.php">Đăng nhập vào ADMIN</a></li>
                                <?php } ?>
                                <li class="header-tk"> <a  href="index.php?act=dangxuat">Đăng xuất</a></li>
                            </ul></li>
                        <?php } else { ?>
                            <a href="index.php?act=dangnhap"><i class="fa-solid fa-user" style="color: #000000;"></i> Đăng nhập </i></a>
                        <?php } ?> 
                    </div>
                    <div class="giohang-icon">
                        <a href="index.php?act=addtocart"> <i class="fa-solid fa-cart-shopping" style="color: #000000;"></i> Giỏ hàng </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="menu">
            <ul class="menu-row">
                <li class="nav-item">
                    <a href="index.php">TRANG CHỦ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">DANH MỤC</a>
                    <ul class="submenu">
                        <!-- Danh mục -->
                        <?php foreach($listdm as $dm) : ?>
                            <li><a href=""><?php echo $dm['name'] ?></a></li>
                        <?php endforeach ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="index.php?act=lienhe">LIÊN HỆ</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?act=gopy">GÓP Ý</a>
                </li>
                <li class="nav-item">
                    <a href="index.php?act=hoidap">HỎI ĐÁP</a>
                </li>
            </ul>
        </div>