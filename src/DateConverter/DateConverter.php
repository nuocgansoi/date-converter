<?php
namespace NGS\DateConverter;
/**
 * Created by IntelliJ IDEA.
 * User: NuocGanSoi
 * Date: 23-Sep-16
 * Time: 1:20 PM
 */
class DateConverter
{
    private $date;
    private $month;
    private $year;

    function __construct($date, $month, $year)
    {
        $this->date = $date;
        $this->month = $month;
        $this->year = $year;
    }

    public  function toString(){
        return 'Ngày '.$this->date.' tháng '.$this->month.' năm '.$this->year;
    }

}