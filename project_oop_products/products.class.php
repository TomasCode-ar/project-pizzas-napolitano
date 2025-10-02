<?php
class Product {
    
private int $id;
private string $description;
private float $price;
private string $image;
private int $stock;

public function __construct(int $id,string $description,float $price, string $image,int $stock){
$this->id=$id;
$this->description=$description;
$this->price=$price;
$this->image=$image;
$this->stock=$stock;
}

public function getDescription():string{ 
return $this->description;
}

public function getPrice():float{ 
return $this->price;
}

public function getStock():int{ 
return $this->stock;
}

public function setStock(int $stock): void
{
        if ($stock < 0) {
            throw new InvalidArgumentException("El stock no puede ser negativo");
        }
        $this->stock = $stock;
}

}