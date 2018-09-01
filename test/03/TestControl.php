<?php
require('StateManager.php');
class TestControl extends StateManager {
    function S_START($bFirst) {
        if ($bFirst) {
            echo 'Into S_START';
            $this->GotoState(S_0001);
        }
    }
    function S_0001($bFirst) {
        if ($bFirst) {
            echo 'Into S_END';
            $this->GotoState(S_END);
        }
    }
    function S_END($bFirst) {
        if ($bFirst) {
            echo 'Into S_END';
        }
    }
    // ---
    function Start() {
        $this->GotoState($this->S_START);
    }
    function IsEnd() {
        return $this->CheckState($this->S_END);
    }
    function Call_func($bFirst) {
        if ($m_curfunc == "S_START") S_START($bFirst);
    }

}



?>