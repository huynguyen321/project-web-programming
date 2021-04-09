<script>
    function checkVerification() {
        var verification = <?php echo $data['verification']; ?>;
        var input = document.getElementById('check');
        if (input == verification) {
            window.location.assign('http://huysmartphone.xyz/User/CompleteSignUp')
        } else alert('Mã xác thực không chính xác')
    }
</script>
<div class="container">
<?php
if(isset($data['AlertError'])){
    echo '<h4>'.$data['AlertError'].'</h4><br/>';
}
?>
    <form action="http://huysmartphone.xyz/User/CompleteSignUp?>"
        method="post" class="form-row">
        <h5>Bạn phải nhập mã xác thực(gồm 6 ký tự) vào ô dưới để hoàn tất đăng ký!</h5><br />
        <h5>Nếu không dữ liệu bạn đã đăng ký sẽ bị hủy bỏ!</h5>
        <div class="col-12 mt-3">
            <input type="text" class="form-control" name="verification" placeholder="Mã xác thực">
        </div>
        <button type="submit" class="bn btn-outline-danger mt-3">Nhập</button>
    </form>
</div>