<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architect Manage Project</title>
</head>
<body>
    <h1>Architect Manage Project</h1>
    <!-- Your content for managing projects as an architect goes here -->
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Architect Manage Projects</title>
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

<h2>Architect Manage Projects</h2>

<table  class="table" style="background-color: white; opacity: 0.5px;">
  <tr>
    <th>Project ID</th>
    <th>Project Name</th>
    <th>Description</th>
    <th>Company ID</th>
    <th>Designer ID</th>
    <th>Architect ID</th>
  </tr>
     <?php if (!empty($architect_project)): ?>
                <?php $counter = 1; ?>
                <?php foreach ($architect_project->result() as $row): ?>
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
                    <td colspan="7">No project found</td>
                </tr>
            <?php endif; ?>
  <!-- Add more rows as needed -->
</table>

</body>
</html>
