<?php

class CIPage extends Page
{
    /**
     * Simple function for testing, simply double a number.
     *
     * @param int $n a number
     *
     * @return int double the original number
     */
    public function doubleNumber($n)
    {
        return 2 * $n;
    }
}
