<?php
// DB設定の読込
require_once 'db_conect.php';

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
}

require_once './views/show.tpl.php';