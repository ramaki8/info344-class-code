<<<<<<< HEAD
Content above
<?php
$name = 'Rachel';
$fullName = $name . ' Kipps';
=======
Hey this is some content above the code
<?php
$name = 'Dave';
$fullName = $name . 'Stearns';
>>>>>>> 2cf08cf17a3f5dd45e47699cc347b2ecbb7c7ea1

class Person {
    protected $name;
    
    public function __construct($n) {
        $this->name = $n;
    }
    
    public function getName() {
        return $this->name;
    }
}

function foo($bar) {
<<<<<<< HEAD
    echo "Hey this is the foo function.\n";
=======
    echo "Hey this is the foo fighting function\n";
>>>>>>> 2cf08cf17a3f5dd45e47699cc347b2ecbb7c7ea1
}

echo "Hello {$name}s\n";
foo(NULL);
?>
<<<<<<< HEAD
And content below
=======
And this is some content below
>>>>>>> 2cf08cf17a3f5dd45e47699cc347b2ecbb7c7ea1
