<?php
if ($_GET['randomId'] != "6gL3QL8pbO2JZKMoem6JYsk30oyH76odpwKSbj_2xFaxiu6JKsXwJfBPQ2lbBOxU") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
