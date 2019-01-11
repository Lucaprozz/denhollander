<?php 
include ('includes/header.php');
?>

<div class="slider">
	<div class="slider__slide slider__een">
		<h2 class="slider__title">ZORGELOOS ONDERHOUD BEGINT BIJ DENHOLLLANDER</h2>
	</div>
	<div class="slider__slide  slider__twee">
		<h2 class="slider__title">DENHOLLANDER STAAT VOOR KWALITEIT</h2>
	</div>
	<div class="slider__slide  slider__drie">
		<h2 class="slider__title">Hoeren test teringzooi</h2>
	</div>
</div>

<script>
	$(".slider > div:gt(0)").hide();

	setInterval(function () {
		$('.slider > div:first')
			.fadeOut(3500)
			.next()
			.fadeIn(3500)
			.end()
			.appendTo('.slider');
	}, 5500);  
</script>

<div class="information--color">
	<section class="information">
		<div class="info">
			<h2 class="info__title">Ons Bedrijf</h2>
			<p class="info__tekst">De Gouwenaar Hans is begonnen onder de naam Schildersbedrijf Den Hollander.
				Een schildersbedrijf dat nét even wat meer doet dan het gemiddelde andere bedrijf.
			</p>
			<hr />
			<p class="info__tekst">
				In 1984 behaalde hij zijn diploma voor Schilder en is hij gecertificeerd in houtrot herstel inmiddels al ruim 30
				jaar in het vak. Michel is een professionele schilder op gebied van alle onderhoud- en schilderswerkzaamheden.
			</p>
			<hr />
			<p class="info__tekst">
				Kwaliteit kan niet zonder persoonlijke aandacht. Daarom denken wij als schilders- en onderhoudsbedrijf met u mee.
				Deskundigheid en vakmanschap zijn de elementen waarmee je je als schildersbedrijf onderscheidt. Schildersbedrijf
				Michel is een eenmansbedrijf hij groeide snel en heeft sindsdien een uitstekende naam in Zuid-Holland. Zijn succes
				komt voort uit vakmanschap en betrouwbaarheid, waar veel mensen waarde aan hechten.
			</p>
			<hr />
			<p class="info__tekst">
				Zowel voor particulieren als voor bedrijven, voor elke schildersklus en voor elk budget.
			</p>
			<hr />
			<p class="info__tekst">
				Michel is klantgericht gemotiveerd en flexibel.
			</p>
			<hr />
			<p class="info__tekst">
				Dus zoekt u een ervaren, deskundige en betrouwbare schilder? Heeft u last van houtrot? Dan bent u bij
				Schildersbedrijf Michel op het juiste adres.
			</p>
		</div>
	</section>
</div>

<section class="different">
	<h1 class="different__title">Diensten</h1>
	<div class="all">
		<div class="all__first">
			<a class="all__ref" href="diensten">
				<h2 class="all__title">Schilderswerk</h2>
			</a>
		</div>
		<div class="all__second">
			<a class="all__ref" href="diensten">
				<h2 class="all__title--stuc">Stucwerk</h2>
			</a>
		</div>
		<div class="all__third">
			<a class="all__ref" href="diensten">
				<h2 class="all__title--behang">Wandbekleding</h2>
			</a>
		</div>
	</div>
	<div class="spacing">
		<div class="all">
			<div class="all__fourth">
				<a class="all__ref" href="diensten">
					<h2 class="all__title">Bouwkundig Onderhoud</h2>
				</a>
			</div>
			<div class="all__fifth">
				<a class="all__ref" href="diensten">
					<h2 class="all__title--stuc">Beglazing</h2>
				</a>
			</div>
			<div class="all__six">
				<a class="all__ref" href="diensten">
					<h2 class="all__title--behang">Kleuren Advies</h2>
				</a>
			</div>

		</div>
</section>

<!-- <section class="section">
        <div class="section__center">
            <h2 class="section__title">Hoe kunnen we u helpen?</h1>
                <p class="section__para">Gestart als een traditioneel schildersbedrijf en inmiddels getransformeerd tot
                    een bedrijf dat het “Integraal Vastgoedonderhoud” hanteert als kernactiviteit. De specialisten van
                    DenHollander leveren maatwerk als het gaat om totaal gevelonderhoud voor onder andere de
                    institutionele beleggers, vastgoedbeheerders, zorginstellingen, overheid, woningcorporaties,
                    onderwijsinstellingen en VvE’s.</p>
                <button class="section__button">Neem Contact op</button>
        </div>
</section> -->
<div class="section__image">
	<section class="section">
		<h2 class="section__title">Hoe kunnen we u helpen?</h2>
		<p class="section__tekst">Gestart als een traditioneel schildersbedrijf en inmiddels getransformeerd tot
			een bedrijf dat het “Integraal Vastgoedonderhoud” hanteert als kernactiviteit. De specialisten van
			DenHollander leveren maatwerk als het gaat om totaal gevelonderhoud voor onder andere de
			institutionele beleggers, vastgoedbeheerders, zorginstellingen, overheid, woningcorporaties,
			onderwijsinstellingen en VvE’s</p>
		<a href="contact"><button class="section__button">Neem Contact op</button></a>
	</section>
</div>
<?php 
phpinfo();
?>
<?php 
include ('includes/footer.php');
?>