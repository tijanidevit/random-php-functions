<?php
if (!filter_has_var(INPUT_GET, 'user') ) {
    echo "User Not Passed";
}else{
    echo "User Passed";
}

//http://localhost:8090/7.filter_has_var.php?user=9 => User Passed


//http://localhost:8090/7.filter_has_var.php => User Not Passed

