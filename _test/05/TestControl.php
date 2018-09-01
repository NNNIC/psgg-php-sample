<?php
require('base/StateManager.php');
abstract class TestControl extends StateManager {
    // write your code
    function hoge() {
        echo 'hoge' . '<br>';
    }
}
?>