# charak
## WooCommerce headless setup

The Astro storefront uses the WooCommerce Store API for customer-facing products, cart and checkout. It does not use or expose a WooCommerce REST API secret key.

### WooCommerce backend

Store API base used by this build:
`https://yellowgreen-gnu-156694.hostingersite.com/wp-json/wc/store/v1`

The WooCommerce product is looked up by slug:
`jeev-ankur-hair-care-kit`

### CORS helper

If the browser reports that `Cart-Token` is not available, install the small plugin in `wordpress/charak-headless-cors.php` on the WordPress/WooCommerce site. It only exposes the Store API's Cart-Token and Nonce headers to the browser.

Do not paste or expose the authenticated WooCommerce REST API consumer secret in the Astro frontend.

### Important

Payment options shown in the Astro checkout are the payment methods enabled by WooCommerce. A payment gateway that requires extra payment data (for example, some Razorpay integrations) may need a gateway-specific frontend integration before online payment can be completed.
