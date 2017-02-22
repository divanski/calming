<?php
/**
 * Created by divanski.
 * User: Ivan Zdravkov
 * Mail: i_zdravkov@abv.bg
 * Date: 22.2.2017 г.
 * Time: 11:32
 */
namespace Calendar\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Calendar\Model\LeapYear;

class LeapYearController
{
    public function indexAction(Request $request, $year)
    {
        $leapyear = new LeapYear();
        if ($leapyear->isLeapYear($year)) {
            return new Response('Yep, this is a leap year!');
        }
        
        return new Response('Nope, this is not a leap year.');
    }
}