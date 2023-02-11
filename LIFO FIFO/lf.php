<?php
interface Pushable{
    public function push(mixed $value);
    public function pop(): mixed;
  }
  
class LIFO implements Pushable{
  private $stack = [];
  public function push(mixed $value){
    $this->stack[] = $value;
  }
  public function pop(): mixed{
    return array_pop($this->stack);
  }
}
class FIFO implements Pushable{
  private $queue = [];
  public function push(mixed $value){
    $this->queue[] = $value;
  }
  public function pop(): mixed{
    return array_shift($this->queue);
  }
}
?>
