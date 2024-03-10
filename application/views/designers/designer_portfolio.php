

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Portfolio Item</title>
    <style>
        body {
            display: flex;
            justify-content: space-between;
        }
        form {
            flex: 1;
            margin-right: 20px; /* Adjust the margin as needed */
        }
        table {
            flex: 1;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div>
        <h1>Add Portfolio Item</h1>
            <form action="<?php echo base_url('index.php/Onlinecontroller/designerAddPortfolio'); ?>" method="post">
        <label for="project_details">Project Details:</label><br>
        <input type="text" id="project_details" name="project_details" required><br><br>

        <label for="skills">Skills:</label><br>
        <input type="text" id="skills" name="skills" required><br><br>

        <label for="education">Education:</label><br>
        <input type="text" id="education" name="education" required><br><br>

        <label for="experience">Experience:</label><br>
        <input type="text" id="experience" name="experience" required><br><br>

        <label for="certifications">Certifications:</label><br>
        <input type="text" id="certifications" name="certifications" required><br><br>

        <label for="contact_info">Contact Information:</label><br>
        <input type="text" id="contact_info" name="contact_info" required><br><br>

        <label for="biography">Biography:</label><br>
        <textarea id="biography" name="biography" rows="4" cols="50" required></textarea><br><br>

        <label for="additional_info">Additional Information:</label><br>
        <textarea id="additional_info" name="additional_info" rows="4" cols="50" required></textarea><br><br>

        <input type="text" id="designer_id" hidden value="<?php echo $this->session->userdata('user_id'); ?>" name="designer_id" required><br><br>



        <input type="submit" value="Submit">
    </form>
    </div>
    <div>
        <h2>Portfolio Details</h2>
        <table>
            <tr>
                <th>Sno</th>
                <th>Project Details</th>
                <th>Skills</th>
                <th>Education</th>
                <th>Experience</th>
                <th>Certifications</th>
                <th>Contact Information</th>
                <th>Biography</th>
                <th>Additional Information</th>
            </tr>
             <?php if (!empty($designer_portfolio)): ?>
                <?php $counter = 1; ?>
                <?php foreach ($designer_portfolio->result() as $row): ?>
                    <tr>
                        <td><?php echo $counter++; ?></td> <!-- Incrementing counter -->
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
            <?php else: ?>
                <tr>
                    <td colspan="7">No portfolio found</td>
                </tr>
            <?php endif; ?>
        </table>
    </div>
</body>
</html>

