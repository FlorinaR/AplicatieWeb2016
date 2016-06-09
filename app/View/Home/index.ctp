<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
            <?php echo "Green Agriculture" ?>
    </title>
    <link rel="icon" type="image/ico" href="C:\xampp\htdocs\favicon_ag.ico">
    <?php
            echo $this->Html->css('cake.generic');

            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
    ?>
</head>
<body>
    <div id="container">
<!--        <div id="header">
                <div class="header-elem" id="logo">
                    <img src="/GreenAgriculture/app/webroot/img/green_agriculture.png">
                </div>
                <div class="header-elem" id="title">
                    <h1>Bun venit pe Platforma GreenAgriculture!</h1>
                </div>
                <div class="header-elem submit" id="logout">
                    <?php //echo $this->Form->end(__('Iesire')); ?>
                </div>
                <div id="clear"></div>
        </div>-->

        <div id="content">

                <?php echo $this->Flash->render(); ?>

                <?php echo $this->fetch('content'); ?>
        </div>

    </div>
</body>
</html>

