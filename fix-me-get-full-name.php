INSTRUCTIONS
The code provided is supposed return a person's Full Name given their first and last names.

But it's not working properly.

Notes
The first and/or last names are never null, but may be empty.

SOLUTION
<php 
class Dinglemouse {
  public function __construct($firstName, $lastName) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }
  
  public function getFullName() {
    return trim("{$this->firstName} {$this->lastName}");
  }
}

class Dinglemouse {
    private $firstname, $lastname;
    public function __construct($firstName, $lastName) {
        $this->firstname = $firstName;
        $this->lastname = $lastName;
    }
    
    public function getFullName() {
        return trim("{$this->firstname} {$this->lastname}");
    }
}