<?php

class SingleMethodCallPerLineSniff
{
    public function run()
    {
        $this->callOne()
            ->callTwo()
            ->callThree();
    }

    private function callOne()
    {
        return $this;
    }

    private function callTwo()
    {
        return $this;
    }

    private function callThree()
    {
        return $this;
    }
}