<?php
/**
 * Created by PhpStorm.
 * User: bartoszbujak
 * Date: 16/01/2019
 * Time: 17:51
 */

use PHPUnit\Framework\TestCase;
include "../../model/payments.php";

class PaymentsModelTest extends TestCase
{

    public function test_GetPaymentStrategy_m1t9_WinterMorning(){
        $payModel = new PaymentsModel();
        $this->assertEquals(new WinterMorningPaymentStrategy(), $payModel->getPaymentStrategy(1,9));
    }
    public function test_GetPaymentStrategy_m1t14_WinterMorning(){
        $payModel = new PaymentsModel();
        $this->assertEquals(new WinterMorningPaymentStrategy(), $payModel->getPaymentStrategy(1,14));
    }
    public function test_GetPaymentStrategy_m1t15_NoWinterMorning(){
        $payModel = new PaymentsModel();
        $this->assertNotEquals(new WinterMorningPaymentStrategy(), $payModel->getPaymentStrategy(1,15));
    }
    public function test_GetPaymentStrategy_m4t9_WinterMorning(){
        $payModel = new PaymentsModel();
        $this->assertEquals(new WinterMorningPaymentStrategy(), $payModel->getPaymentStrategy(4,9));
    }
    public function test_GetPaymentStrategy_m5t9_NoWinterMorning(){
        $payModel = new PaymentsModel();
        $this->assertNotEquals(new WinterMorningPaymentStrategy(), $payModel->getPaymentStrategy(5,9));
    }
    public function test_GetPaymentStrategy_m9t9_NoWinterMorning(){
        $payModel = new PaymentsModel();
        $this->assertNotEquals(new WinterMorningPaymentStrategy(), $payModel->getPaymentStrategy(9,9));
    }
    public function test_GetPaymentStrategy_m10t9_WinterMorning(){
        $payModel = new PaymentsModel();
        $this->assertEquals(new WinterMorningPaymentStrategy(), $payModel->getPaymentStrategy(10,9));
    }


    public function test_GetPaymentStrategy_m1t19_WinterAfternoon(){
        $payModel = new PaymentsModel();
        $this->assertEquals(new WinterAfternoonPaymentStrategy(), $payModel->getPaymentStrategy(1,19));
    }
    public function test_GetPaymentStrategy_m1t15_WinterAfternoon(){
        $payModel = new PaymentsModel();
        $this->assertEquals(new WinterAfternoonPaymentStrategy(), $payModel->getPaymentStrategy(1,15));
    }
    public function test_GetPaymentStrategy_m1t14_NoWinterAfternoon(){
        $payModel = new PaymentsModel();
        $this->assertNotEquals(new WinterAfternoonPaymentStrategy(), $payModel->getPaymentStrategy(1,14));
    }
    public function test_GetPaymentStrategy_m4t19_WinterAfternoon(){
        $payModel = new PaymentsModel();
        $this->assertEquals(new WinterAfternoonPaymentStrategy(), $payModel->getPaymentStrategy(4,19));
    }
    public function test_GetPaymentStrategy_m5t19_NoWinterAfternoon(){
        $payModel = new PaymentsModel();
        $this->assertNotEquals(new WinterAfternoonPaymentStrategy(), $payModel->getPaymentStrategy(5,19));
    }
    public function test_GetPaymentStrategy_m9t19_NoWinterAfternoon(){
        $payModel = new PaymentsModel();
        $this->assertNotEquals(new WinterAfternoonPaymentStrategy(), $payModel->getPaymentStrategy(9,19));
    }
    public function test_GetPaymentStrategy_m10t19_WinterAfternoon(){
        $payModel = new PaymentsModel();
        $this->assertEquals(new WinterAfternoonPaymentStrategy(), $payModel->getPaymentStrategy(10,19));
    }

    public function test_GetPaymentStrategy_m7t9_SummerMorning(){
        $payModel = new PaymentsModel();
        $this->assertEquals(new SummerMorningPaymentStrategy(), $payModel->getPaymentStrategy(7,9));
    }
    public function test_GetPaymentStrategy_m7t14_SummerMorning(){
        $payModel = new PaymentsModel();
        $this->assertEquals(new SummerMorningPaymentStrategy(), $payModel->getPaymentStrategy(7,14));
    }
    public function test_GetPaymentStrategy_m7t15_NoSummerMorning(){
        $payModel = new PaymentsModel();
        $this->assertNotEquals(new SummerMorningPaymentStrategy(), $payModel->getPaymentStrategy(7,15));
    }
    public function test_GetPaymentStrategy_m5t9_SummerMorning(){
        $payModel = new PaymentsModel();
        $this->assertEquals(new SummerMorningPaymentStrategy(), $payModel->getPaymentStrategy(5,9));
    }
    public function test_GetPaymentStrategy_m4t9_NoSummerMorning(){
        $payModel = new PaymentsModel();
        $this->assertNotEquals(new SummerMorningPaymentStrategy(), $payModel->getPaymentStrategy(4,9));
    }
    public function test_GetPaymentStrategy_m10t9_NoSummerMorning(){
        $payModel = new PaymentsModel();
        $this->assertNotEquals(new SummerMorningPaymentStrategy(), $payModel->getPaymentStrategy(10,9));
    }
    public function test_GetPaymentStrategy_m9t9_SummerMorning(){
        $payModel = new PaymentsModel();
        $this->assertEquals(new SummerMorningPaymentStrategy(), $payModel->getPaymentStrategy(9,9));
    }


    public function test_GetPaymentStrategy_m7t19_SummerAfternoon(){
        $payModel = new PaymentsModel();
        $this->assertEquals(new SummerAfternoonPaymentStrategy(), $payModel->getPaymentStrategy(7,19));
    }
    public function test_GetPaymentStrategy_m7t15_SummerAfternoon(){
        $payModel = new PaymentsModel();
        $this->assertEquals(new SummerAfternoonPaymentStrategy(), $payModel->getPaymentStrategy(7,15));
    }
    public function test_GetPaymentStrategy_m7t14_NoSummerAfternoon(){
        $payModel = new PaymentsModel();
        $this->assertNotEquals(new SummerAfternoonPaymentStrategy(), $payModel->getPaymentStrategy(7,14));
    }
    public function test_GetPaymentStrategy_m5t19_SummerAfternoon(){
        $payModel = new PaymentsModel();
        $this->assertEquals(new SummerAfternoonPaymentStrategy(), $payModel->getPaymentStrategy(5,19));
    }
    public function test_GetPaymentStrategy_m4t19_NoSummerAfternoon(){
        $payModel = new PaymentsModel();
        $this->assertNotEquals(new SummerAfternoonPaymentStrategy(), $payModel->getPaymentStrategy(4,19));
    }
    public function test_GetPaymentStrategy_m10t19_NoSummerAfternoon(){
        $payModel = new PaymentsModel();
        $this->assertNotEquals(new SummerAfternoonPaymentStrategy(), $payModel->getPaymentStrategy(10,19));
    }
    public function test_GetPaymentStrategy_m9t19_SummerAfternoon(){
        $payModel = new PaymentsModel();
        $this->assertEquals(new SummerAfternoonPaymentStrategy(), $payModel->getPaymentStrategy(9,19));
    }
}
