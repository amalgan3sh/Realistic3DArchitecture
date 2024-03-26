
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
    
