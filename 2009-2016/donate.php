<?php include('includes/header.php'); ?>

<h1>Why Donate to Transmission?</h1>

<p>Transmission is free, but costs us money and time to produce, support, and distribute.  This gift to the developers would demonstrate your appreciation of this software and help its future development.</p>

<p>All money goes directly to the Transmission developers.</p>

<div class="paypal" style="margin: auto; text-align: center">
	<img src="/images/paypal-logo-small.gif" alt="PayPal" /> 
	<img src="https://www.paypal.com/en_US/i/icon/icon_visa.gif" alt="Visa" />
	<img src="https://www.paypal.com/en_US/i/icon/icon_mastercard.gif" alt="MasterCard" />
	<img src="https://www.paypal.com/en_US/i/icon/icon_discover.gif" alt="Discover" />
	<img src="https://www.paypal.com/en_US/i/logo/icon_amex.gif" alt="American Express" />
	<img src="https://www.paypal.com/en_US/i/icon/icon_echeck.gif" alt="eCheck" /><br />
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<div>
			<input type="hidden" name="cmd" value="_xclick" />
			<input type="hidden" name="business" value="donations@transmissionbt.com" />
			<input type="hidden" name="item_name" value="Transmission BitTorrent Client" />
			<input type="hidden" name="item_number" value="transmission" />
			<input type="hidden" name="image_url" value="https://www.transmissionbt.com/images/transmission-74x74.png" />
			<input type="hidden" name="no_shipping" value="1" />
			<input type="hidden" name="return" value="http://www.transmissionbt.com" />
			<input type="hidden" name="cancel_return" value="http://www.transmissionbt.com" />
			<input type="hidden" name="cn" value="Feature Requests" />
			<input type="hidden" name="currency_code" value="USD" />
			<input type="hidden" name="tax" value="0" />
			<select name="amount" style="width: 65px;">
				<option value="5.00">$5</option>
				<option value="10.00">$10</option>
				<option value="15.00">$15</option>
				<option value="20.00" selected="selected">$20</option>
				<option value="25.00">$25</option>
				<option value="30.00">$30</option>
				<option value="50.00">$50</option>
				<option value="100.00">$100</option>
				<option value="">Other</option>
			</select>
			<input type="submit" name="submit" value="Donate Once" style="margin-left: 5px; margin-top: 8px; width: 115px;" />
		</div>
	</form>
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<div>
			<input type="hidden" name="cmd" value="_xclick-subscriptions" />
			<input type="hidden" name="business" value="donations@transmissionbt.com" />
			<input type="hidden" name="item_name" value="Transmission BitTorrent Client" />
			<input type="hidden" name="item_number" value="transmission" />
			<input type="hidden" name="image_url" value="https://www.transmissionbt.com/images/transmission-74x74.png" />
			<input type="hidden" name="no_shipping" value="1" />
			<input type="hidden" name="return" value="http://www.transmissionbt.com" />
			<input type="hidden" name="cancel_return" value="http://www.transmissionbt.com" />
			<input type="hidden" name="no_note" value="1" />
			<input type="hidden" name="currency_code" value="USD" />
			<select name="a3" style="width: 65px;">
				<option value="3.00">$3</option>
				<option value="5.00" selected="selected">$5</option>
				<option value="10.00">$10</option>
				<option value="15.00">$15</option>
				<option value="20.00">$20</option>
				<option value="25.00">$25</option>
			</select>
			<input type="hidden" name="p3" value="1" />
			<input type="hidden" name="t3" value="M" />
			<input type="hidden" name="src" value="1" />
			<input type="hidden" name="sra" value="1" />
			<input type="hidden" name="srt" value="12" />
			<input type="submit" name="submit" value="Donate Monthly" style="margin-left: 5px; margin-top: 8px; width: 115px;" />
		</div>
	</form><br/>
	You can cancel a monthly PayPal donation <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_subscr-find&amp;alias=donations@transmissionbt.com">here</a>.
</div>


<h1>Other Donations</h1>
<p>
There are many ways to donate to Transmission &mdash; code, icons, documentation, and translations are all welcomed.  Please see <a href="http://trac.transmissionbt.com/">our wiki</a> for more information.
</p>

<?php include('includes/footer.php'); ?>
