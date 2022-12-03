<?php

// class car{
//     public $name;

//         /* how to set clas car usin contructoi */
//     // function __construct($n){
//     //     $this->name=$n;
//     // }

//     /* how to set clas car usin Set */
//     public function setName($n){
//         $this->name=$n;
//     }
// }
//     /* we are getting the instace of The CAr here ans seering it  */
//     $camry = new Car('camry');
//     $camry->setName('camry');
//      echo $camry-> name . '</br>';
     
//     /* ingeritance  a the car */
//     // class Camry extends Car{
//     //     function __construct(){
//     //         echo $this->getName();
//     //     }
//     // }
    

// ?>


<?php

    class User{
       protected $email ;
       public $username;
       public $role = 'member';

       function __construct($username, $email){
            $this->username = $username;
            $this->email = $email;
       }

       public function AddFrd(){
        return "$this->username add a new frds";
       }

       /* getter we are making fuction where by the email can be access outside */
       public function getEmail(){
        return $this->email;
       }

       /* Seter we are making fuction where by the email can be change outside */
       public function setEmail($email){
        if (strpos($email, '@') > 1) {
            return $this->email = $email;
        }
       }

       /* method for Message */
       public function message(){
           return "$this->email sent a message";
       }
    }

    class Admin extends User{
        public $level;
        public $role = 'admin';
        public function __construct($email, $username,$level){
            $this->level = $level;
            parent::__construct($email, $username);
        }

         /* method for Message */
       public function message(){
        return "$this->email an admin sent a message";
    }

    }

    $userOne = new User('selim', 'selim@gmail.com');
    $userTwo = new User('samad', 'samad@gmail.com');
    $userThree = new Admin('semiat', 'semiat@gmail.com', 3);
   
    echo $userThree->message();
    
    // echo $userOne->getEmail() . '</br>';
    // echo $userTwo->setEmail('test123@gmail.com') . '</br>';
    echo $userThree->username . '</br>' ;
    echo $userThree->getEmail() . '</br>' ;
    echo $userThree->level . '</br>' ;

    // echo $userOne->email . '</br>';
    // echo $userOne->AddFrd() . '</br>';

    // $userTwo->name = 'samad';
    // $userTwo->email = 'samad$gmail.com';

    // echo $userTwo->email . '</br>';
    // echo $userTwo->email . '</br>';
    // echo $userTwo->AddFrd() . '</br>';

?>



