<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  create-select-query.php

  Main reference is from HTML & CSS: Design and Build Websites by Jon Duckett.
  Other references will be noted at appropriate sections of this file.
-->

<?php

/*
  Sources:
    https://www.w3schools.com/php/func_array_in_array.asp
    https://www.w3schools.com/php/php_functions.asp
*/

// 3 - Perform SELECT query.

function appendWithComma($item, &$list_items) {
  if(empty($list_items)) {
    $list_items .= $item;
  }
  else {
    $list_items .= ", " . $item;
  }
}

function appendWithAndTerm($clause, &$list_clauses) {
  if(empty($list_clauses)) {
    $list_clauses .= $clause;
  }
  else {
    $list_clauses .= " AND " . $clause;
  }
}


// 3A - Define the attributes.

$list_of_attributes = "";
if(in_array("order-number", $order_attributes)) {
  appendWithComma("orders.orderNumber", $list_of_attributes);
}
if(in_array("order-date", $order_attributes)) {
  appendWithComma("orders.orderDate", $list_of_attributes);
}
if(in_array("shipped-date", $order_attributes)) {
  appendWithComma("orders.shippedDate", $list_of_attributes);
}
if(in_array("product-name", $order_attributes)) {
  appendWithComma("products.productName", $list_of_attributes);
}
if(in_array("product-description", $order_attributes)) {
  appendWithComma("products.productDescription", $list_of_attributes);
}
if(in_array("quantity-ordered", $order_attributes)) {
  appendWithComma("orderdetails.quantityOrdered", $list_of_attributes);
}
if(in_array("price-each", $order_attributes)) {
  appendWithComma("orderdetails.priceEach", $list_of_attributes);
}

// 3B - Define the tables needed.

$list_of_tables = "";
if(in_array("order-number", $order_attributes) ||
   in_array("order-date", $order_attributes) ||
   in_array("shipped-date", $order_attributes)) {
  appendWithComma("orders", $list_of_tables);
}

$order_details_table_included = false;
if(in_array("quantity-ordered", $order_attributes) ||
   in_array("price-each", $order_attributes)) {
  appendWithComma("orderdetails", $list_of_tables);
  $order_details_table_included = true;
}

if(in_array("product-name", $order_attributes) ||
   in_array("product-description", $order_attributes)) {
  appendWithComma("products", $list_of_tables);
  if(!$order_details_table_included) { // Include it anyways.
    appendWithComma("orderdetails", $list_of_tables);
  }
}

// 3C - Define the necessary conditions.

$list_of_conditions = "";

// Either the query is for an order number or a range of order dates.
if(!empty($order_number)) {
  $order_number_clause = "orders.orderNumber = " . $order_number;
  appendWithAndTerm($order_number_clause, $list_of_conditions);
}
else if(!empty($order_date_start) && !empty($order_date_end)) {
  $order_date_clause = "orders.orderDate BETWEEN '" . $order_date_start . "' AND '" . $order_date_end . "'";
  appendWithAndTerm($order_date_clause, $list_of_conditions);
}

// Match keys between two tables.
$order_details_check = "";
if(in_array("quantity-ordered", $order_attributes) ||
   in_array("price-each", $order_attributes)) {
  $order_details_check = "orders.orderNumber = orderdetails.orderNumber";
  appendWithAndTerm($order_details_check, $list_of_conditions);
}

if(in_array("product-name", $order_attributes) ||
   in_array("product-description", $order_attributes)) {
  $products_check = "orderdetails.productCode = products.productCode";
  appendWithAndTerm($products_check, $list_of_conditions);

  if(empty($order_details_check)) {
    $order_details_check = "orders.orderNumber = orderdetails.orderNumber";
    appendWithAndTerm($order_details_check, $list_of_conditions);
  }
}

// Continue to step 3D in processform.php

?>
