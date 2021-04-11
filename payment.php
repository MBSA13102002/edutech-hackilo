<?php

 $apiKey = "rzp_live_eO5PmyrJ51BVRD";

?>

<script src="https://code.jquery.com/jquery-3.5.0.js"></script>



<form action="" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" 
    data-amount="100" 
    data-currency="INR" 
    data-id="<?php echo 'OID'.rand(10,100).'END';?>"
    data-buttontext="Pay with Razorpay"
    data-name="HACKILO"
    data-description="NEVER STOP YOUR DEVELOPEMENT"
    data-image="https://1.bp.blogspot.com/-AJ33cAJxee8/YHHyzdwcTxI/AAAAAAAAATk/gCEXVu8IvYkawDC1vBGYrrFKMESdOUmYACK4BGAYYCw/s113/LOGO.jpeg"
    data-prefill.name="<?php echo $_POST['name'];?>"
    data-prefill.email="<?php echo $_POST['email'];?>"
    data-prefill.contact="<?php echo $_POST['mobile'];?>"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form>

