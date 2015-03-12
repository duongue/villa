<?php
if ($_GET['randomId'] != "4XtOHBw1HaZDd3lOvs79mPyP3sSUmxd9r7j6IDZWS_f90gNjNLHZoytKFzUb1JVI") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
