<div class="modal fade" id="SignInSignUpModal" tabindex="-1" role="dialog" aria-labelledby="SignInSignUpModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 60vw; height: 70px">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Sign up -->
                <div class="container-log-in-out mt-5" id="container">
                    <div class="form-container sign-up-container mt-2">
                        <form class="form-log-in-out" action="./User/SignUp" method="post">
                            <h2 class="font-weight-bold">Tạo tài khoản</h2>
                            <input type="text" class="input-log-in-out" name="name" placeholder="Họ và tên" required/>
                            <input type="text" class="input-log-in-out" name="username" placeholder="Tên đăng nhập" required />
                            <input type="email" class="input-log-in-out" name="email" placeholder="Email" required />
                            <input type="tel" class="input-log-in-out" name="phonenumber" pattern="[0]{1}[0-9]{9}" placeholder="Điện thoại" required />
                            <input type="text" class="input-log-in-out" name="address" placeholder="Địa chỉ" required />
                            <input type="password" class="input-log-in-out" name="password" placeholder="Mật khẩu" required />
                            <button type='submit' class="btn btn-info btn-rounded" id="add" name="SignUp">Đăng ký</button>
                        </form>
                    </div>

                    <div class="form-container sign-in-container">
                        <form class="form-log-in-out" name="login" action="User/SignIn" method="post">
                            <h2 class="font-weight-bold">Đăng nhập</h2>
                            <!-- Sign in -->
                            <input type="text" class="input-log-in-out" name="usernameSignUp" placeholder="Tên đăng nhập" required />
                            <input type="password" name="pwdSignUp" class="input-log-in-out" placeholder="Mật khẩu" required />
                            <button type='submit' class="btn btn-info btn-rounded " id="Dangnhap" name="SignIn">Đăng nhập</button>
                        </form>
                    </div>

                    <div class="overlay-container">
                        <div class="overlay-log-in-out">
                            <div class="overlay-panel overlay-left">
                                <h2 class="font-weight-bold">Rất vui được gặp bạn!
                                    <h2>
                                        <p class="log-in-out-text">Bạn đã có tài khoản chưa? <br>Đăng nhập!</p>
                                        <button class="but" id="signIn1">Đăng nhập</button>
                            </div>
                            <div class="overlay-panel overlay-right">
                                <h2 class="font-weight-bold">Xin chào bạn!</h2>
                                <p class="log-in-out-text">Bạn chưa có tài khoản? Đừng lo lắng! Bạn vẫn có thể tham gia với chúng tôi</p>
                                <button class="but" id="signUp1">Đăng ký</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>

<script>
    const signUpButton1 = document.getElementById('signUp1');
    const signInButton1 = document.getElementById('signIn1');
    const signUpButton2 = document.getElementById('signUp2');
    const signInButton2 = document.getElementById('signIn2');
    const container = document.getElementById('container');

    signUpButton1.addEventListener('click', () => {
        container.classList.add('right-panel-active');
    });

    signInButton1.addEventListener('click', () => {
        container.classList.remove('right-panel-active');
    });

    signUpButton2.addEventListener('click', () => {
        container.classList.add('right-panel-active');
    });

    signInButton2.addEventListener('click', () => {
        container.classList.remove('right-panel-active');
    });

    
</script>