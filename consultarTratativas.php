<?php
IF ($consultarContato != NULL && !empty($consultarContato)){
    require_once 'consultarInterface.php';
} else {
    echo "Página com erro";
}
?>