<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <!-- loding css for grocery crud -->
    <?php foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
</head>
<body>
    
<!-- navigation  -->
<ul>
    <li><a href="<?= base_url('admin/gallery')?>">Gallery</a></li>
    <li><a href="<?= base_url('admin/video')?>">Video</a></li>
    <li><a href="<?= base_url('admin/afliations')?>">Affliations</a></li>
    <li><a href="<?= base_url('admin/qualification')?>">Qualification</a></li>
   
</ul>
<!-- end nav  -->



<div style="padding: 10px">
    <?php echo $output; ?>
</div>


<!-- script loaded for grocery crud -->
<?php foreach($js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</body>
</html>