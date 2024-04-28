
<div class="login-container" id="loginContainer">

                    <h2>Architecture Page and Collaborating Projects</h2>

                  <table class="table" style="background-color: white; opacity: 0.5px;">
    <thead>
        <tr>
            <th>Project Name</th>
            <th>Description</th>
            <th>Client</th>
            <th>Location</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Modern Art Museum</td>
            <td>A contemporary museum featuring modern artworks.</td>
            <td>City Art Association</td>
            <td>New York City, USA</td>
            <td>In Progress</td>
        </tr>
        <tr>
            <td>Urban Renewal Project</td>
            <td>Revitalization of downtown area with mixed-use development.</td>
            <td>City Council</td>
            <td>London, UK</td>
            <td>Completed</td>
        </tr>
        <tr>
            <td>Residential Tower</td>
            <td>A luxury residential tower with stunning views of the city skyline.</td>
            <td>Private Developer</td>
            <td>Dubai, UAE</td>
            <td>Planning Stage</td>
        </tr>
        <tr>
            <td>Cultural Center Expansion</td>
            <td>Expansion of an existing cultural center to accommodate growing demand.</td>
            <td>Government Agency</td>
            <td>Paris, France</td>
            <td>Under Review</td>
        </tr>
    </tbody>
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



    

                   
  

