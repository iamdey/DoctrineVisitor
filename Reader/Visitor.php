<?php

namespace Reader;

/**
 * The Visitor of Visitor pattern
 *
 * @author esion
 */
interface Visitor {
    public function visit(Element $element);
}

?>
