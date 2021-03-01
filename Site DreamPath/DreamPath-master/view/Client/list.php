<?php
       require_once File::build_path(array("controller","ControllerClient.php"));

        foreach ($tab_selectAll as $v){
            echo '<p> Client : ' . htmlspecialchars($v->getNom()) . '.</p>';
        }
?>