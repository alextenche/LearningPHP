<?php require_once('config.php'); ?>

<form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="You are buying cats videos!"
          data-name="My Stripe Demo"
          data-image="https://prismic-io.s3.amazonaws.com/elasticio/24f1bb9fd020eacbabd43d28db3b11c7e63c15df_stripe_logo.png"
          data-amount="2500"
          data-label="Buy some cats videos, now !"
          data-shipping-address="true"
          data-billing-address="true"
          data-locale="auto"></script>
</form>
