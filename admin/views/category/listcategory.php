
<table class="wrapperr product" cellspacing="0" border="1">
    <tr class="r1">
        <td>MÃ DANH MỤC</td>
        <td>TÊN DANH MỤC</td>
        <td><a href="?act=addCategory"><button class="btn">Thêm Danh Mục</button></a></td>
        
    </tr>
    <?php foreach($allCategory as $rows) : ?>
    
    <tr>
        <td><?= $rows['cate_id'] ?></td>
        <td><?= $rows['cate_name'] ?></td>
        <td>
            <a href="?act=updateCategory&cate_id=<?= $rows['cate_id'] ?>">
            <button class="button btn1">Sửa</button></a>
            <a onclick="return confirm('Bạn có muốn xoá không?')"
                href="?act=deleteCategory&cate_id=<?= $rows["cate_id"] ?>">
                <button class="button btn2">Xoá</button></a>
        </td>
    </tr>
    <?php endforeach ?> 
</table>