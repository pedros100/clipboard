<?php

/**
 * Tekst
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    clipboard
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Tekst extends BaseTekst
{
    public function __toString() {
        return sprintf($this->contents());
    }

}