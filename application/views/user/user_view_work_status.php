<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User : View companies</title>
</head>
<body>
    <center>
    <div class="login-container" id="loginContainer">

        <h1 style="color: white;">WORK STATUS</h1>
        <table class="table" style="background-color: white; opacity: 0.7;">
            <tr>
                <th>#</th>
                <th>Project Name</th>
                <th>Description</th>
                <th>Company</th>
                <th>Status</th>
            </tr>
            
            <?php if (!empty($work_status)): ?>
                <?php $counter = 1; ?>
                <?php foreach ($work_status->result() as $row): ?>
                    <tr>
                        <td><?php echo $counter++; ?></td> <!-- Incrementing counter -->
                        <td><?php echo $row->project_name; ?></td>
                        <td><?php echo $row->description; ?></td>
                        <td><?php echo $row->company_id; ?></td>
                        <td><?php echo $row->status; ?></td>
                        <td><a href="<?php echo base_url('index.php/Onlinecontroller/userViewDesign'); ?>">View Design</td>
                        <td><a href="<?php echo base_url('index.php/Onlinecontroller/userChat'); ?>">Chat</td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No work found</td>
                </tr>
            <?php endif; ?>
        </table>
            </div>
    </center>
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

