<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of KDate
 *
 * @author SHI
 */
//[Date]
//; Defines the default timezone used by the date functions
//date.timezone = “Asia/Bangkok”
//หลังจากนั้น restart apache เวลาก็เดินตรงแล้วครับ
//หรือใส่ คำสั่งนี้ไว้ใน .php เลยครับ
//date_default_timezone_set("Asia/Bangkok");
class KDate {
    public function getApartmentCode($uid){
        $d=date("d");
        $m=date("m");
        $y=date("y");
        return "MK$d$m$y$uid";
    }
    
    public function getThaiDate($date){
        $d=date('d',  strtotime($date));
        $m=date('m',  strtotime($date));
        $Y=date('Y',  strtotime($date))+543;
        return $d.'-'.$m.'-'.$Y;
    }
}

?>
