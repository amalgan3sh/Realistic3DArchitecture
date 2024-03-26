
        <h1>PROJECTS</h1>
        <div class="table-responsive" style="background-color:white;">

        <table class="table table-striped">
            <form action="<?php echo base_url('index.php/Onlinecontroller/designerFileUpload') ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="project_id" value="<?php echo htmlspecialchars($_GET['project_id']); ?>">

                <tr>
                    <th>Design name</th>
                    <td><input type="design_name" name="design_name"></td>
                </tr>
                <tr>
                    <th>Design</th>
                    <td><input type="file" name="design"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit"></td>
                </tr>
            </form>
        </table>
        <h1>DEISGNS</h1>
        <table>
            <tr>
                <th>Design name</th>
                <th>Image</th>
            </tr>
            <?php foreach ($designs as $design): ?>
            <tr>
                <td><?php echo $design->design_name; ?></td>
                <td><img src="<?php echo base_url($design->image); ?>" alt="<?php echo $design->design_name; ?>" width="100" height="100"></td>
            </tr>
            <?php endforeach; ?>
        </table>

    </div>
    
