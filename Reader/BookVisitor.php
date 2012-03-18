<?php
namespace Reader;

/**
 * Description of BookVisitor
 *
 * @author esion
 */
class BookVisitor implements Visitor {
    
    protected $book, $line = 0;
    
    public function visit(Element $element)
    {
        $this->book = $element;
    }


    /**
     * Example : this method does not impact Book structure 
     * 
     * read book content line by line
     * 
     * @return string
     */
    public function read()
    {
        $content    = $this->book->getContent();
        $a_line     = explode("\n", $content);
        
        if(!count($a_line))
        {
            throw new \RuntimeException('Where is the book?!');
        }
        
        if(isset($a_line[$this->line]))
        {
            $ret = $a_line[$this->line];
            $this->line++;
            return $ret;
        }
        
        return 'The End';
    }
}

?>
