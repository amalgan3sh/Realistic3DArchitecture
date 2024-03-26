<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User : Assign work</title>
</head>
<body>
    <center>
        <h1 style="color: white;">Assign work</h1>
        <table class="table" style="background-color: white; opacity: 0.5px;">
            <form action="<?php echo base_url('index.php/Onlinecontroller/userConfirmWorkAssignedToClient') ?>">
                <tr>
                    <th>Project Name</th>
                    <td><input type="text" name="project_name"></td>
                </tr>
                <tr>
                    <th>Description</th>
                    <td><input type="text" name="description"></td>
                </tr>
                    <input hidden type="text" name="company_id" value="<?php echo isset($_GET['company_id']) ? $_GET['company_id'] : ''; ?>">
                <tr>
                    <td><input type="submit" name="submit"></td>
                </tr>
            </form>
        </table>
    </center>
</body>
</html>
