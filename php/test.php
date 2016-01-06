Content above
<?php
$name = 'Rachel';
$fullName = $name . ' Kipps';

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
    echo "Hey this is the foo function.\n";
}

echo "Hello {$name}s\n";
foo(NULL);
?>
And content below
