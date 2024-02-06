<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['tag_page'] ?></title>
</head>

<body>
    <h1><?php echo $data['page_title'] ?></h1>

    <?php
    dep($data);
    ?>
    <?php
    echo base_url();
    ?>

</body>

</html>