<?php
namespace model\data\material\building\airport\attribute;

use interfaces\model\data\material\building\airport\attribute\NameInterface;

/**
 *
 * @author kevinfrantz
 *        
 */
final class Name implements NameInterface
{

    /**
     *
     * @var string
     */
    private $icao;

    /**
     *
     * @var string
     */
    private $name;

    /**
     *
     * @var string
     */
    private $iata;

    /**
     * @param string $name
     * @param string|NULL $iata
     * @param string|NULL $icao
     */
    public function __construct(string $name, string $iata='', string $icao=''){
        $this->name = $name;
        $this->iata = $iata;
        $this->icao = $icao;
    }
    /**
     *
     * {@inheritdoc}
     * @see \interfaces\model\data\material\building\airport\attribute\NameInterface::setICAO()
     */
    public function setICAO(string $icao): void
    {
        $this->icao = $icao;
    }

    /**
     *
     * {@inheritdoc}
     * @see \interfaces\model\data\material\building\airport\attribute\NameInterface::setName()
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     *
     * {@inheritdoc}
     * @see \interfaces\model\data\material\building\airport\attribute\NameInterface::getName()
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     *
     * {@inheritdoc}
     * @see \interfaces\model\data\material\building\airport\attribute\NameInterface::getIATA()
     */
    public function getIATA(): string
    {
        return $this->iata;
    }

    /**
     *
     * {@inheritdoc}
     * @see \interfaces\model\data\material\building\airport\attribute\NameInterface::getFullname()
     */
    public function getFullname(): string
    {
        return $this->name . ' ' . $this->iata . '\\' . $this->icao;
    }

    /**
     *
     * {@inheritdoc}
     * @see \interfaces\model\data\material\building\airport\attribute\NameInterface::setIATA()
     */
    public function setIATA(string $iata): void
    {
        $this->iata = $iata;
    }

    /**
     *
     * {@inheritdoc}
     * @see \interfaces\model\data\material\building\airport\attribute\NameInterface::getICAO()
     */
    public function getICAO(): string
    {
        return $this->icao;
    }
}

