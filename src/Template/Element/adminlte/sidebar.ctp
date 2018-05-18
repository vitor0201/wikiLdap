<?php 
      if (!isset($sidebar) || empty($sidebar)) {
          $sidebar = $this->requestAction(['controller' => 'Menus', 'action' => 'sidebar']);
      }
      echo $sidebar;
?>


