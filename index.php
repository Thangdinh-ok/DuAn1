
<?php
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "view/header.php";
include "global.php";
$spnew = loadall_sanpham_home();
$dsdm = loadall_danhmuc();
$dstop10 = loadall_sanpham_top10();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
            case 'gopy':
                include "view/gopy.php";
                break;
                case 'hoidap':
                    include "view/hoidap.php";
                    break;
        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = '';
            }

            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "view/list.php";
            break;
        default:
            break;
    }
} else {
    include "view/home.php";
}

include "view/footer.php";
