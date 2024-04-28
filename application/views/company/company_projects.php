<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Project</title>
</head>
<body>
    <center>
    <div class="login-container" id="loginContainer">

    <h2  style="color:white">Ongoing Projects</h2>
        <table border="1" style="background-color: white; opacity: 0.7;">
        <thead>
            <tr>
                <th>Project Name</th>
                <th>Description</th>
                <th>Designer</th>
                <th>Architect</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ongoing_projects as $project) { ?>
                <tr>
                    <td><?php echo $project->project_name; ?></td>
                    <td><?php echo $project->description; ?></td>
                    <td>
                        <?php if ($project->status == 'accepted') { ?>
                            <?php if (!empty($project->designer_id)) { ?>
                                <?php echo $project->designer_name; // Assuming designer name is available in the $project object ?>
                            <?php } else { ?>
                                <a href="<?php echo base_url('index.php/Onlinecontroller/companyViewDesigners?project_id=' . $project->project_id) ?>">Select Designer</a>
                            <?php } ?>
                        <?php } else { ?>
                            Project Not Accepted
                        <?php } ?>
                    </td>

                    <td><?php if ($project->status == 'accepted') { ?>
                            <?php if (!empty($project->architect_id)) { ?>
                                <?php echo $project->architect_name; // Assuming architect name is available in the $project object ?>
                            <?php } else { ?>
                                <a href="<?php echo base_url('index.php/Onlinecontroller/companyViewArchitect?project_id=' . $project->project_id) ?>">Select Architect</a>
                            <?php } ?>
                        <?php } else { ?>
                            Project Not Accepted
                        <?php } ?></td>
                    <td><?php echo $project->status; ?></td>
                    <td><a href="<?php echo base_url('index.php/Onlinecontroller/companyAcceptProject?project_id=' . $project->project_id) ?>">Accept</a></td>
                    <td><a href="<?php echo base_url('index.php/Onlinecontroller/companyRejectProject?project_id=' . $project->project_id) ?>">Reject</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
                        </div>
    </center>
</body>
</html>


<style type="text/css">

.owl-nav.disabled {
    display: none;
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
