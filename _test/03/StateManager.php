<?php
abstract class StateManager {
    abstract protected function call_state($state, $b);

    public $m_curfunc  = NULL;
    public $m_nextfunc = NULL;

    public function Update() {
        $bFirst = FALSE;
        if ($this->m_nextfunc!=NULL) {
            $this->m_curfunc = $this->m_nextfunc;
            $this->m_nextfunc = NULL;
            $bFirst = TRUE;
        }
        if ($this->m_curfunc!=NULL) {
            $this->call_state($this->m_curfunc, $bFirst);
        }
    }

    public function GotoState($st) {
        $this->m_nextfunc = $st;
    }

    public function CheckState($st) {
        return $st == $this->m_curfunc;
    }
}
?>