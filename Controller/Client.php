<?php
namespace Controller;

/**
 * Description of Client
 *
 * @author esion
 */
class Client {
    
    public function action()
    {
        //get the Book from Doctrine
        // ... 
        $book =  new \Entity\Book();
        $book->setContent("#Hello world\n ## this line should not be read at the first time");
        //
        
        $visitor = new \Reader\BookVisitor();
        $visitor->visit($book);
        
        //Here we go
        echo $visitor->read();
    }
}

?>
