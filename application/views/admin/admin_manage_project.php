
<div id="page-wrapper">
    <div class="col-md-12 graphs">
       <div class="xs">
        <h3>PROJECT</h3>
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                <div class="panel-body no-padding">
                    <table class="table table-striped">
                        <thead>
                            <tr class="warning">
                                <th>#</th>
                                <th>Project Name</th>
                                <th>Description</th>
                                <th>Company</th>
                                <th>Designer</th>
                                <th>Architect</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($project)): ?>
                <?php $counter = 1; ?>
                <?php foreach ($project->result() as $row): ?>
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
                    <td colspan="7">No project found</td>
                </tr>
            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
    </div>
</div>
</div>
</div>




