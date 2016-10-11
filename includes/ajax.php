<?php
if (isset($_POST['action'])) {
    switch ($_POST['action']) {
        case 'dick':
            dick();
            break;
        case 'select':
            select();
            break;
    }
}

function select() {
    echo "The select function is called.";
    exit;
}

function dick() {
    echo "The insert function is called.";
    exit;
}
?>