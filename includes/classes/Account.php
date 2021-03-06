<?php
    class Account{

        private $errorArray;

        public function __construct(){
            $this->errorArray = array();
        }

        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2){
            $this->validateUsername($un);
            $this->validateFirstName($fn);
            $this->validateLastName($ln);
            $this->validateEmails($em, $em2);
            $this->validatePasswords($pw, $pw2);

            if(empty($this->errorArray)){
                // inserer les elements dans la base de donnée
                return false;
            }
            else{
                return false;
            }
        }

        public function getError($error){
            if(!in_array($error, $this->errorArray)){
                $error ="";
            }

            return "<span class='errorMessage'>$error</span>";
        }

        private function validateUsername($un){

            if(strlen($un) > 25 || strlen($un) < 5){
                array_push($this->errorArray, Constants::$usernameCharacters);
                return;
            }

            //

        }
        
        private function validateFirstName($fn){
            if(strlen($fn) > 25 || strlen($fn) < 2){
                array_push($this->errorArray, Constants::$firstNameCharacters);
                return;
            }
            
        }
        
        private function validateLastName($ln){
            if(strlen($ln) > 25 || strlen($ln) < 2){
                array_push($this->errorArray, Constants::$lastNameCharacters);
                return;
            }
            
        }
        
        private function validateEmails($em, $em2){
            
            if($em != $em2){
                array_push($this->errorArray, Constants::$emailsDoNotMatch);
                return;

            } 
            if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
                array_push($this->errorArray, Constants::$emailInvalid);
                return;
            }

            //Verifie si l'email n'est pas déjà utilisé

        }
        
        private function validatePasswords($pw, $pw2){
            if($pw != $pw2){
                array_push($this->errorArray, Constants::$passwordsDoNotMatch);
                return;
            }

            if(preg_match('/[^A-Za-z0-9]/',$pw)){
                array_push($this->errorArray, Constants::$passwordDoNotAlphanumeric);
                return;
            }

            if(strlen($pw) > 30 || strlen($pw) < 5){
                array_push($this->errorArray, Constants::$passwordCharacters);
                return;
            }
        }
    }

?>