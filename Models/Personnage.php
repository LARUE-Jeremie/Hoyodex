<?php

namespace Models;

/**
 * Character
 */
class Personnage {

    // Attributes
    private ?string $id;
    private string $name;
    private string $element;
    private string $weapon;
    private int $rarity;
    private ?string $origin;
    private string $urlImg;

    private ?string $element_name;
    private ?string $weapon_name;
    private ?string $origin_name;

    /**
     * Character's constructor
     */
    public function __construct() {
    }

    // Getters
    public function getId(): ?string { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getElement(): string { return $this->element; }
    public function getElementName(): ?string { return $this->element_name; }
    public function getWeapon(): string { return $this->weapon; }
    public function getWeaponName(): ?string { return $this->weapon_name; }
    public function getRarity(): int { return $this->rarity; }
    public function getOrigin(): ?string { return $this->origin; }
    public function getOriginName(): ?string { return $this->origin_name; }
    public function getUrlImg(): string { return $this->urlImg; }

    // Setters
    public function setId(?string $id): void { $this->id = $id; }
    public function setName(string $name): void { $this->name = $name; }
    public function setElement(string $element): void { $this->element = $element; }
    public function setElementName(?string $element_name): void { $this->element_name = $element_name; }
    public function setWeapon(string $weapon): void { $this->weapon = $weapon; }
    public function setWeaponName(?string $weapon_name): void { $this->weapon_name = $weapon_name; }
    public function setRarity(int $rarity): void { $this->rarity = $rarity; }
    public function setOrigin(?string $origin): void { $this->origin = $origin; }
    public function setOriginName(?string $origin_name): void { $this->origin_name = $origin_name; }
    public function setUrlImg(string $urlImg): void { $this->urlImg = $urlImg; }
}

?>
