<?php   
   class Product 
   {
        public $img;
        public $descr;
        public $id;
        
        function __construct($img,$descr,$id) {
           
            $this->id = $id;
            $this->img = $img;
            $this->descr = $descr;

        }

        function view() {
            echo "<h1>$this->img</h1><p>$this->descr</p>";

        }

    }
    
?>