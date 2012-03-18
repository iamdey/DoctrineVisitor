<?php

namespace Entity;

/**
 * Le livre est l'élément visité. 
 * De cette manière on peut lui apliquer des traitements sans affecter sa structure tout en gardant la séparation Modèle/Controlleur
 *
 * @author esion
 */
class Book implements \Reader\Element
{
    
    protected $author, $content;
    
    public function getAuthor()
    {
        return $this->author;
    }
    
    public function setAuthor($author)
    {
        $this->author = $author;
    }
    
    public function getContent()
    {
        return $this->content;
    }
    
    public function setContent($content)
    {
        $this->content = $content;
    }
    
    /**
     * The part of Visitor Pattern
     * 
     * @param Reader\Visitor $visitor 
     */
    public function accept(\Reader\Visitor $visitor)
    {
        $visitor->visit($this);
    }
}

?>
