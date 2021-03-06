<?php
require('StateManager.php');
class TestControl extends StateManager {
    function S_START($bFirst) {
        if ($bFirst) {
            echo 'Into S_START<br>';
            $this->GotoState('S_0001');
        }
    }
    function S_0001($bFirst) {
        if ($bFirst) {
            echo 'Into S_0001<br>';
            $this->GotoState('S_END');
        }
    }
    function S_END($bFirst) {
        if ($bFirst) {
            echo 'Into S_END<br>';
        }
    }
    // ---
    function Start() {
        $this->GotoState('S_START');
    }
    function IsEnd() {
        return $this->CheckState('S_END');
    }
    function call_state($state, $bFirst) {
        switch($state) {
            case 'S_START': $this->S_START($bFirst); break;
            case 'S_0001':  $this->S_0001($bFirst);  break;
            case 'S_END':   $this->S_END($bFirst);   break;
        }
    }
}



?>