<?

  const TICKET_PRICE = 100.50;
  const DISCOUNT_L = 300.00;
  const DISCOUNT_P = 20;

  $quantity = 2;
  $total = $quantity * TICKET_PRICE;

  if ($total > DISCOUNT_L) {
    $total = $total * (100 - DISCOUNT_P) / 100;
  }

  print($total);

?>