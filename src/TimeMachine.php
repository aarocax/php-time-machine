<?php

namespace TimeMachine\src;

class TimeMachine
{
	public static function firstDayOfWeek($date = null)
  {
    if ($date instanceof \DateTime) {
        $date = clone $date;
    } else if (!$date) {
        $date = new \DateTime();
    } else {
        $date = new \DateTime($date);
    }

    if ($date->format('N') != 1) {
      $date->modify('last monday');
    }
    $date->setTime(0, 0, 0);
    return $date;
  }

  public static function lastDayOfWeek($date = null)
  {
    if ($date instanceof \DateTime) {
        $date = clone $date;
    } else if (!$date) {
        $date = new \DateTime();
    } else {
        $date = new \DateTime($date);
    }
    
    if ($date->format('N') != 7) {
      $date->modify('Next Sunday');  
    } 
    $date->setTime(23,59,59);
    return $date;
  }

  public static function firstDayOfMonth($date = null)
  {
    if ($date instanceof \DateTime) {
        $date = clone $date;
    } else if (!$date) {
        $date = new \DateTime();
    } else {
        $date = new \DateTime($date);
    }

    if ($date->format('d') != 1) {
      $date->modify('first day of this month');
    }
    $date->setTime(0, 0, 0);
    return $date;
  }

  public static function lastDayOfMonth($date = null)
  {
    if ($date instanceof \DateTime) {
          $date = clone $date;
      } else if (!$date) {
          $date = new \DateTime();
      } else {
          $date = new \DateTime($date);
      }
           
      $date->modify('last day of this month');  
      
      $date->setTime(23,59,59);
      return $date;
  }

  public static function firstDayOfYear($date = null)
  {
      if ($date instanceof \DateTime) {
          $date = clone $date;
      } else if (!$date) {
          $date = new \DateTime();
      } else {
          $date = new \DateTime($date);
      }

      
      $date->modify('first day of January');
      
      $date->setTime(0, 0, 0);
      return $date;
  }
  
  public static function lastDayOfYear($date = null)
  {
    if ($date instanceof \DateTime) {
      $date = clone $date;
    } else if (!$date) {
      $date = new \DateTime();
    } else {
      $date = new \DateTime($date);
    }
         
    $date->modify('last day of December');  
    
    $date->setTime(23,59,59);
    return $date;
  }

  public static function setTimeToZero($date)
  {
    $d = clone $date;
    $d->setTime(00, 00, 00);
    return $d;
  }

  public static function setTimeToMax($date)
  {
    $d = clone $date;
    $d->setTime(23, 59, 59);
    return $d;
  }

  public static function getDateTimeOf($timezone = null)
  {
  	if (in_array($timezone , timezone_identifiers_list())) {
			$timezone = new \DateTimeZone($timezone);
		} else {
			$timezone = new \DateTimeZone(date_default_timezone_get());
		}
  	$date = new \DateTime('now', $timezone);
    return $date;
  }
}