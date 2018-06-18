<?php
namespace controller\applaud;

use controller\AbstractController;

use interfaces\controller\applaud\ApplaudControllerInterface;

/**
 * This class offers applaud functions
 * If you implement the following interface you should use it:
 * @see \interfaces\model\method\action\applaud\ApplaudInterface
 * @author kevinfrantz    
 */
class ApplaudController extends AbstractController implements ApplaudControllerInterface
{
    /**
     * Copied from: 
     * @see https://stackoverflow.com/questions/4356289/php-random-string-generator
     * @param number $length
     * @return string
     */
    private function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
    /**
     * {@inheritDoc}
     * @see \interfaces\controller\applaud\ApplaudControllerInterface::getApplaudString()
     */
    public function getApplaudString(): string
    {
        return $this->generateRandomString();
    }

}

