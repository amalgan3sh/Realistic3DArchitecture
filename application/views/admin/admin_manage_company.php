
 
<div id="page-wrapper">
    <div class="col-md-12 graphs">
       <div class="xs">
        <h3>COMPANY</h3>
    <div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
                <div class="panel-body no-padding">
                    <table class="table table-striped">
                        <thead>
                            <tr class="warning">
                                <th>#</th>
                                <th>Username</th>
                                <th>Company name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>PAN Number</th>
                                <th>GST Number</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($company)): ?>
                <?php $counter = 1; ?>
                <?php foreach ($company->result() as $row): ?>
                    <tr>
                        <td><?php echo $counter++; ?></td> <!-- Incrementing counter -->
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->company_name; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->phone; ?></td>
                        <td><?php echo $row->pan_number; ?></td>
                        <td><?php echo $row->gst; ?></td>
                        <td><?php echo $row->status; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No Company found</td>
                </tr>
            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
    </div>
</div>
</div>
</div>



