
    
    <table class="wrapperr product" cellspacing="0" border="1">
    <tr class="r1">
        <td>MÃ SP</td>
        <td>TÊN SP</td>
        <td>ẢNH SP</td>
        <td>GIÁ SP</td>
        <td>CHI TIẾT SP</td>
        <td>DANH MỤC SP</td>
        <td><a href="?act=addProduct"><button class="btn">Thêm Sản Phẩm</button></a></td>
    </tr>
    <?php foreach ($allProduct as $key => $rows) { ?>

    <tr>
        <td><?= $rows['pro_id'] ?></td>
        <td><?= $rows['pro_name'] ?></td>
        <td><img src="../assets/images/<?= $rows['pro_img'] ?>" style="width: 150px;" alt=""></td>
        <td><?= $rows['price'] ?></td>
        <td><?= $rows['detail'] ?></td>
        <td><?= $rows['cate_name'] ?></td>
        <td><a href="?act=updateProduct&pro_id=<?= $rows['pro_id'] ?>"><button class="button btn1">Sửa</button></a>
            <a onclick="return confirm('Bạn có muốn xoá không?')"
                href="?act=deleteProduct&pro_id=<?= $rows["pro_id"] ?>"><button class="button btn2">Xoá</button></a></td>
    </tr>
    <?php } ?>
</table>