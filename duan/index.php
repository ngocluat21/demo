<?php
    include "view/header.php";


    if (isset($_GET['act']) && ($_GET['act'] != "")) {
        $act = $_GET['act'];
        switch ($act) {
            case "gioithieu":
                include "view/gioithieu.php";
                break;
            case "lienhe":
                include "view/lienhe.php";
                break;
            case "gopy":
                include "view/gopy.php";
                break;
            case "hoidap":
                include "view/hoidap.php";
                break;

            case "dangky":
                include "view/taikhoan/dangky.php";
                break;
            case "dangnhap":
                include "view/taikhoan/dangnhap.php";
                break;
            case "quenmk":
                include "view/taikhoan/quenmk.php";
                break;
            case "edit_tk":
                include "view/taikhoan/edit_tk.php";
                break;

            default:
                include "view/trangchu.php";
                break;
        }
    } else {
        include "view/trangchu.php";
    }

    include "view/footer.php";
?>