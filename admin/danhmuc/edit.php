<div class="mb10">
<<<<<<< HEAD
    <h3>CẬP NHẬT DANH MỤC</h3>
=======
    <h2>THÊM MỚI DANH MỤC</h2>
>>>>>>> 8910cf87419942b3a37132e1b1a399d3b86bc890
</div>
<div class="formcontent">
    <form action="index.php?act=editdm" method="post">
        <div>
<<<<<<< HEAD
            <label>Tên danh mục</label><br>
=======
            <label style="font-weight: bold; color:#009879;">Tên danh mục</label><br><br>
>>>>>>> 8910cf87419942b3a37132e1b1a399d3b86bc890
            <input type="text" name="tendm" value="<?php echo $onedm['name'] ?>" required>
        </div><br>
        <input type="hidden" name="iddm" value="<?php echo $onedm['id'] ?>">
        <input name="editdm" type="submit" value="Cập nhật">
        <input type="reset" value="Nhập lại">
        <a href="index.php?act=listdm"><input type="button" value="Danh sách"></a><br>
    </form>
</div>