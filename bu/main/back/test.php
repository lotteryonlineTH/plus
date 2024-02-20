<?php
    isset( $_POST['txt'] ) ? $txt = $_POST['txt'] : $txt = "";
    if( !empty( $txt ) ) {
        echo "<div>ข้อมูลใน textbox คือ {$txt}</div>";
    }
?>