<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Designer Portfolio</title>
    <!-- Add your CSS stylesheets here -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Architect Portfolio</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Project Details</th>
                <th>Skills</th>
                <th>Education</th>
                <th>Experience</th>
                <th>Certifications</th>
                <th>Contact Information</th>
                <th>Biography</th>
                <th>Additional Information</th>
            </tr>
        </thead>
        <tbody>
            <!-- Loop through your data to display each row -->
            <?php foreach ($architect_portfolio as $row): ?>
                <tr>
                    <td><?php echo $row->project_details; ?></td>
                    <td><?php echo $row->skills; ?></td>
                    <td><?php echo $row->education; ?></td>
                    <td><?php echo $row->experience; ?></td>
                    <td><?php echo $row->certifications; ?></td>
                    <td><?php echo $row->contact_informations; ?></td>
                    <td><?php echo $row->biography; ?></td>
                    <td><?php echo $row->additional_informations; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- Add your JavaScript scripts here -->
    <script src="scripts.js"></script>
</body>
</html>
