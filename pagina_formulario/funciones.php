<?php
if (!function_exists('escapar')) {
    function escapar($html) {
        return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
    }
}

?>
