<?php

namespace Reader;

/**
 * The Element of Visitor pattern
 *
 * @author esion
 */
interface Element {
    
    public function accept(Visitor $visitor);
}

?>
