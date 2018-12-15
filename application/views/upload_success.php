<html>
<head>
    <title>Success Message</title>
</head>
<body>
<h3>Congragulation You Have Successfuly Uploaded</h3>
<!-- Uploaded file specification will show up here -->
<ul>
<?php foreach($products as $i){ ?>
                    <tr>
                    <td><?php echo $i->product; ?></td>
                    <td><?php echo $i->price; ?></td>
                    <td><?php echo $i->file_name; ?></td>
                    <td><?php echo $i->inventory; ?></td>
                </tr>
            <?php } ?>


</ul>
<p><?php echo anchor('upload_controller/file_view', 'Upload Another File!'); ?></p>
</body>
</html>