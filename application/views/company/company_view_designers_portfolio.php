<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Designer Portfolio</title>
    <!-- Add your CSS stylesheets here -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="login-container" id="loginContainer">

    <h1>Designer Portfolio</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Project Details</th>
                <th>Skills</th>
                <th>Education</th>
                <th>Experience</th>
                <th>Certifications</th>
                <th>Contact Information</th>
                <th>Biography</th>
                <th>Additional Information</th>
                <th>Designer ID</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through your data to display each row -->
            <?php foreach ($designer_portfolio as $row): ?>
                <tr>
                    <td><?php echo $row->project_details; ?></td>
                    <td><?php echo $row->skills; ?></td>
                    <td><?php echo $row->education; ?></td>
                    <td><?php echo $row->experience; ?></td>
                    <td><?php echo $row->certifications; ?></td>
                    <td><?php echo $row->contact_informations; ?></td>
                    <td><?php echo $row->biography; ?></td>
                    <td><?php echo $row->additional_informations; ?></td>
                    <td><?php echo $row->designer_id; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
            </div>
    <!-- Add your JavaScript scripts here -->
    <script src="scripts.js"></script>
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


