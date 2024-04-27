<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Project</title>
</head>
<body>
    <center>
    <h2>Ongoing Projects</h2>
        <table border="1" style="background-color: white; opacity: 0.5px;">
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
    </center>
</body>
</html>
