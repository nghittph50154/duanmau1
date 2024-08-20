<h2>Sửa Danh Mục</h2>
        <form action="" class="insert" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $oneCategory['cate_id'] ?>" > 
                <p>Sửa danh mục:</p> <input type="text" name="cate" value="<?= $oneCategory['cate_name'] ?>" > <br>  
            <input type="submit" name="btn_update" class="btn" value="Sửa Danh Mục">
        </form>