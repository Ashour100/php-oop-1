<?php 


class Movies{
    public $name;
    public $year;
    public $director;
    public $writer;
    public $country;
    public $language;
    public $cast;


    function __construct($name,$year,$director,$writer,$country,$language,$cast){
        $this->name=$name;
        $this->year=$year;
        $this->director=$director;
        $this->writer=$writer;
        $this->country=$country;
        $this->language=$language;
        $this->cast=$cast;

    }
    function countCast(){
        return count($this->cast);
    }
}
?>


