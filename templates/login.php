<div id="myModal" class="modal modal-open">
    <div class="modal-content">
      <div class="close-modal">
      <span class="close-button"><i class="fa-solid fa-xmark"></i></span>
      </div>

      <div class="modal-container d-flex">
      <div class="login-image text-center mt-4"> <!-- left side -->
        <img src="https://i.postimg.cc/k4FfZc8K/white-cat-in-verge-of-crying-meme.jpg" alt="login-image">
      </div>

      <div class="login"> <!-- right side -->
        <div class="login-form-container">
          <h4 class="text-center mb-4">Login to your account</h4>
          <form class="login-form" id="loginForm">
            <div class="mb-2">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" name="loginemail" id="loginemail" placeholder="Enter your email">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password">
              <input type="checkbox" id="showPass">
              <label for="showPass">Show Password</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Login</button>
            <p class="text-center">Don't have an account? <a href="#" id="showRegisterForm">Sign up</a></p>
          </form>
        </div>
        </div>

        <div class="register">
        <div class="register-form-container">
          <h4 class="text-center mb-4">Create an account</h4>
          <form class="register-form" id="registerForm">
            <div class="mb-2">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control" name="registeremail" id="registeremail" placeholder="Enter your email">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="registerpassword" id="registerpassword" placeholder="Enter your password">
              <input type="checkbox" id="showPass">
              <label for="showPass">Show Password</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Sign Up</button>
            <p class="text-center">Have an account? <a href="#" id="showLoginForm">Login</a></p>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div>