<?php
class StateManager {
    public $m_curfunc  = NULL;
    public $m_nextfunc = NULL;
    
    public function Update() {
        $bFirst = FALSE;
        if ($m_nextfunc!=NULL) {
            $m_curfunc = $m_nextfunc;
            $m_nextfunc = null;
            $bFirst = TRUE;
        }
        if ($m_curfunc!=NULL) {
            $m_curfunc($bFirst);
        }
    }

    public function GotoState($st) {
        $m_nextfunc = $st;
    }

    public function CheckState($st) {
        return $st == $m_curfunc;
    }
}
?>