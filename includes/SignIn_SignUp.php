<!-- Modal -->
<style>
	.log-in-out-text {
		font-size: 14px;
		font-weight: 100;
		line-height: 20px;
		letter-spacing: 0.5px;
		margin: 20px 0 30px;
	}

	.link-log-in-out {
		color: #333;
		font-size: 14px;
		text-decoration: none;
		margin: 15px 0;
	}

	.but {
		border-radius: 20px;
		border: 1px solid #FFFFFF;
		background-color: #33b5e5;
		color: #ffffff;
		font-size: 12px;
		font-weight: bold;
		padding: 14px 35px;
		letter-spacing: 1px;
		text-transform: uppercase;

	}

	.form-log-in-out {
		background-color: #ffffff;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
		padding: 0 50px;
		height: 100%;
		text-align: center;
	}

	.input-log-in-out {
		background-color: #eee;
		border: none;
		padding: 12px 15px;
		margin: 8px 0;
		width: 100%;
	}

	.social-container {
		margin: 5px;
	}

	.social-container a {
		border: 1px solid #dddddd;
		border-radius: 50%;
		display: inline-flex;
		justify-content: center;
		align-items: center;
		margin: 0 5px;
		height: 40px;
		width: 40px;
	}

	.container-log-in-out {
		background-color: #ffffff;
		border-radius: 10px;
		box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
		position: relative;
		overflow: hidden;
		width: 768px;
		max-width: 100%;
		min-height: 480px;
	}

	.form-container {
		position: absolute;
		top: 0;
		height: 100%;
		transition: all 0.6s ease-in-out;
	}

	.sign-in-container {
		left: 0;
		width: 50%;
		z-index: 2;
	}

	.sign-up-container {
		left: 0;
		width: 50%;
		opacity: 0;
		z-index: 1;
	}

	.container-log-in-out.right-panel-active .sign-in-container {
		transform: translateX(100%);
	}

	.container-log-in-out.right-panel-active .sign-up-container {
		transform: translateX(100%);
		opacity: 1;
		z-index: 5;
		animation: show 0.6s;
	}

	@keyframes show {
		0%,
		49.99% {
			opacity: 0;
			z-index: 1;
		}

		50%,
		100% {
			opacity: 1;
			z-index: 5;
		}
	}

	.overlay-container {
		position: absolute;
		top: 0;
		left: 50%;
		width: 50%;
		height: 100%;
		overflow: hidden;
		transition: transform 0.6s ease-in-out;
		z-index: 100;
	}

	.container-log-in-out.right-panel-active .overlay-container {
		transform: translateX(-100%);
	}

	.overlay-log-in-out {
		background: #33b5e5;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: 0 0;
		color: #ffffff;
		position: relative;
		left: -100%;
		height: 100%;
		width: 200%;
		transform: translateX(0);
		transition: transform 0.6s ease-in-out;
	}

	.container-log-in-out.right-panel-active .overlay-log-in-out {
		transform: translateX(50%);
	}

	.overlay-panel {
		position: absolute;
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
		padding: 0 40px;
		text-align: center;
		top: 0;
		height: 100%;
		width: 50%;
		transform: translateX(0);
		transition: transform 0.6s ease-in-out;
	}

	.overlay-left {
		transform: translateX(-20%);
	}

	.container-log-in-out.right-panel-active .overlay-left {
		transform: translateX(0);
	}

	.overlay-right {
		right: 0;
		transform: translateX(0);
	}

	.container-log-in-out.right-panel-active .overlay-right {
		transform: translateX(20%);
	}
</style>

<div class="modal fade" id="SignInModal" tabindex="-1" role="dialog" aria-labelledby="SignInModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content" style="width: 60vw; height: 50px">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="modal-body">

      <div class="container-log-in-out mt-5" id="container">
        <div class="form-container sign-up-container mt-2">
          <form class="form-log-in-out" action="#">
            <h1 class="font-weight-bold">Create Account</h1>
            
            <input type="text" class="input-log-in-out" placeholder="Name" />
            <input type="email" class="input-log-in-out" placeholder="Email" />
            <input type="password" class="input-log-in-out" placeholder="Password" />
            <button class="btn btn-info btn-rounded">Sign up</button>
          </form>
        </div>

        <div class="form-container sign-in-container">
          <form class="form-log-in-out" action="#">
            <h1 class="font-weight-bold">Sign in</h1>
          
            <span>or use your account</span>
            <input type="email" class="input-log-in-out" placeholder="Email" />
            <input type="password" class="input-log-in-out" placeholder="Password" />
            <button class="btn btn-info btn-rounded ">Sign In</button>
          </form>
        </div>

        <div class="overlay-container">
          <div class="overlay-log-in-out">
            <div class="overlay-panel overlay-left">
              <h1 class="font-weight-bold">Good to see you!
                <h1>
                  <p class="log-in-out-text">You already have an account? <br>Sign in!</p>
                  <button class="but" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
              <h1 class="font-weight-bold">Hello, Friend!</h1>
              <p class="log-in-out-text">You don't have account yet? Don't worry! You still can join us</p>
              <button class="but" id="signUp">Sign Up</button>
            </div>
          </div>
        </div>
      </div>

    </div>


  </div>
</div>
</div>

	<script>
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add('right-panel-active');
		});

		signInButton.addEventListener('click', () => {
			container.classList.remove('right-panel-active');
		});
	</script>