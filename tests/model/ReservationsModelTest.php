<?php
/**
 * Created by PhpStorm.
 * User: bartoszbujak
 * Date: 16/01/2019
 * Time: 16:38
 */

use PHPUnit\Framework\TestCase;
include "model/reservations.php";

class ReservationsModelTest extends TestCase
{
    /* ReservationsModel->conflictingTimesTest */

    //invalid time
    public function test_conflictingTimes_InvalidDataNewTimeTooShort_ExceptionThrown(){
        $resMod = new ReservationsModel();
        $this->expectException(OutOfRangeException::class);
        $resMod->conflictingTimes(10,10.5,12,13);
    }

    // 1
    public function test_conflictingTimes_NoConflictNewTimeBeforeDB_False(){
        $resMod = new ReservationsModel();
        $this->assertEquals(false, $resMod->conflictingTimes(10,11,12,13));
    }

    //2
    public function test_conflictingTimes_NoConflictNewTimeAfterDB_False(){
        $resMod = new ReservationsModel();
        $this->assertEquals(false, $resMod->conflictingTimes(10,11,8,9));
    }

    //3
    public function test_conflictingTimes_NoConflictNewTimeBeforeEqualDB_False(){
        $resMod = new ReservationsModel();
        $this->assertEquals(false, $resMod->conflictingTimes(10,11,11,12));
    }

    //4
    public function test_conflictingTimes_NoConflictNewTimeAfterEqualDB_False(){
        $resMod = new ReservationsModel();
        $this->assertEquals(false, $resMod->conflictingTimes(10,11,9,10));
    }

    //5
    public function test_conflictingTimes_ConflictNewTimeOverlappingDB_True(){
        $resMod = new ReservationsModel();
        $this->assertEquals(true, $resMod->conflictingTimes(10,11,9,12));
    }

    //6
    public function test_conflictingTimes_ConflictNewTimeStartOverlappingDB_True(){
        $resMod = new ReservationsModel();
        $this->assertEquals(true, $resMod->conflictingTimes(10,12,9,11));
    }

    //7
    public function test_conflictingTimes_ConflictNewTimeEndOverlappingDB_True(){
        $resMod = new ReservationsModel();
        $this->assertEquals(true, $resMod->conflictingTimes(9,11,10,12));
    }

    //8
    public function test_conflictingTimes_ConflictNewTimeEqualsDB_True(){
        $resMod = new ReservationsModel();
        $this->assertEquals(true, $resMod->conflictingTimes(9,11,9,11));
    }

    //9
    public function test_conflictingTimes_ConflictNewTimeLongerDB_True(){
        $resMod = new ReservationsModel();
        $this->assertEquals(true, $resMod->conflictingTimes(9,12,10,11));
    }
}
