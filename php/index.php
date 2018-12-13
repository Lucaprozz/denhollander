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

setInterval(function() { 
  $('.slider > div:first')
    .fadeOut(3500)
    .next()
    .fadeIn(3500)
    .end()
    .appendTo('.slider');
},  5500);
</script>



<!-- <section class="section">
    <div class="section__image">
        <div class="section__center">
            <h2 class="section__title">Hoe kunnen we u helpen?</h1>
                <p class="section__para">Gestart als een traditioneel schildersbedrijf en inmiddels getransformeerd tot
                    een bedrijf dat het “Integraal Vastgoedonderhoud” hanteert als kernactiviteit. De specialisten van
                    DenHollander leveren maatwerk als het gaat om totaal gevelonderhoud voor onder andere de
                    institutionele beleggers, vastgoedbeheerders, zorginstellingen, overheid, woningcorporaties,
                    onderwijsinstellingen en VvE’s.</p>
                <button class="section__button">Neem Contact op</button>
        </div>
    </div>
</section> -->






