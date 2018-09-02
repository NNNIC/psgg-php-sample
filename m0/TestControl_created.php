<!--  psggConverterLib.dll converted from TestControl.xlsx.  -->
<?php
require('TestControl.php');
class TestControl_created extends TestControl {

    function Start() {
        $this->GotoState('S_START');
    }

    function IsEnd() {
        return $this->CheckState('S_END');
    }

    function call_state($state, $bFirst) {
        switch($state) {

            case 'S_START': $this->S_START($bFirst); break;
            case 'S_END': $this->S_END($bFirst); break;
            case 'S_HELLO': $this->S_HELLO($bFirst); break;
            case 'S_SELECT': $this->S_SELECT($bFirst); break;
            case 'S_YES': $this->S_YES($bFirst); break;
            case 'S_NO': $this->S_NO($bFirst); break;

        }
    }


    /*
        S_START
    */
    function S_START($bFirst) {
        if ($bFirst)
        {
        }
        if ($this->HasNextState()==FALSE)
        {
            $this->SetNextState('S_HELLO');
        }
        if ($this->HasNextState())
        {
            $this->GoNextState();
        }
    }
    /*
        S_END
    */
    function S_END($bFirst) {
        if ($bFirst)
        {
        }
        if ($this->HasNextState())
        {
            $this->GoNextState();
        }
    }
    /*
        S_HELLO
        Say Hello!
    */
    function S_HELLO($bFirst) {
        if ($bFirst)
        {
            echo "Hello!<br>";
        }
        if ($this->HasNextState()==FALSE)
        {
            $this->SetNextState('S_SELECT');
        }
        if ($this->HasNextState())
        {
            $this->GoNextState();
        }
    }
    /*
        S_SELECT
        Select Yes or No
    */
    function S_SELECT($bFirst) {
        if ($bFirst)
        {
            $this->m_bYesNo = time() % 2 == 0;
        }
        $this->br_YES('S_YES');
        $this->br_NO('S_NO');
        if ($this->HasNextState())
        {
            $this->GoNextState();
        }
    }
    /*
        S_YES
        Say YES
    */
    function S_YES($bFirst) {
        if ($bFirst)
        {
            echo "YES";
        }
        if ($this->HasNextState()==FALSE)
        {
            $this->SetNextState('S_END');
        }
        if ($this->HasNextState())
        {
            $this->GoNextState();
        }
    }
    /*
        S_NO
        Say NO
    */
    function S_NO($bFirst) {
        if ($bFirst)
        {
            echo "NO";
        }
        if ($this->HasNextState()==FALSE)
        {
            $this->SetNextState('S_END');
        }
        if ($this->HasNextState())
        {
            $this->GoNextState();
        }
    }

}

?>

