<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User: Assign Work</title>
</head>
<body>
    <center>
        <h1 style="color: white;">Assign Work</h1>
        <table class="table" style="background-color: white; opacity: 0.5px;">
            <form action="<?php echo base_url('index.php/Onlinecontroller/userConfirmWorkAssignedToClient') ?>" method="post">
                <tr>
                    <th>Project Name</th>
                    <td><input type="text" name="project_name" required></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input type="text" name="description" required></td>
                </tr>
                <tr>
                    <th>Project Location</th>
                    <td><input type="text" name="location"></td>
                </tr>
                <tr>
                    <th>Start Date</th>
                    <td><input type="date" name="start_date"></td>
                </tr>
                <tr>
                    <th>End Date</th>
                    <td><input type="date" name="end_date"></td>
                </tr>
                <tr>
                    <th>Budget</th>
                    <td><input type="number" name="budget" step="0.01"></td>
                </tr>
                <tr>
                    <th>Materials Needed</th>
                    <td><textarea name="materials_needed" rows="4"></textarea></td>
                </tr>
                <tr>
                    <th>Special Requirements</th>
                    <td><textarea name="special_requirements" rows="4"></textarea></td>
                </tr>
                <input type="hidden" name="company_id" value="<?php echo isset($_GET['company_id']) ? $_GET['company_id'] : ''; ?>">
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Assign Work"></td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>
