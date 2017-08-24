<?php
    echo '<pre>' . htmlspecialchars(file_get_contents(__FILE__)) . '</pre>';

    function passAround(iterable $values) : iterable {
        foreach ($values as $value){
            echo $value, '<br>';
        }

        return $values;
    }


    $arr = [
        1, 2, 3, 4, 5
    ];

    passAround($arr);

    $iterableObj = new class implements Iterator {
        protected $counter = 0;

        protected $arr = [6, 7, 8, 9, 10];

        public function current()
        {
            return $this->arr[$this->counter];
        }

        public function next()
        {
            $this->counter++;
        }

        public function key()
        {
            return $this->counter;
        }

        public function valid()
        {
            return (count($this->arr) > $this->counter) ? true : false;
        }

        public function rewind()
        {
            $this->counter = 0;
        }
    };

    passAround($iterableObj);