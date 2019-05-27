<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Jordan Howell CakeBlog';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<?php 	
$this->Session->read('Auth.User');
$permission = $this->Session->read('Auth.User.role');
?>
    <nav class="top-bar expanded" data-topbar role="navigation">
<?php if ($this->Session->read('Auth.User')){ ?>
        <ul class="title-area large-3 large-offset-2 columns">
            <li class="name text-center">
                <h1><?php echo $this->Html->link('Published Posts', ['controller' => 'posts', 'action' => 'index']) ?></h1>
			</li>
        </ul>
<?php } ?>
<?php if (($permission == 0) & ($this->Session->read('Auth.User'))){ ?>
		<ul class="title-area large-3 large-offset-2 columns">
			<li class="name text-center">
				<h1><?php echo $this->Html->link('My Drafts', ['controller' => 'posts', 'action' => 'drafts']) ?></h1>
            </li>
		</ul>	
<?php } ?>
<?php if (($permission == 1) & ($this->Session->read('Auth.User'))) { ?>
		<ul class="title-area large-3 large-offset-2 columns">
			<li class="name text-center">
				<h1><?php echo $this->Html->link('Unpublished Posts', ['controller' => 'posts', 'action' => 'unpublished']) ?></h1>
            </li>
		</ul>
<?php } ?>
			
        <div class="top-bar-section">
            <ul class="right">
				<?php if ($this->Session->read('Auth.User')){ ?><li><?php echo $this->Html->link('Logout', ['controller' => 'users', 'action' => 'logout']); ?></li><?php } ?>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
