<?php
if ($_GET['randomId'] != "gCe_23bLFIg788XM7iBy6t_k2sb1sOeyxO6WksWZgeZRchoP67Nv8AFi3oxjMRZS") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
