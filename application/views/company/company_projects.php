<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Project</title>
</head>
<body>
    <center>
    <h1>Add New Project</h1>
    <form action="<?php echo base_url('index.php/Onlinecontroller/companyAddProject') ?>" method="post">
        <label for="project_name">Project Name:</label><br>
        <input type="text" id="project_name" name="project_name" required><br><br>
        
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" rows="4" cols="50" required></textarea><br><br>
        
        <!-- Assume company ID is stored in a session or passed through some mechanism -->
        <input type="hidden" name="company_id" value="<?php echo $this->session->userdata('user_id'); ?>"> <!-- Replace "1" with the actual company ID -->
        
        <label for="designer_id">Select Designer:</label><br>
        <select id="designer_id" name="designer_id" required>
            <option value="">Select Designer</option>
                <?php foreach ($designers->result() as $designer) { ?>
                    <option value="<?php echo $designer->designer_id; ?>"><?php echo $designer->username; ?></option>
                <?php } ?>
        </select><br><br>
        
        <label for="architect_id">Select Architect:</label><br>
        <select id="architect_id" name="architect_id" required>
            <option value="">Select Architect</option>
            <?php foreach ($architects->result() as $architect) { ?>
                <option value="<?php echo $architect->architect_id; ?>"><?php echo $architect->username; ?></option>
            <?php } ?>
        </select><br><br>
        
        
        <input type="submit" value="Submit">
    </form>

    <h2>Ongoing Projects</h2>
        <table border="1">
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
                    <td><?php echo $project->designer_id; ?></td>
                    <td><?php echo $project->architect_id; ?></td>
                    <td><?php echo $project->status; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    </center>
</body>
</html>
