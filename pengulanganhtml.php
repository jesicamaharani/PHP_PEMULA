<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pengulanganhtml</title>
</head>
<body>

<table border="1" cellpadding="10" cellspancing="0">
    <?php for( $i = 1; $i <= 3; $i++ ):?>
    <tr>
        <?php for( $j = 1; $j <= 5; $j++ ): ?>
        <td><?php echo "$i,$j"; ?></td>
    <?php endfor?>
        </tr>
    <?php endfor; ?>