

<div class="login-container" id="loginContainer">

    <div style="background-color: white; opacity: 0.5;">
        <h1>Add Portfolio Item</h1>
            <form action="<?php echo base_url('index.php/Onlinecontroller/designerAddPortfolio'); ?>" method="post">
        <label for="project_details">Project Details:</label><br>
        <input type="text" id="project_details" name="project_details" required><br><br>

        <label for="skills">Skills:</label><br>
        <input type="text" id="skills" name="skills" required><br><br>

        <label for="education">Education:</label><br>
        <input type="text" id="education" name="education" required><br><br>

        <label for="experience">Experience:</label><br>
        <input type="text" id="experience" name="experience" required><br><br>

        <label for="certifications">Certifications:</label><br>
        <input type="text" id="certifications" name="certifications" required><br><br>

        <label for="contact_info">Contact Information:</label><br>
        <input type="text" id="contact_info" name="contact_info" required><br><br>

        <label for="biography">Biography:</label><br>
        <textarea id="biography" name="biography" rows="4" cols="50" required></textarea><br><br>

        <label for="additional_info">Additional Information:</label><br>
        <textarea id="additional_info" name="additional_info" rows="4" cols="50" required></textarea><br><br>

        <input type="text" id="designer_id" hidden value="<?php echo $this->session->userdata('user_id'); ?>" name="designer_id" required><br><br>



        <input type="submit" value="Submit">
    </form>
    </div>
    <div>
        <h2>Portfolio Details</h2>
        <table  style="background-color: white; opacity: 0.5;">
            <tr>
                <th>Sno</th>
                <th>Project Details</th>
                <th>Skills</th>
                <th>Education</th>
                <th>Experience</th>
                <th>Certifications</th>
                <th>Contact Information</th>
                <th>Biography</th>
                <th>Additional Information</th>
            </tr>
             <?php if (!empty($designer_portfolio)): ?>
                <?php $counter = 1; ?>
                <?php foreach ($designer_portfolio->result() as $row): ?>
                    <tr>
                        <td><?php echo $counter++; ?></td> <!-- Incrementing counter -->
                        <td><?php echo $row->project_details; ?></td>
                        <td><?php echo $row->skills; ?></td>
                        <td><?php echo $row->education; ?></td>
                        <td><?php echo $row->experience; ?></td>
                        <td><?php echo $row->certifications; ?></td>
                        <td><?php echo $row->contact_informations; ?></td>
                        <td><?php echo $row->biography; ?></td>
                        <td><?php echo $row->additional_informations; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No portfolio found</td>
                </tr>
            <?php endif; ?>
        </table>
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



    

                   
  

