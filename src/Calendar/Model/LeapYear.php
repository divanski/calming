<?php
/**
 * Created by divanski.
 * User: Ivan Zdravkov
 * Mail: i_zdravkov@abv.bg
 * Date: 22.2.2017 г.
 * Time: 11:33
 */
namespace Calendar\Model;

class LeapYear
{
    public function isLeapYear($year = null)
    {
        if (null === $year) {
            $year = date('Y');
        }
        
        return 0 == $year % 400 || (0 == $year % 4 && 0 != $year % 100);
    }
}