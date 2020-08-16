<?php get_header(); ?>


<section id="heading-donate">
        <div class="container">
            <h1>Donate</h1>
            <hr class="hr1">
            <hr class="hr2">
        </div>
</section>

<?php
ob_start();

function top_donations_page() { ?>
	<?php
		global $wpdb;					
		$records_shown = 3;
		$TopDonationEntries = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "paytm_donation where payment_status = 'Complete Payment' order by amount, date desc limit ".$records_shown);
		
		if (count($TopDonationEntries) > 0) { 
	?>
	<section id="donation">
		<div class="container">
			<div class="row">
				<?php foreach ($donationEntries as $row) { ?>		        	
					<div class ="col-md-2 col-6">
						<div class="card-donor">
							<img class="card-img-top img-fluid" src="images/donation-3.png" alt="">
							<div class="card-body">
								<p class="para-cards"> <?php echo $row->name ?> for an amount of Rs.<?php echo $row->amount; ?> on <?php echo $row->date; ?></p>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>
	<?php 
		} 
		else { echo "No Record's Found."; } 
	?>
	<div class="col-md-6 col-12">
    	<?php echo do_shortcode( '[paytmcheckout]' ); ?>
	</div>	
<?php } ?>
<?php top_donations_page(); ?>
<?php get_footer(); ?>