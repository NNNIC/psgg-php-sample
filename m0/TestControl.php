<?php
require('base/StateManager.php');
abstract class TestControl extends StateManager {

    protected $m_bYesNo;

    function br_YES($st) {
        if ($this->HasNextState()==FALSE) {
            if ($this->m_bYesNo==TRUE) {
                $this->SetNextState($st);
            }
        }
    }
    function br_NO($st) {
        if ($this->HasNextState()==FALSE) {
            if ($this->m_bYesNo==FALSE) {
                $this->SetNextState($st);
            }
        }
    }


    // write your code
    function hoge() {
        echo 'hoge' . '<br>';
    }
}
?>