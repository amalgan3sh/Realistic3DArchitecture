<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Client Management</title>
</head>
<body>
    <h1>Company Client Management</h1>
    <!-- Your content for managing clients goes here -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Client Management</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>


<table border="1"  style="background-color:white;">
            <tr>
                <th>S No</th>
                <th>Client Name</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
            
            <?php if (!empty($users)): ?>
                <?php $counter = 1; ?>
                <?php foreach ($users->result() as $row): ?>
                    <tr>
                        <td><?php echo $counter++; ?></td> <!-- Incrementing counter -->
                        <td><?php echo $row->username; ?></td>
                        <td><?php echo $row->phone; ?></td>
                        <td><?php echo $row->email; ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No clients found</td>
                </tr>
            <?php endif; ?>
        </table>

</body>
</html>
