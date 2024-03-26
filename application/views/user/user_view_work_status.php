<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User : View companies</title>
</head>
<body>
    <center>
        <h1 style="color: white;">WORK STATUS</h1>
        <table class="table" style="background-color: white; opacity: 0.5px;">
            <tr>
                <th>#</th>
                <th>Project Name</th>
                <th>Description</th>
                <th>Company</th>
                <th>Status</th>
            </tr>
            
            <?php if (!empty($work_status)): ?>
                <?php $counter = 1; ?>
                <?php foreach ($work_status->result() as $row): ?>
                    <tr>
                        <td><?php echo $counter++; ?></td> <!-- Incrementing counter -->
                        <td><?php echo $row->project_name; ?></td>
                        <td><?php echo $row->description; ?></td>
                        <td><?php echo $row->company_id; ?></td>
                        <td><?php echo $row->status; ?></td>
                        <td><a href="<?php echo base_url('index.php/Onlinecontroller/userChat'); ?>">Chat</td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No work found</td>
                </tr>
            <?php endif; ?>
        </table>
    </center>
</body>
</html>
