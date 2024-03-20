<!-- this scripts allows client to rate a hotel -->
<style>body {background: #333; color: white}</style>
<?php

$agg_rate_value = 4.5;
$agg_rate_count = 10;

    if (isset($_GET['rate'])) {
        if(is_numeric($_GET['rate'])) {
            if(preg_match('/[0-5]\.\d/', $_GET['rate'])) {

            $rate = (float) $_GET['rate'];
            
            $total_rate = $agg_rate_count * $agg_rate_value;
            $total_rate += $rate;
            
            $current_rate = $total_rate / ($agg_rate_count + 1);
            //H2 print formatted x.x
            print("you\'ve rated this app with {$current_rate}");
            } else {
                print("Only numbers between 0.0 and 5.0 are allowed");
            }
        } else {
            print("Only numbers between 0.0 and 5.0 are allowed");
        }
    } else {
        //H2 print formatted x.x
        print("This app was rated at $agg_rate_value by $agg_rate_count users");
    }
    
?>

<form action="/examples/validation.php" method="GET">

    <input 
        required 
        type="text" 
        name="rate"
        />
    <button>rate</button>

</form>