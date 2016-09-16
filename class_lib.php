<?php
class gameAccount{
    public $name;
    public $email;
    protected $account_number;
    protected $password;

    function __construct($person_name, $account_password, $number_account, $account_email){
        $this->name=$person_name;
        $this->password=$account_password;
        $this->account_number=$number_account;
        $this->email=$account_email;
    }
    function set_name($new_name){
        $this->name = $new_name;
    }
    protected function set_password($new_password){
        $this->password = $new_password;
    }
    protected function set_account_number($new_number){
        $this->account_number=$new_number;
    }
    function set_email($new_email){
        $this->email=$new_email;
    }
    function get_name(){
    return $this->name;
}
    protected function get_password(){
        return $this->password;
    }
    protected function get_account_number(){
        return $this->account_number;
    }
    function get_email(){
        return $this->email;
    }


}
class xboxAccount extends gameAccount{
    public $name;
    public $username;
    function __construct($person_name, $username, $account_password, $number_account, $account_email)
    {
        parent::__construct($person_name, $account_password, $number_account, $account_email);
        $this->name=$person_name;
        $this->username = $username;
        $this->password=$account_password;
        $this->account_number=$number_account;
        $this->email=$account_email;
    }
    function set_username($new_username){
        $this->username=$new_username;
    }
    function get_username(){
        return $this->username;
    }
}