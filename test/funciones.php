<?php
class Product
{
    private string $name;
    private string $description;
    private float $price;

    public function __construct(string $init_name, string $init_description,  float $init_price)
    {
        $this->name = $init_name;
        $this->description = $init_description;
        $this->price = $init_price;
    }

    function display()
    {
        $name = $this->name;
        $description = $this->description;
        $price  = $this->price;
        $international_price = $this->_international_price($price);

        echo "<div class=\"product\">";
        $this->_display_name();
        $this->_display_description();
        echo "<p class=\"price\">Precio: $$price pesos / $$international_price dollars</p>";
        $this->_display_buy_container();
        echo "</div>";
    }

    function display_with_discount(float $discount)
    {
        $name = $this->name;
        $description = $this->description;

        $price  = $this->price;
        $final_price = $this->price * (1 - $discount / 100);
        $international_price = $this->_international_price($final_price);

        echo "<div class=\"product promotion\">";
        $this->_display_name();
        $this->_display_description();

        echo "<p class=\"price_before_discount\">Antes: $price<p>";
        echo "<p class=\"price\">Ahora: $$final_price pesos / $$international_price dollars</p>";

        echo "<p class=\"discount_label\">$discount% de descuento</p>";

        $this->_display_buy_container();

        echo "</div>";

        $this->price = $final_price;
    }

    private function _display_name()
    {
        echo "<h2>$this->name</h2>";
    }

    private function _display_description()
    {
        echo "<p>$this->description</p>";
    }

    private function _display_buy_container()
    {
        echo "<div class=\"buy_container\">";

        echo "COMPRAR";
        echo "<input type=\"checkbox\" name=\"bought_products[]\" value=$this->price></input>";

        echo "</div>";
    }

    private function _international_price(float $final_price): float
    {
        $dollar_price = 1450;
        return round($final_price / $dollar_price, 2);
    }
}
