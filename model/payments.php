<?php
/**
 * Created by PhpStorm.
 * User: VXBa9
 * Date: 19.12.2018
 * Time: 13:51
 */
require_once 'model.php';

interface PaymentStrategy{
    public function calcPayment($reservationLength);
}

class SummerMorningPaymentStrategy implements PaymentStrategy{
    public function calcPayment($reservationLength)
    {
        return $reservationLength*25;
    }
}

class SummerAfternoonPaymentStrategy implements PaymentStrategy{
    public function calcPayment($reservationLength)
    {
        return $reservationLength*30;
    }
}

class WinterMorningPaymentStrategy implements PaymentStrategy{
    public function calcPayment($reservationLength)
    {
        return $reservationLength*35;
    }
}

class WinterAfternoonPaymentStrategy implements PaymentStrategy{
    public function calcPayment($reservationLength)
    {
        return $reservationLength*40;
    }
}

class PaymentsModel extends Model{
    public function getPaymentStrategy($month, $time){
        if($month<5 OR $month>9){
            if($time < 15){
                return new WinterMorningPaymentStrategy();
            }
            else{
                return new WinterAfternoonPaymentStrategy();
            }
        }
        else{
            if($time < 15){
                return new SummerMorningPaymentStrategy();
            }
            else{
                return new SummerAfternoonPaymentStrategy();
            }
        }
    }

}