<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architect Manage Profile</title>
</head>
<body>
    <!-- Your content for managing profile goes here -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architect Manage Profile</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<div class="login-container" id="loginContainer">

<h2>Architect Manage Profile</h2>

<table>
  <tr>
    <th>Field</th>
    <th>Value</th>
  </tr>
  <tr>
    <td>Full Name</td>
    <td>John Doe</td>
  </tr>
  <tr>
    <td>Email</td>
    <td>johndoe@example.com</td>
  </tr>
  <tr>
    <td>Location</td>
    <td>New York</td>
  </tr>
  <tr>
    <td>Phone Number</td>
    <td>(123) 456-7890</td>
  </tr>
  <!-- Add more rows as needed -->
</table>
      </div>

</body>
</html>


        
<style type="text/css">
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
.owl-nav.disabled {
    display: none;
}
.login-container {
  background-color: rgba(255, 255, 255, 0.1);
  border-radius: 10px;
  padding: 30px;
  width: 150%;
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



    

                   
  

