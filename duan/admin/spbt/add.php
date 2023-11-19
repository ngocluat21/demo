<div class="row">
    <div class="row frmtitle">
        <h2>Thêm Sản Phẩm và Biến Thể</h2>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=adddm" method="post">
            <div class="row mb10">
                Tên sản phẩm<br>
                <input type="text" id="product_name" name="product_name" required>
            </div>
            <div class="row mb10">
                Giá sản phẩm<br>
                <input type="number" id="product_price" name="product_price" required>
            </div>
            <div class="row mb10">
                <input type="submit" name="themmoi" value="THÊM MỚI">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
        </form>
    </div>

    
    <!-- <div class="row ">
        <form action="index.php?act=addspbt" method="POST">
           
                <label for="">Tên sản phẩm:</label>
                <input type="text" id="product_name" name="product_name" required><br><br>
           
           
                <label for="">Giá sản phẩm:</label>
                <input type="number" id="product_price" name="product_price" required><br><br>
           
           
                <label for="">Mô tả sản phẩm:</label><br>
                <textarea id="product_description" name="product_description" rows="4" cols="50" required></textarea><br><br>
           
           
                <label for="variants">Sản phẩm biến thể:</label><br>
                <div id="variant_container">
                    
               
                <button type="button" onclick="addVariant()">Thêm biến thể</button><br><br>
                <input type="submit" value="Thêm sản phẩm">
                <a href="index.php?act=listspbt"><input type="button" value="DANH SÁCH"></a>
           

        </form>
    </div> -->
</div>
</div>