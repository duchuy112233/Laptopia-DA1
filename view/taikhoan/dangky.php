<div id="wrapper">
<h3>Đăng ký</h3><br>
    <form action="index.php?act=dangky" method="post">
        <div class="form-group">
            <p><label for="">Tên người dùng</label></p>
            <input type="text" name="user" placeholder="Tên người dùng">
        </div>
        <div class="form-group">
            <p><label for="">Email</label></p>
            <input type="email" name="email" placeholder="Mật khẩu">
        </div>
        <div class="form-group">
            <p><label for="">Mật khẩu</label></p>
            <input type="password" name="pass" placeholder="Mật khẩu">
        </div>
        <a href=""><p class="mk">Quên mật khẩu?</p></a><br>
        <input type="submit" name="dangky" value="Đăng ký"><br><br>
        <p style="color: red;">
        <?php 
            if (isset($thongbao2) && !empty($thongbao2)) {
            echo $thongbao2;
            }?>
        </p><br>
        <p>Bạn đã có tài khoản? <a href="index.php?act=dangnhap"><span class="dk">Đăng nhập ngay</span></a></p><br>
        <span class="span">Hoặc đăng ký</span>
        <div class="social-container">
                <a href="#" class="social"><i class="fa-brands fa-facebook" style="color: #000000;"></i></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g" style="color: #000000;"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in" style="color: #000000;"></i></a>
        </div>
    </form>
</div>