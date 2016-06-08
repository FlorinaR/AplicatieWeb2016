<!DOCTYPE HTML>
<html>
    <body>
        <h1>Managers</h1>
        <?php foreach ($managers as $manager): ?>
            <p><?php echo $manager['Manager']['first_name']; ?> | 
                <?php echo $manager['Manager']['last_name']; ?> |
                <?php echo $manager['Manager']['password']; ?> |
                <?php echo $manager['Manager']['cooperative_name']; ?>
            </p>
        <?php endforeach; ?>
        <?php unset($manager);?>
    </body>
</html>