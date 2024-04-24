<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Realistic 3D Architecture Login</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
  <div class="background"></div>
  <div class="login-container" id="loginContainer">
    <div class="login-header">
      <h2>Welcome to <span>Realistic 3D Architecture</span></h2>
      <p>Login to your account</p>
    </div>
    <div class="login-form">
      <form action="<?php echo base_url('index.php/Onlinecontroller/loginUser'); ?>" method="post">
        <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="text" name="email" placeholder="Email" >
        </div>
        <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" placeholder="Password" >
        </div>
        <!-- <div class="input-group">
          <i class="fas fa-briefcase"></i>
          <select placeholder="usertype" name="usertype" class="input-group">
              <option value="admin">Admin</option>
              <option value="architecture">Architectures</option>
              <option value="designers">Designers</option>
              <option value="companies">Company</option>
              <option value="user">User</option>
          </select>
        </div> -->
        <div class="options">
          <label for="remember">
            <input type="checkbox" id="remember"> Remember me
          </label>
          <a href="#" class="forgot-password">Forgot Password?</a>
        </div>
        <button type="submit">Login</button>
      </form>
    </div>
    <div class="signup-link">
      Don't have an account? <a href="<?php echo base_url('index.php/Onlinecontroller/signUp'); ?>">Sign Up</a>
    </div>
  </div>
</body>

</html>
<style type="text/css">
    body {
  margin: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  overflow: hidden;
  background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
  color: #ffffff;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.background {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('tu-imagen.jpg'); /* Adding an image gives a different touch when logging in*/
  background-size: cover;
  background-position: center;
  filter: blur(8px);
  z-index: -1;
  animation: drift 20s ease infinite alternate;
}

@keyframes drift {
  0% {
    transform: translate(-2%, -2%);
  }
  50% {
    transform: translate(2%, 2%);
  }
  100% {
    transform: translate(-2%, -2%);
  }
}

.login-container {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 10px;
  padding: 30px;
  width: 400px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
  position: relative;
  overflow: hidden;
  animation: pulse 1.5s ease-in-out infinite alternate;
}

@keyframes pulse {
  0% {
    transform: scale(0.98);
    box-shadow: 0 0 0 10px rgba(255, 255, 255, 0.2);
  }
  100% {
    transform: scale(1);
    box-shadow: 0 0 0 15px rgba(255, 255, 255, 0.4);
  }
}

.login-header {
  text-align: center;
  margin-bottom: 20px;
}

.login-header h2 {
  color: #61dafb;
  margin-bottom: 10px;
  text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
}

.login-header span {
  color: #3a9bd9;
}

.login-header p {
  font-size: 14px;
  opacity: 0.7;
}

.input-group {
  margin-bottom: 20px;
  display: flex;
  align-items: center;
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 5px;
  padding: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.input-group i {
  margin-right: 10px;
  color: #61dafb;
}

input {
  flex: 1;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background-color: transparent;
  color: #ffffff;
  outline: none;
}

.options {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 15px;
}

label {
  font-size: 14px;
  opacity: 0.7;
  display: flex;
  align-items: center;
  color: #ffffff;
}

.forgot-password {
  color: #61dafb;
  text-decoration: none;
  font-size: 14px;
  opacity: 0.7;
}

button {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  background: linear-gradient(to right, #3a9bd9, #61dafb);
  color: #ffffff;
  cursor: pointer;
  transition: background 0.3s;
}

button:hover {
  background: linear-gradient(to right, #61dafb, #3a9bd9);
}

.signup-link {
  text-align: center;
  margin-top: 15px;
  font-size: 14px;
  opacity: 0.7;
}

.signup-link a {
  color: #61dafb;
  text-decoration: none;
}

.login-container {
  animation: pulse 1.5s infinite alternate;
}

.login-container.no-animation {
  animation: none;
}
</style>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
  const background = document.querySelector('.background');
  const loginButton = document.querySelector('button'); document.addEventListener('mousemove', function (e) {
    const xAxis = (window.innerWidth / 2 - e.pageX) / 25;
    const yAxis = (window.innerHeight / 2 - e.pageY) / 25;
    background.style.transform = `translate(${xAxis}px, ${yAxis}px)`;
  });
  loginButton.addEventListener('click', function () {
    loginButton.classList.add('clicked');
    setTimeout(() => {
      loginButton.classList.remove('clicked');
    }, 300);
  });
});

const loginContainer = document.getElementById('loginContainer');

document.querySelectorAll('input').forEach(input => {
  input.addEventListener('focus', () => {
    loginContainer.classList.add('no-animation');
  });

  input.addEventListener('blur', () => {
    loginContainer.classList.remove('no-animation');
  });
});

</script>