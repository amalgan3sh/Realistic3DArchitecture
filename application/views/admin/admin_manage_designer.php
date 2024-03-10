 
    
<div id="page-wrapper">
    <div class="col-md-12 graphs">
       <div class="xs">
        <h3>DESIGNER</h3>
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                <div class="panel-body no-padding">
                    <table class="table table-striped">
                        <thead>
                            <tr class="warning">
                                <th>#</th>
                                <th>Username</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Certification</th>
                                <th>Portfolio</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($designer)): ?>
                <?php $counter = 1; ?>
                <?php foreach ($designer->result() as $row): ?>
                    <tr>
                        <td><?php echo $counter++; ?></td> <!-- Incrementing counter -->
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->first_name; ?></td>
                        <td><?php echo $row->last_name; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->phone; ?></td>
                        <td><?php echo $row->certification; ?></td>
                        <td><?php echo $row->portfolio; ?></td>
                        <td><?php echo $row->status; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No designers found</td>
                </tr>
            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
    </div>
</div>
</div>
</div>

