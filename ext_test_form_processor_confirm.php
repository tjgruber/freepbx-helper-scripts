<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $extension = $_POST['extension'];

    if (isset($_POST['confirm_reload'])) {

        foreach ($extension as $extension_value) { 
            echo "<center>$extension_value</center>\n";
            //pass $extension_value to RELOAD function here.
        }
        echo "Reload done.";
        echo "\n</fieldset>";
        echo "\n</center>";
    } 
    if (isset($_POST['confirm_reboot'])) {
        foreach ($extension as $extension_value) { 
            echo "<center>$extension_value</center>\n";
            //pass $extension_value to REBOOT function here.
        }
        echo "Reboot done.";
        echo "\n</fieldset>";
        echo "\n</center>";
    }

}

?>