<?php

namespace usebracecheck;
use bracecheck\Braceinterface;

class Usebracecheck{

    private $path;
    private $str; 
    private $brace; 

    public function __construct(Braceinterface $newBrace){
        $this->brace = $newBrace;
        echo "Введите путь до файла со строкой \n";
        $this->path = trim(fgets(STDIN));
    }

    public function run(){         
        if (!file_exists($this->path)){
            echo "File no found";
        }
        else { 
            $handle = fopen($this->path, "r");
            $this->str = fread($handle, filesize($this->path));
            fclose($handle);       
            $this->brace->check($this->str); 
        }   
    } 
}

 