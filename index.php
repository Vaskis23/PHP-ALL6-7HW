<? 

const TICKET_PRICE = 100;

if (array_key_exists('quantity', $_GET)) {
    $quantity = $_GET['quantity'];
    //HW make sure the value is integer
    $cost = TICKET_PRICE * $quantity;

    $total = $cost;
} else {
    $error = "You didn't specify any quantity";
}

?>
<a href="/?quantity=1">Buy 1 ticket</a><br>
<a href="/?quantity=2">Buy 1 ticket</a><br>
<a href="/?quantity=3">Buy 1 ticket</a><br>
<hr>
<form method="GET" action="/">
    <input type="text" name="quantity" placeholder="enter desires vlue.."/>
    <button>Buy</button>
</form>
<hr>

<? if (isset($total)): ?>
    <div>
        <?= $quantity ?> tickets x <?= TICKET_PRICE ?> = <?= $total ?>
    </div>
<? endif ?>
<? if (isset($error)): ?>
    <div style="color: red;">
        <?= $error ?>
    </div>
<? endif ?>