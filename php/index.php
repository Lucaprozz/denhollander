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


<div class="backgroundcolor">
    <div class="skill">
        <div class="skill__left">
            <h2 class="skill__title">Schilderswerk</h2>
            <div class="skill__flex">
                <span class="skill__icon">
                    <i class="fas fa-paint-roller"></i>
                </span>
                <p class="skill__para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A doloribus blanditiis
                    magnam
                    quas eveniet, dolore illo autem natus porro qui nulla ut veritatis voluptatum dicta itaque cum
                    maxime
                    maiores sed quaerat iste modi. Cupiditate corporis suscipit mollitia tenetur omnis perferendis
                    ratione
                    temporibus, nulla, culpa a beatae quo qui exercitationem sint, esse ab. Voluptatum commodi
                    aspernatur
                    quas
                    voluptate fugit, porro ratione...</p>
            </div>
            <a class="skill__link" href="diensten"><button class="skill__button">Lees Meer</button></a>

        </div>
        <hr class="drome"/>
        <div class="skill__right">
            <h2 class="skill__title">Bouwkundig Onderhoud</h2>
            <div class="skill__flex">
                <span class="skill__icon">
                    <i class="fas fa-hammer"></i>
                </span>
                <p class="skill__para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A doloribus blanditiis
                    magnam
                    quas eveniet, dolore illo autem natus porro qui nulla ut veritatis voluptatum dicta itaque cum
                    maxime
                    maiores sed quaerat iste modi. Cupiditate corporis suscipit mollitia tenetur omnis perferendis
                    ratione
                    temporibus, nulla, culpa a beatae quo qui exercitationem sint, esse ab. Voluptatum commodi
                    aspernatur
                    quas
                    voluptate fugit, porro ratione...</p>
            </div>
            <a class="skill__link" href="diensten"><button class="skill__button--onderhoud">Lees Meer</button></a>
        </div>
       
    </div>
</div>


<div class="skill">
    <div class="skill__left">
        <h2 class="skill__title">Beglazing</h2>
        <div class="skill__flex">
            <span class="skill__icon">
                <i class="fab fa-windows"></i>
            </span>
            <p class="skill__para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A doloribus blanditiis
                magnam
                quas eveniet, dolore illo autem natus porro qui nulla ut veritatis voluptatum dicta itaque cum
                maxime
                maiores sed quaerat iste modi. Cupiditate corporis suscipit mollitia tenetur omnis perferendis
                ratione
                temporibus, nulla, culpa a beatae quo qui exercitationem sint, esse ab. Voluptatum commodi
                aspernatur
                quas
                voluptate fugit, porro ratione...</p>
        </div>
        <a class="skill__link" href="diensten"><button class="skill__button--beglazing">Lees Meer</button></a>

    </div>

    <div class="skill__right">
        <h2 class="skill__title">Kleuren Advies</h2>
        <div class="skill__flex">
            <span class="skill__icon">
                <i class="fas fa-palette"></i>
            </span>
            <p class="skill__para">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A doloribus blanditiis
                magnam
                quas eveniet, dolore illo autem natus porro qui nulla ut veritatis voluptatum dicta itaque cum
                maxime
                maiores sed quaerat iste modi. Cupiditate corporis suscipit mollitia tenetur omnis perferendis
                ratione
                temporibus, nulla, culpa a beatae quo qui exercitationem sint, esse ab. Voluptatum commodi
                aspernatur
                quas
                voluptate fugit, porro ratione...</p>
        </div>
        <a class="skill__link" href="diensten"><button class="skill__button--advies">Lees Meer</button></a>
    </div>
</div>

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



<!-- // <div id="wrapper">
//     <div id="first">
//         <h3 class="droll">Schilderswerk</h3>
//         <span class="skill__droll">
//                     <i class="fas fa-paint-roller"></i>
//                 </span>
//         <p class="drolletje">Stack Overflow is for professional and enthusiast programmers, people who write code because they love it.</p>

//     </div>

//     <hr class="drome"/>
//     <div id="second">
//     <h3 class="droll">Bouwkundig Onderhoud</h3>
//     <span class="skill__droll">
//     <i class="fas fa-hammer"></i>
//                 </span>
//         <p class="drolletje">When you post a new question, other users will almost immediately see it and try to provide good answers. This often happens in a matter of minutes, so be sure to check back frequently when your question is still new for the best response.</p>

//     </div>
// </div> -->


    <!-- <div class="men_ex"><span class="test"><i class="fas fa-bars field-icon toggle-password"></i></span></div> -->



<!-- <script>


    
$(".toggle-password").click(function() {
$(this).toggleClass("fas fa-bars fas fa-times");
});
</script> -->

<ul>
  <li>Milk</li>
  <li>Bread</li>
  <li class="fade">Chips</li>
  <li class="fade">Socks</li>
</ul>




