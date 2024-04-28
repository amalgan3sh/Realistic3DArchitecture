<div class="login-container" id="loginContainer">

        <h1>PROJECTS</h1>
        <div class="table-responsive" style="max-height: 300px; max-width: 100%; overflow-y: auto;background-color: rgba(255, 255, 255, 0.5);">

        <table class="table table-striped">
            <tr>
                <th>S No</th>
                <th>Project Name</th>
                <th>Description</th>
                <th>Company</th>
                <th>Designer</th>
                <th>Architect</th>
                <th>Status</th>
            </tr>
            
            <?php if (!empty($designer_project)): ?>
                <?php $counter = 1; ?>
                <?php foreach ($designer_project->result() as $row): ?>
                    <tr>
                        <td><?php echo $counter++; ?></td> <!-- Incrementing counter -->
                        <td><?php echo $row->project_name; ?></td>
                        <td><?php echo $row->description; ?></td>
                        <td><?php echo $row->company_id; ?></td>
                        <td><?php echo $row->designer_id; ?></td>
                        <td><?php echo $row->architect_id; ?></td>
                        <td><?php echo $row->status; ?></td>
                        <td><a href="<?php echo base_url('index.php/Onlinecontroller/designerUploadDesign?project_id=' . $row->project_id) ?>">Upload design</a></td>

                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No designers found</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
            </div>


    
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



    
