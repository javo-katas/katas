
<?php

//Array for example
$dates = formatDate( [ "2018/07/20", "14/11/2000", "06-29-2013", "20130720" ] );
foreach($dates as $date) {
    echo $date. "<hr>";
}

//Transform the date in the correct format
function transformDate($format, $date, $format_to_change){

    $date_time = DateTime::createFromFormat( $format, $date);
    $string_date = $date_time->format($format_to_change);

    return $string_date;


}

//Take a array of string dates and trasnform them in other format just to make a standar 
function formatDate(array $dates) : array
{
    $ret_dates=  array();
    foreach($dates as $date){
        
       
     //Selects the type of format using RegExp.

        if(preg_match('/^\d{4}\/\d{2}\/\d{2}$/', $date)){
             $format = 'Y/m/d';
             $ret_dates[]=  transformDate($format, $date ,'Ymd');
             

        }

        if(preg_match('/^\d{2}\/\d{2}\/\d{4}$/', $date)){
             $format='d/m/Y';
             $ret_dates[]=  transformDate($format, $date ,'Ymd');

        }

        if(preg_match('/^\d{2}\-\d{2}\-\d{4}$/', $date)){
            $format='m-d-Y';
            $ret_dates[]= transformDate($format, $date ,'Ymd');

        }
            

    }
    return $ret_dates;
}



?>