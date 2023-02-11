<?php
class Password{
  private $password;
  public function __construct(string $password){
    $this->password = $password;
  }
  public function getPassword(): string{
    return $this->password;
  }
  public function generate(int $length, bool $complexity): string{
    $password = '';
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $charsComplex = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?';
    if($complexity){
      for($i = 0; $i < $length; $i++){
        $password .= $charsComplex[rand(0, strlen($charsComplex) - 1)];
      }
    }else{
      for($i = 0; $i < $length; $i++){
        $password .= $chars[rand(0, strlen($chars) - 1)];
      }
    }
    return $password;
  }
  public function check(string $password): bool{
    return $this->password === $password;
  }
}

class PasswordTest{
  private $password;
  public function __construct(Password $password){
    $this->password = $password;
  }
  public function testGenerate(): void{
    $password = $this->password->generate(10, true);
    if(strlen($password) === 10){
      echo 'testGenerate passed';
    }else{
      echo 'testGenerate failed';
    }
  }
  public function testCheck(): void{
    $password = $this->password->generate(10, true);
    if($this->password->check($password)){
      echo 'testCheck passed';
    }else{
      echo 'testCheck failed';
    }
  }
}



?>