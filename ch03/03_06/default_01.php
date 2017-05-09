<?php
$unit_cost = 0;

// $wholesale_price = $unit_cost ?: 25;

//null-coalesce operator
$wholesale_price = $unit_cost ?? $non_existent ?? 25;

echo $wholesale_price;
