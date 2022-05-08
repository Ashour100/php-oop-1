<?php 


class Movies{
    public $name;
    public $year;
    public $director;
    public $writer;
    public $country;
    public $language;
    public $poster;
    public $cast;


    function __construct($name,$year,$director,$writer,$country,$language,$poster,$cast){
        $this->name=$name;
        $this->year=$year;
        $this->director=$director;
        $this->writer=$writer;
        $this->country=$country;
        $this->language=$language;
        $this->poster=$poster;
        $this->cast=$cast;

    }
    function countCast(){
        return count($this->cast);
    }
}
?>


