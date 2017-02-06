<?php get_header(); ?>

<style>
.home section .intro .wohnen h2::after {
	background-image: url("<?php echo get_bloginfo('template_url') ?>/assets/images/fp_building.png");
}

.home section .intro .bildung h2::after {
	background-image: url("<?php echo get_bloginfo('template_url') ?>/assets/images/fp_education.png");
}

.home section .intro .nachhaltigkeit h2::after {
	background-image: url("<?php echo get_bloginfo('template_url') ?>/assets/images/fp_sustain.png");
}

.home section .intro .selbstverwaltung h2::after {
	background-image: url("<?php echo get_bloginfo('template_url') ?>/assets/images/fp_selforga.png");
}

.intro .flex-video::before {
	background-image: url("<?php echo get_bloginfo('template_url') ?>/assets/images/red_voigl.svg");
}

.intro .flex-video::after {
	background-image: url("<?php echo get_bloginfo('template_url') ?>/assets/images/turk_voigl.svg");
}
</style>

<section class="intro" role="main">

    <div class="row" style="margin-bottom: 1em;">
        <!-- <div class="small-6 medium-4 columns"> -->
        <div class="small-12 medium-4 medium-offset-8 columns">
			<a class="button large expanded hollow" href="http://collegiumacademicum.de/die-projektbroschuere/">Infobroschüre ansehen</a>
        </div>
        <!-- <div class="small-6 medium-8 columns">
        </div> -->
    </div>

	<iframe style="border: 0;" src="http://player.vimeo.com/video/191458892" allowfullscreen="allowfullscreen"></iframe>

	<div class="wohnen row">
			<a href="http://collegiumacademicum.de/wohnen" ><h2 class="small-12 medium-10 medium-offset-1 columns" >Wohnen</h2></a>
			<p class="small-12 medium-7 large-6 large-offset-1 columns end" >
				Innovativer Holzbau und kreative Umnutzung: Auf ehemals militärisch genutzten Flächen entsteht das neue Collegium Academicum – bezahlbarer Wohnraum für über 200 junge Menschen und Räume für kreative Ideen und lebhaften Austausch.
			</p>
	</div>

	<div class="bildung row">
			<a href="http://collegiumacademicum.de/bildung" ><h2 class="small-12 medium-10 medium-offset-1 columns" >Bildung</h2></a>
			<p class="small-12 medium-7 medium-offset-5 large-6 large-offset-5 end columns" >
				Studium Generale, Propädeutikum und Projektorientiertes Lernen – das ganzheitliche und interdisziplinäre Bildungskonzept des CA bietet Orientierung, regt zur kritischen Auseinandersetzung an und schafft Raum für Initiativen.
			</p>
	</div>

	<div class="nachhaltigkeit row">
			<a href="http://collegiumacademicum.de/nachhaltigkeit" ><h2 class="small-12 medium-10 medium-offset-1 columns" >Nachhaltigkeit</h2></a>
			<p class="small-12 medium-7 large-6 large-offset-1 columns end" >
				Nachhaltig gedacht – von Anfang an! Ein bewusster Umgang mit Ressourcen steht nicht nur in Hinblick auf den künftigen Betrieb sondern bereits in der Baukonstruktion im Vordergrund. Im Zusammenleben ist Suffizienz das Schlüsselwort zu unserem Nachhaltigkeitskonzept: sich auf die wesentlichen Dinge und Gegenstände konzentrieren sowie einen verantwortungsvollen Umgang mit der Umwelt finden.
			</p>
	</div>

	<div class="selbstverwaltung row">
			<a href="http://collegiumacademicum.de/selbstverwaltung" ><h2 class="small-12 medium-10 medium-offset-1 columns" >Selbstverwaltung</h2></a>
			<p class="small-12 medium-7 medium-offset-5 large-6 large-offset-5 end columns" >
				Selbstentfaltung durch Selbstbestimmung!
	    	Unabhängig, gemeinschaftlich und offen – das ist das CA durch konsensorientierte und transparente Strukturen in einer demokratisch organisierten Selbstverwaltung.
			</p>
	</div>

	<?php mailchimpSF_signup_form(); ?>

</section>

<?php get_footer(); ?>
