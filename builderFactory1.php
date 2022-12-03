<?php

// class Application{
//     public function makeHouse()
// }

abstract class House
{
    public $door;
    public $windows;
    public $wall;
    public $roof;
    public $foundation;

}

interface HouseBuilder
{
    public function buildDoors(): void;
    public function buildWindows(): void;
    public function buildWalls(): void;
    public function buildRoof(): void;
    public function buildFlooring(): void;
    public function buildFoundation(): void;
    public function getResult(): void;
}

class HouseWithGardenBuilder implements HouseBuilder
{
    private $houseGarden;

    public function buildDoors(): void
    {
        $this->houseGarden->buildDoors = "PartA1";
    }

    public function buildWindows(): void
    {
        $this->houseGarden->buildWindows = "PartB1";
    }

    public function buildWalls(): void
    {
        $this->houseGarden->buildWalls = "PartC1";
    }

    public function buildRoof(): void
    {
        $this->houseGarden->buildRoof = "PartC1";
    }

    public function buildFlooring(): void
    {
        $this->houseGarden->buildFlooring = "PartC1";
    }

    public function buildFoundation(): void
    {
        $this->houseGarden->buildFoundation = "PartC1";
    }

    public function buildGarden(): void
    {
        $this->houseGarden->buildGarden = "PartC1";
    }

    public function gethouseGarden(): houseGarden
    {
        $result = $this->houseGarden;

        return $result;
    }
}

class HouseWithGarageBuilder implements HouseBuilder
{
    private $houseGarage;

    public function buildDoors(): void
    {
        $this->houseGarage->buildDoors = "PartA1";
    }

    public function buildWindows(): void
    {
        $this->houseGarage->buildWindows = "PartB1";
    }

    public function buildWalls(): void
    {
        $this->houseGarage->buildWalls = "PartC1";
    }

    public function buildRoof(): void
    {
        $this->houseGarage->buildRoof = "PartC1";
    }

    public function buildFlooring(): void
    {
        $this->houseGarage->buildFlooring = "PartC1";
    }

    public function buildFoundation(): void
    {
        $this->houseGarage->buildFoundation = "PartC1";
    }

    public function buildGarage(): void
    {
        $this->houseGarage->buildGarage = "PartC1";
    }

    public function getResult(): houseGarage
    {
        $result = $this->houseGarage;

        return $result;
    }
}

class HouseWithSwimmingPoolBuilder implements HouseBuilder
{
    private $houseSwimmingPool;

    public function buildDoors(): void
    {
        $this->houseSwimmingPool->buildDoors[] = "PartA1";
    }

    public function buildWindows(): void
    {
        $this->houseSwimmingPool->buildWindows[] = "PartB1";
    }

    public function buildWalls(): void
    {
        $this->houseSwimmingPool->buildWalls[] = "PartC1";
    }

    public function buildRoof(): void
    {
        $this->houseSwimmingPool->buildRoof = "PartC1";
    }

    public function buildFlooring(): void
    {
        $this->houseSwimmingPool->buildFlooring = "PartC1";
    }

    public function buildFoundation(): void
    {
        $this->houseSwimmingPool->buildFoundation = "PartC1";
    }

    public function buildSwimmingPool(): void
    {
        $this->houseSwimmingPool->buildSwimmingPool = "PartC1";
    }

    public function getResult(): houseSwimmingPool
    {
        $result = $this->houseSwimmingPool;

        return $result;
    }
}

class HouseWithFancyStatuesBuilder implements HouseBuilder
{
    private $houseFancyStatues;

    public function buildDoors(): void
    {
        $this->houseFancyStatues->buildDoors = "PartA1";
    }

    public function buildWindows(): void
    {
        $this->houseFancyStatues->buildWindows = "PartB1";
    }

    public function buildWalls(): void
    {
        $this->houseFancyStatues->buildWalls = "PartC1";
    }

    public function buildRoof(): void
    {
        $this->houseFancyStatues->buildRoof = "PartC1";
    }

    public function buildFlooring(): void
    {
        $this->houseFancyStatues->buildFlooring = "PartC1";
    }

    public function buildFoundation(): void
    {
        $this->houseFancyStatues->buildFoundation = "PartC1";
    }

    public function buildFancyStatues(): void
    {
        $this->houseFancyStatues->build = "PartC1";
    }

    public function getResult(): houseFancyStatues
    {
        $result = $this->houseFancyStatues;

        return $result;
    }
}


class HouseWithGarden
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

class HouseWithGarage
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

class HouseWithSwimmingPool
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

class HouseWithFancyStatues
{
    public $parts = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

class Director
{
    /**
     * @var HouseBuilder
     */
    private $builder;
    private $type;

    public function setHouseBuilder(HouseBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function makeHouse($type): void
    {
        $this->type = $type;
    }

    public function makeHouseWithGarden(): void
    {
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildFlooring();
        $this->builder->buildFoundation();
        $this->builder->buildGarden();
        $this->builder->getResult();
        
    }

    public function makeHouseWithGarage(): void
    {
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildFlooring();
        $this->builder->buildFoundation();
        $this->builder->buildGarage();
        $this->builder->getResult();
    }

    public function makeHouseWithSwimmingPool(): void
    {
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildFlooring();
        $this->builder->buildFoundation();
        $this->builder->buildSwimmingPool();
        $this->builder->getResult();
    }

    public function makeHouseWithFancyStatues(): void
    {
        $this->builder->buildDoors();
        $this->builder->buildWindows();
        $this->builder->buildWalls();
        $this->builder->buildRoof();
        $this->builder->buildFlooring();
        $this->builder->buildFoundation();
        $this->builder->buildFancyStatues();
        $this->builder->getResult();
    }
}


function clientCode (Director $director)
{
    $builder = new ConcreteBuilder1();
    $director->setBuilder($builder);

    echo "Standard basic product:\n";
    $director->buildMinimalViableProduct();
    $builder->getProduct()->listParts();

    echo "Standard full featured product:\n";
    $director->buildFullFeaturedProduct();
    $builder->getProduct()->listParts();

    // Remember, the HouseBuilder pattern can be used without a Director class.
    echo "Custom product:\n";
    $builder->producePartA();
    $builder->producePartC();
    $builder->getProduct()->listParts();
}

$director = new Director();
clientCode($director);

?>