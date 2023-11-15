<div class="mb10">
    <h3>DANH SÁCH DANH MỤC</h3>
</div>
<div class="formcontent">
    <form action="index.php?act=listsp" method="post">
        <input type="text" name="keyw" placeholder="Nhập sản phẩm cần tìm"><br><br>
        <select name="iddm">
            <option value="0" selected>Tất cả</option>
            <?php foreach ($listdm as $dm) : ?>
                <option value="<?php echo $dm['id'] ?>"><?php echo $dm['name'] ?></option>
            <?php endforeach ?>
        </select><br><br>
        <input type="submit" name="clickOK" value="Tìm kiếm"><br><br>
    </form>
    <form action="index.php?act=addsp" method="post">
        <div class="mb10">
            <table class="mb10 content-table">
                <thead>
                <tr>
                    <th>Chọn nhanh</th>
                    <th>Mã sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Tên sp</th>
                    <th>Giá</th>
                    <th>Giảm giá</th>
                    <th>Mô tả</th>
                    <th>Lượt xem</th>
                    <th>Chức năng</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($listsp as $key => $sp) : ?>
                <tr>
                    <td><input type="checkbox" name=""></td>
                    <td>DA1-<?php echo $sp['id'] ?></td>
                    <td>
                        <?php $img=$image_path.$sp['img']; if(is_file($img)) : ?>
                            <!-- Nếu đường dẫn ảnh đúng thì in ra if -->
                            <img src="<?php echo $img ?>" alt="" width="70px" height="50px">
                        <?php else : ?>
                            <!-- Còn else là đường dẫn sai -->
                            <span style="color: red; font-size: 14px;">No file img!</span>
                        <?php endif ?>
                    </td>
                    <td><?php echo $sp['name'] ?></td>
                    <td><?php echo $sp['price'] ?></td>
                    <td><?php echo $sp['giamgia'] ?></td>
                    <td><?php echo $sp['mota'] ?></td>
                    <td><?php echo $sp['luotxem'] ?></td>
                    <td>
                        <a href="?act=editsp&idsp=<?php echo $sp['id'] ?>"><input type="button" value="Sửa"></a>
                        <a onclick="return confirm('Bạn có chắc chắn muốn xóa')" href="?act=deletesp&idsp=<?php echo $sp['id'] ?>"><input type="button" value="Xóa"></a>
                    </td>
                </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <input type="button" value="Chọn tất cả">
        <input type="button" value="Bỏ chọn tất cả">
        <input type="button" value="Xóa các mục đã chọn">
        <a href="index.php?act=addsp"><input type="button" value="Thêm mới"></a>
    </form>
</div>