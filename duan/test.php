<?php
// // Phần cố định
// $prefix = "DA1-";

// // Tạo hậu tố ngẫu nhiên
// $suffix = rand(1000, 9999);

// // Tạo mã đầy đủ
// $maDA1 = $prefix . $suffix;

// // In ra màn hình để kiểm tra
// echo $maDA1;
?>
<?php
// Lấy số thứ tự hiện tại từ một nguồn dữ liệu nào đó, ví dụ từ cơ sở dữ liệu
// $currentNumber = 1000;

// // Kiểm tra nếu form được submit
// if (isset($_POST['submit'])) {
//     // Tăng số thứ tự lên 1
//     $currentNumber++;

//     // Tạo mã mới
//     $newMasp = 'DA1-' . $currentNumber;
// } else {
//     // Nếu không có submit, giữ nguyên giá trị hiện tại
//     $newMasp = 'DA1-' . $currentNumber;
// }
?>

<!-- Hiển thị form -->
<!-- <form method="post" action="">
    <div class="row mb10">
        Mã sản phẩm<br>
        <input type="text" name="masp" value="<?php echo $newMasp; ?>" readonly>
    </div>
    <input type="submit" name="submit" value="Thêm sản phẩm">
</form> -->
<?php
// Bắt đầu session (nếu chưa được bắt đầu)
session_start();

if (!isset($_SESSION['currentNumber'])) {
    $_SESSION['currentNumber'] = 1000;
}

if (isset($_POST['submit'])) {
    $_SESSION['currentNumber']++;

    $newMasp = 'DA1-' . $_SESSION['currentNumber'];
} else {
    $newMasp = 'DA1-' . $_SESSION['currentNumber'];
}
?>

<!-- Hiển thị form -->
<form method="post" action="">
    <div class="row mb10">
        Mã sản phẩm<br>
        <input type="text" name="masp" value="<?php echo $newMasp; ?>" readonly>
    </div>
    <input type="submit" name="submit" value="Thêm sản phẩm">
</form>
