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
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html lang="en">
<?=$this->element("header");?>
<body class="g-sidenav-show  bg-gray-100">
    <?=$this->element("sidebar");?>     
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg"> 
      <!-- <nav class="navbar navbar-main navbar-expand-lg mx-5 px-0 shadow-none rounded" id="navbarBlur" navbar-scroll="true">
          $this->element("navigation");?>
      </nav>     -->
      <div class="container-fluid py-4 px-5">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
        
      </div>
      <?=$this->element("footer");?> <!--end::Footer-->
    </main>
    <?=$this->element("script");?>
</body>
</html>