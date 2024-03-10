<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Designer Projects</title>
</head>
<body>

</body>
</html>

    <!-- banner section -->
    <section class="banner-19">
        <div class="banner-layer">
            <video autoplay muted loop id="myVideo">
                <source src="<?php echo base_url('other_assets/') ?>assets/videos/video.mp4" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
            <div class="main-content-top">
                <div class="container">
                    <div class="main-content">
                            <center>
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
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No designers found</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
    </center>
                    </div>
                </div>
            </div>
        </div>
    </section>
