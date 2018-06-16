<?php
namespace interfaces\model\data\material\building\airport\attribute;

/**
 *
 * @author kevinfrantz
 *        
 */
interface NameInterface
{
    /**
     * @see https://en.wikipedia.org/wiki/International_Air_Transport_Association
     * @param string $iata
     */
    public function setIATA(string $iata):void;
    
    /**
     * @see https://en.wikipedia.org/wiki/International_Civil_Aviation_Organization
     * @param string $icao
     */
    public function setICAO(string $icao):void;
    
    /**
     * Sets the name of the airport
     * @param string $name
     */
    public function setName(string $name): void;
    
    /**
     * @return string
     */
    public function getIATA():string;
    
    /**
     * @return string
     */
    public function getICAO():string;
    
    /**
     * @return string
     */
    public function getName(): string;
    
    /**
     * @return string
     */
    public function getFullname(): string;
}

