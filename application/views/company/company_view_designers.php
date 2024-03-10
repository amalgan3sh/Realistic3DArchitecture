<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company Manage Designer</title>
</head>
<body>
    <center>
        <h1>DESIGNER'S</h1>
        <table border="1">
            <tr>
                <th>S No</th>
                <th>Username</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Certification</th>
                <th>Portfolio</th>
            </tr>
            
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
                        <td><a href="<?php echo base_url('index.php/Onlinecontroller/companyViewDesignerPortfolio?designer_id=' . $row->designer_id); ?>">Portfolio</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No designers found</td>
                </tr>
            <?php endif; ?>
        </table>
    </center>
</body>
</html>
