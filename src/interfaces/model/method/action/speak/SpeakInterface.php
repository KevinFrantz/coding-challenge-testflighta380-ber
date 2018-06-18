<?php
namespace interfaces\model\method\action\speak;

/**
 *
 * @author kevinfrantz
 *        
 */
interface SpeakInterface
{
    /**
     * Allows a person or group to speak
     * @param string $sentence
     */
    public function speak(string $sentence):void;
}

