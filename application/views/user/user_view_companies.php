<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User : View companies</title>
</head>
<body>
    <center>
        <h1 style="color: white;">COMPANIES'S</h1>
        <table class="table" style="background-color: white; opacity: 0.5px;">
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Company name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>PAN Number</th>
                <th>GST Number</th>
                <th></th>
            </tr>
            
            <?php if (!empty($companies)): ?>
                <?php $counter = 1; ?>
                <?php foreach ($companies->result() as $row): ?>
                    <tr>
                        <td><?php echo $counter++; ?></td> <!-- Incrementing counter -->
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->company_name; ?></td>
                        <td><?php echo $row->email; ?></td>
                        <td><?php echo $row->phone; ?></td>
                        <td><?php echo $row->pan_number; ?></td>
                        <td><?php echo $row->gst; ?></td>
                        <td><a href="<?php echo base_url('index.php/Onlinecontroller/userAssignWorkToCompany?company_id=' . $row->company_id); ?>">Assign work</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No Companies found</td>
                </tr>
            <?php endif; ?>
        </table>
    </center>
</body>
</html>
