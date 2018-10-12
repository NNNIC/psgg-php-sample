<?php
require('base/StateManager.php');
class TestControl extends StateManager {

    function Start() {
        $this->GotoState('S_START');
    }

    function IsEnd() {
        return $this->CheckState('S_END');
    }

    function call_state($state, $bFirst) {
        switch($state) {
            //[SYN-G-GEN OUTPUT START] indent(12) $/^S_/->#case$
//  psggConverterLib.dll converted from TestControl.xlsx. 
            case 'S_0001': $this->S_0001($bFirst); break;
            case 'S_0002': $this->S_0002($bFirst); break;
            case 'S_0003': $this->S_0003($bFirst); break;
            case 'S_0004': $this->S_0004($bFirst); break;
            case 'S_0005': $this->S_0005($bFirst); break;
            case 'S_0006': $this->S_0006($bFirst); break;
            case 'S_0007': $this->S_0007($bFirst); break;
            case 'S_END': $this->S_END($bFirst); break;
            case 'S_START': $this->S_START($bFirst); break;


            //[SYN-G-GEN OUTPUT END]
        }
    }

    //[SYN-G-GEN OUTPUT START] indent(4) $/./$
//  psggConverterLib.dll converted from TestControl.xlsx. 
    /*
        E_0005
    */
    function hoge($a1)
    {
        echo "Hoge<br>";
        return $a1 *  2;
    }
    /*
        S_0001
        new state
    */
    function S_0001($bFirst) {
        if ($bFirst)
        {
            $a= $this->hoge(2);
        }
        if ($a==1) { $this->GotoState( 'S_0002' ); }
        elseif ($a==2) { $this->GotoState( 'S_0003' ); }
        else { $this->GotoState( 'S_0004' ); }
    }
    /*
        S_0002
    */
    function S_0002($bFirst) {
        if ($bFirst)
        {
            echo '$a=1<br>';
        }
        if ($this->HasNextState()==FALSE)
        {
            $this->GotoState('S_END');
        }
    }
    /*
        S_0003
    */
    function S_0003($bFirst) {
        if ($bFirst)
        {
            echo '$a=2<br>';
        }
        if ($this->HasNextState()==FALSE)
        {
            $this->GotoState('S_END');
        }
    }
    /*
        S_0004
    */
    function S_0004($bFirst) {
        if ($bFirst)
        {
            echo '$a>2<br>';
        }
        if ($this->HasNextState()==FALSE)
        {
            $this->GotoState('S_0006');
        }
    }
    /*
        S_0005
    */
    function S_0005($bFirst) {
        if ($bFirst)
        {
            echo 'YES<br>';
        }
        if ($this->HasNextState()==FALSE)
        {
            $this->GotoState('S_END');
        }
    }
    /*
        S_0006
    */
    function S_0006($bFirst) {
        if ($bFirst)
        {
            $this->m_bYesNo = FALSE;
        }
        $this->br_YES('S_0005');
        $this->br_NO('S_0007');
    }
    /*
        S_0007
    */
    function S_0007($bFirst) {
        if ($bFirst)
        {
            echo 'NO<br>';
        }
        if ($this->HasNextState()==FALSE)
        {
            $this->GotoState('S_END');
        }
    }
    /*
        S_END
    */
    function S_END($bFirst) {
    }
    /*
        S_START
    */
    function S_START($bFirst) {
        if ($this->HasNextState()==FALSE)
        {
            $this->GotoState('S_0001');
        }
    }


    //[SYN-G-GEN OUTPUT END]

    protected $m_bYesNo;

    function br_YES($st) {
        if ($this->HasNextState()==FALSE) {
            if ($this->m_bYesNo==TRUE) {
                $this->GotoState($st);
            }
        }
    }

    function br_NO($st) {
        if ($this->HasNextState()==FALSE) {
            if ($this->m_bYesNo==FALSE) {
                $this->GotoState($st);
            }
        }
    }
}
?>