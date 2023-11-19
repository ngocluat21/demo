<?php
    function insert_sanpham($namepro, $price, $discount, $img, $mota, $iddm) {
        $sql = "INSERT INTO sanpham(namepro, price, discount, img, mota, iddm, status_sp) VALUES('$namepro', '$price', '$discount', '$img', '$mota', '$iddm', 1)";
        pdo_execute($sql); 
    }
    function loadone_sanpham($id) {
        $sql = "SELECT * FROM sanpham WHERE id=".$id;
        $pro = pdo_query_one($sql);
        return $pro;
    }

    function loadall_sanpham() {
        $sql = "SELECT * FROM sanpham";
        $listsp = pdo_query($sql);
        return $listsp;
    }

    function update_status_sp0($id) {
        $sql = "UPDATE sanpham SET status=0 WHERE id=".$id;
        pdo_execute($sql);
    }
    function update_status_sp1($id) {
        $sql = "UPDATE sanpham SET status=1 WHERE id=".$id;
        pdo_execute($sql);
    }

    // Sản phẩm biến thể
    function insert_variant($idpro, $idmau, $idsize, $soluong) {
        $sql = "INSERT INTO spbt(idpro, idmau, idsize, soluong, status) VALUES($idpro, '$idmau', $idsize, $soluong, 1";
        pdo_execute($sql);
    }
    function update_sanpham($id, $iddm, $namepro, $price, $discount, $hinh, $mota) {
        if($hinh != "") {
            $sql = "UPDATE sanpham SET iddm = '".$iddm."', namepro = '".$namepro."', price = '".$price."', discount = '".$discount."', img = '".$hinh."', mota = '".$mota."' WHERE id =".$id;
        } else {
            $sql = "UPDATE sanpham SET iddm = '".$iddm."', namepro = '".$namepro."', price = '".$price."', discount = '".$discount."', mota = '".$mota."' WHERE id=".$id;
        }
        pdo_execute($sql);
    }