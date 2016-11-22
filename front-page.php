<?php get_header(); ?>

<style>
.home section .intro .wohnen h2::after {
	background-image: url("<?php echo get_bloginfo('template_url') ?>/assets/images/fp_building.png");
}

.home section .intro .bildung h2::after {
	background-image: url("<?php echo get_bloginfo('template_url') ?>/assets/images/fp_building.png");
}

.home section .intro .nachhaltigkeit h2::after {
	background-image: url("<?php echo get_bloginfo('template_url') ?>/assets/images/fp_building.png");
}

.home section .intro .selbstverwaltung h2::after {
	background-image: url("<?php echo get_bloginfo('template_url') ?>/assets/images/fp_building.png");
}

.intro .flex-video::before {
	background-image: url("<?php echo get_bloginfo('template_url') ?>/assets/images/turk_voigl.svg.png");
}

.intro .flex-video::after {
	background-image: url("<?php echo get_bloginfo('template_url') ?>/assets/images/red_voigl.svg.png");
}
</style>

<section class="intro" role="main">
  <!-- <h1>Hallo, wir sind das <span class="red">Collegium Academicum</span> und mit uns bekommt <span class="blue">Heidelberg</span>:</h1> -->

  <iframe style="border: 0;" src="http://player.vimeo.com/video/191458892" allowfullscreen="allowfullscreen"></iframe>

	<div class="wohnen row">
			<a><h2 class="small-12 medium-10 medium-offset-2 columns" >Wohnen</h2></a>
			<p class="small-12 medium-7 large-5 large-offset-2 columns end" >Innovativer Holzbau und kreative Umnutzung: Auf ehemals militärisch genutzten Flächen entsteht das neue Collegium Academicum – bezahlbarer Wohraum für 200 junge Menschen mit Räumen für kreative Ideen und lebhaften Austausch.</p>
	</div>

	<div class="bildung row">
			<a><h2 class="small-12 medium-10 columns" >Bildung</h2></a>
			<p class="small-12 medium-7 medium-offset-5 large-5 large-offset-5 end columns" >Studium Generale, Propädeutikum und Projektorientiertes Lernen – das ganzheitliche und interdisziplinäre Bildungskonzept des CA bietet Orientierung, regt zur kritischen Auseinandersetzung an und schafft Raum für Initiativen.</p>
	</div>

	<div class="nachhaltigkeit row">
			<a><h2 class="small-12 medium-10 medium-offset-2 columns" >Nachhaltigkeit</h2></a>
			<p class="small-12 medium-7 large-5 large-offset-2 columns end" >Innovativer Holzbau und kreative Umnutzung: Auf ehemals militärisch genutzten Flächen entsteht das neue Collegium Academicum – bezahlbarer Wohraum für 200 junge Menschen mit Räumen für kreative Ideen und lebhaften Austausch.</p>
	</div>

	<div class="selbstverwaltung row">
			<a><h2 class="small-12 medium-10 columns" >Selbstverwaltung</h2></a>
			<p class="small-12 medium-7 medium-offset-5 large-5 large-offset-5 end columns" >Studium Generale, Propädeutikum und Projektorientiertes Lernen – das ganzheitliche und interdisziplinäre Bildungskonzept des CA bietet Orientierung, regt zur kritischen Auseinandersetzung an und schafft Raum für Initiativen.</p>
	</div>

	<div class="unterstützung row">
		<!--<div class="iconog small-12 columns" ></div>-->
		<div class="small-12 columns" >
			<h2>Uns unterstützen!</h2>
			<p>Start by adding an element with a class of .row. This will create a horizontal block to contain vertical columns. Then add elements with a .column class within that row. You can use .column or .columns—the only difference is grammar. Specify the widths of each column with the .small-#, .medium-#, and .large-# classes.</p>
		</div>
	</div>



	<h3 class="mc_custom_border_hdr">Zu unserem Newsletter anmelden:</h3>
	<div id="mc_signup">
		<form method="post" action="#mc_signup" id="mc_signup_form">
			<input type="hidden" id="mc_submit_type" name="mc_submit_type" value="html" />
			<input type="hidden" name="mcsf_action" value="mc_submit_signup_form" />
			<input type="hidden" id="_mc_submit_signup_form_nonce" name="_mc_submit_signup_form_nonce" value="53a5957a0e" />

			<div class="mc_form_inside">
				<div class="updated" id="mc_message">
				</div><!-- /mc_message -->
				<div class="mc_merge_var">
					<label for="mc_mv_EMAIL" class="mc_var_label mc_header mc_header_email">Email Address</label>
					<input type="text" size="18" placeholder="" name="mc_mv_EMAIL" id="mc_mv_EMAIL" class="mc_input"/>
				</div><!-- /mc_merge_var -->
				<div class="mc_signup_submit">
					<input type="submit" name="mc_signup_submit" id="mc_signup_submit" value="Anmelden" class="button" />
				</div><!-- /mc_signup_submit -->
			</div><!-- /mc_form_inside -->
		</form><!-- /mc_signup_form -->
	</div><!-- /mc_signup_container -->

</section>

<?php get_footer(); ?>
