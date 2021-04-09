<?php
if ($data['Smartphone']->num_rows > 0 && $data['Accessories']->num_rows > 0) {
    include_once './MVC/Views/pages/' . $data['Page1'] . '.view.php';
    include_once './MVC/Views/pages/' . $data['Page2'] . '.view.php';
} else if ($data['Smartphone']->num_rows > 0) {
    include_once './MVC/Views/pages/' . $data['Page1'] . '.view.php';
} else if ($data['Accessories']->num_rows > 0) {
    include_once './MVC/Views/pages/' . $data['Page2'] . '.view.php';
} else {
    echo '<div class="container">
    <h2>Không tìm thấy sản phẩm</h2>
    <h3>Để tìm được kết quả chính xác hơn, bạn vui lòng:</h3>
    <ul>
        <li>Kiểm tra lỗi chính tả của từ khóa đã nhập</li>
        <li>Thử lại bằng từ khóa khác</li>
        <li>Thử lại bằng những từ khóa tổng quát hơn</li>
        <li>Thử lại bằng những từ khóa ngắn gọn hơn</li>
    </ul>
</div>';
}
