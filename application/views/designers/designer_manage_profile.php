


                            <center>
        <h1><?php echo $this->session->userdata('user_id'); ?>'s PROFILE</h1>
                                <div class="table-responsive" style="max-height: 300px; overflow-y: auto;background-color: rgba(255, 255, 255, 0.5);">

        <table class="table table-striped">
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            
            <?php if (!empty($designer_profile)): ?>
                <?php foreach ($designer_profile->result() as $row): ?>
                    <tr>
                        <td>Username</td>
                        <td id="username"><?php echo $row->username; ?></td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td id="first_name"><?php echo $row->first_name; ?></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td id="last_name"><?php echo $row->last_name; ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td id="email"><?php echo $row->email; ?></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td id="phone"><?php echo $row->phone; ?></td>
                    </tr>
                    <tr>
                        <td>Certification</td>
                        <td id="certification"><?php echo $row->certification; ?></td>
                    </tr>
                    <tr>
                        <td>Portfolio</td>
                        <td id="portfolio"><?php echo $row->portfolio; ?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td id="username"><?php echo $row->username; ?></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td id="password"><?php echo $row->password; ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button onclick="editProfile()">Edit</button>
                            <button onclick="saveProfile()" style="display:none">Save</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="2">No designers found</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
    </center>

    <script>
    function editProfile() {
        var fields = document.querySelectorAll('td[id]');
        fields.forEach(function(field) {
            var value = field.textContent.trim();
            var input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.setAttribute('value', value);
            field.textContent = '';
            field.appendChild(input);
        });
        document.querySelector('button').style.display = 'none';
        document.querySelectorAll('button')[1].style.display = 'inline';
    }

    function saveProfile() {
    var fields = document.querySelectorAll('td[id]');
    var data = {};
    fields.forEach(function(field) {
        var key = field.getAttribute('id');
        var value = field.querySelector('input').value;
        field.textContent = value;
        data[key] = value;
    });

    // Send data to the controller using AJAX
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '<?php echo base_url('index.php/Onlinecontroller/designerEditProfile'); ?>', true);
    xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log(xhr.responseText); // Log the response from the controller
        }
    };
    xhr.send(JSON.stringify(data));
}

</script>
                   