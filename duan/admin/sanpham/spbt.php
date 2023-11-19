<?php
    if(is_array($pro)) {
        extract($pro);
    }

    $hinhpath = "../upload/".$img;
    if (is_file($hinhpath)) {
        $hinh = "<img src='".$hinhpath."' height='80'>";
    } else {
        $hinh = "No photo";
    }
    // $up = "index.php?act=spbt&id=".$pro['id'];
?>
<div class="raw">
    <div class="raw">
        <h1>CẬP NHẬT SẢN PHẨM</h1>
    </div>
    <div class="raw formcontent">
        <form action="index.php?act=spbt" method="post" enctype="multipart/form-data">
            <div class="raw mb10">
                <select name="iddm">
                    <option value="0" selected>Chọn loại sản phẩm</option>
                    <?php 
                        foreach ($listdm as $danhmuc) {
                            if ($iddm==$danhmuc['id']) 
                                $s="selected"; 
                            else 
                                $s="";
                            echo '<option value="'.$danhmuc['id'].'" '.$s.'>'.$danhmuc['namedm'].'</option>';
                        }
                    ?>
                </select>
            </div>

            
            <div class="raw flex">
                
                <div class="mb10">
                    Tên sản phẩm <br>
                    <input type="text" name="namepro" value="<?php echo $namepro;?>">
                </div>

                <div class="mb10">
                    Giá <br>
                    <input type="text" name="price" value="<?=$price?>">
                </div>
    
                <div class="mb10">
                    Giảm giá <br>
                    <input type="text" name="discount" value="<?=$discount?>">
                </div>

                <div class="mb10">
                    Hình <br>
                    <input type="file" name="img">
                </div>
            </div>
            <?=$hinh?>


            <div class="raw mb10">
                Mô tả <br>
                <textarea name="mota" cols="10" rows="5"><?=$mota?></textarea>
            </div>
            <div class="raw mb10">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="submit" name="capnhat" value="Cập nhập">
                <input type="reset" value="Nhập lại">
                <a href="index.php?act=listsp">
                    <input type="button" value="Danh sách">
                </a>
            </div>
            <div class="raw title">
                <h1>THÊM BIẾN THỂ</h1>
            </div>
            <form action="" method="post">
                
                <input type="hidden" name="id" value="<?php echo $pro['id'];?>">
                <div id="variantsContainer" class="frmcontent">
                    <div class="variant grid3 raw">
                        <div class="mb10">
                            <label for="size">Size:</label>
                            <select name="idsize">
                                <option value="Choose">--- Chọn size ---</option>
                                <?php
                                    foreach ($list_s as $size) {
                                        extract($size);
                                        echo '<option value="'.$id.'">'.$size.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
    
                        <div class="mb10">
                            <label for="color">Màu:</label>
                            <select name="idmau">
                                <option value="Choose">--- Chọn màu ---</option>
                                <?php
                                    foreach ($list_m as $mau) {
                                        extract($mau);
                                        echo '<option value="'.$id.'">'.$mau.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
    
                        <div class="mb10">
                            <label for="stock">Số Lượng:</label>
                            <input type="text" name="stock[]" >
                        </div>
                        
                    </div>
                </div>
                <div class="raw mb10">
                    <input type="reset" value="Nhập lại">
                    <input type="button" onclick="addVariant()" value="Thêm Biến Thể">
                    <input type="submit" name="themmoi" value="Thêm">
                    <a href="index.php?act=listsp">
                        <input type="button" value="Danh sách">
                    </a>
                </div>
            </form>
            
            <?php
                if (isset($thongbao) && ($thongbao!="")) {
                    echo $thongbao;
                }
            ?>
        </form>
    </div>
</div>