<div class="wrapper">
        <h2>Thêm mới sản phẩm</h2>
        <form action="" class="insert" method="post" enctype="multipart/form-data">
            <p>Tên sản phẩm</p><input type="text" name="name">
            <p>Ảnh sản phẩm</p><input type="file" name="img">
            <p>Giá sản phẩm</p><input type="text" name="price">
            <p>Chi tiết SP</p><input type="text" name="detail">
            <p>Danh mục sản phẩm</p>
            <select name="cate" id="">
                <option value="1">Máy tính</option>
                <option value="2">Điện thoại</option>
                <option value="3">Linh kiện</option>
            </select><br>
            <input type="submit" value="Thêm sản phẩm" name="btn_insert" class="btn">
            <input type="reset" value="Nhâp lại" class="btn">
        </form>
    </div>