<?php
$unit_cost = 20;

//if value to left of ? is true, assigned to var, else assigned value after :
$wholesale_price = $unit_cost ?: 25;

echo $wholesale_price;
