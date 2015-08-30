<?php

require_once('../vendor/autoload.php');
//require_once('../vendor/stripe/stripe-php/lib/Stripe.php');

$stripe = array(
  "secret_key"      => "sk_test_xGLTy8wSDjAT0urwK850iL1h",
  "publishable_key" => "pk_test_XO9PVj9qT1kXB3AsCZUlo0uG"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
