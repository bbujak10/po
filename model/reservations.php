<?php
/**
 * Created by PhpStorm.
 * User: VXBa9
 * Date: 19.12.2018
 * Time: 13:51
 */
require_once 'model.php';

class ReservationsModel extends Model{
    public function getByToday(){
        $day = date('d');
        $month = date('m');
        $year = date('Y');
        return $this->select('nr_kortu, DATE_FORMAT(`czas_od`,\'%H:%i\') AS godz_od, DATE_FORMAT(`czas_do`,\'%H:%i\') AS godz_do', 'rezerwacje', 'EXTRACT(DAY FROM `czas_od`) = '.$day.' AND EXTRACT(MONTH FROM `czas_od`) = '.$month.' AND EXTRACT(YEAR FROM `czas_od`) = '.$year.'');
    }
    public function getByDate($date){
        $year = $date[0].$date[1].$date[2].$date[3];
        $month = $date[5].$date[6];
        $day = $date[8].$date[9];
        return $this->select('nr_kortu, DATE_FORMAT(`czas_od`,\'%H:%i\') AS godz_od, DATE_FORMAT(`czas_do`,\'%H:%i\') AS godz_do', 'rezerwacje', 'EXTRACT(DAY FROM `czas_od`) = '.$day.' AND EXTRACT(MONTH FROM `czas_od`) = '.$month.' AND EXTRACT(YEAR FROM `czas_od`) = '.$year.'');
    }
    public function addNew($court, $date, $timeFrom, $timeTo, $coachSelect = 'NULL'){
        $this->insert('rezerwacje', "nr_kortu, czas_od, czas_do, uzytkownik_ID, trener_ID", $court.", '".$date." ".$timeFrom."', '".$date." ".$timeTo."', 1, ".$coachSelect);
    }
    public function detectConflict($court, $date, $timeFrom, $timeTo){
        $year = $date[0].$date[1].$date[2].$date[3];
        $month = $date[5].$date[6];
        $day = $date[8].$date[9];
        $select = $this->select('nr_kortu, DATE_FORMAT(`czas_od`,\'%H\') AS godz_od, DATE_FORMAT(`czas_do`,\'%H\') AS godz_do, DATE_FORMAT(`czas_od`,\'%i\') AS min_od, DATE_FORMAT(`czas_do`,\'%i\') AS min_do', 'rezerwacje', 'EXTRACT(DAY FROM `czas_od`) = '.$day.' AND EXTRACT(MONTH FROM `czas_od`) = '.$month.' AND EXTRACT(YEAR FROM `czas_od`) = '.$year.'');
        foreach($select as $row){
            if($row['nr_kortu'] == $court){
                $fromForm = floatval($timeFrom[0].$timeFrom[1]);
                if($timeFrom[3] == '3') $fromForm += 0.5;
                $fromDB = floatval($row['godz_od']);
                if($row['min_od'] == '30') $fromDB += 0.5;
                $toForm = floatval($timeTo[0].$timeTo[1]);
                if($timeTo[3] == '3') $toForm += 0.5;
                $toDB = floatval($row['godz_do']);
                if($row['min_do'] == '30') $toDB += 0.5;

                if($fromForm >= $fromDB AND $fromForm <= $toDB) return -1;
                else if($toForm >= $fromDB AND $toForm <= $toDB) return -1;
                else return 0;
            }
        }
    }
    public function detectCoachConflict($date, $timeFrom, $timeTo, $coachSelect){
        $year = $date[0].$date[1].$date[2].$date[3];
        $month = $date[5].$date[6];
        $day = $date[8].$date[9];
        $select = $this->select('nr_kortu, trener_ID, DATE_FORMAT(`czas_od`,\'%H\') AS godz_od, DATE_FORMAT(`czas_do`,\'%H\') AS godz_do, DATE_FORMAT(`czas_od`,\'%i\') AS min_od, DATE_FORMAT(`czas_do`,\'%i\') AS min_do', 'rezerwacje', 'EXTRACT(DAY FROM `czas_od`) = '.$day.' AND EXTRACT(MONTH FROM `czas_od`) = '.$month.' AND EXTRACT(YEAR FROM `czas_od`) = '.$year.'');
        foreach($select as $row){
            if($row['trener_ID'] == $coachSelect){
                $fromForm = floatval($timeFrom[0].$timeFrom[1]);
                if($timeFrom[3] == '3') $fromForm += 0.5;
                $fromDB = floatval($row['godz_od']);
                if($row['min_od'] == '30') $fromDB += 0.5;
                $toForm = floatval($timeTo[0].$timeTo[1]);
                if($timeTo[3] == '3') $toForm += 0.5;
                $toDB = floatval($row['godz_do']);
                if($row['min_do'] == '30') $toDB += 0.5;

                if($fromForm >= $fromDB AND $fromForm <= $toDB) return -1;
                else if($toForm >= $fromDB AND $toForm <= $toDB) return -1;
                else return 0;
            }
        }
    }
}