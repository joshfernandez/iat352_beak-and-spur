<!--
  IAT 352 with Prof. Helmine Serban
  D101 with Fatemeh Salehian-Kia
  Beak & Spur
  Bread-wy Woo

  query-string-methods.php
-->

<?php

function wrapInSingleQuotes($item, $is_wrapped) {
  if ($is_wrapped) {
    return "'" . $item . "'";
  }
  else {
    return $item;
  }
}

function appendWithComma($item, &$list_items, $is_wrapped) {
  if(empty($list_items)) {
    $list_items .= wrapInSingleQuotes($item, $is_wrapped);
  }
  else {
    $list_items .= ", " . wrapInSingleQuotes($item, $is_wrapped);
  }
}

function appendWithAndTerm($clause, &$list_clauses, $is_wrapped) {
  if(empty($list_clauses)) {
    $list_clauses .= wrapInSingleQuotes($clause, $is_wrapped);
  }
  else {
    $list_clauses .= " AND " . wrapInSingleQuotes($clause, $is_wrapped);
  }
}

?>
