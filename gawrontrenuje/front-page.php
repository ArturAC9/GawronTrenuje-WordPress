<?php
/**
 * Template Name: Strona główna
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();
?>
<?php depicter(2); ?>
<style>
    /* content */
    .contentBox {
    display: flex;
    align-items: center;
}
.about {
    background: #fff;
    margin-left: -6rem;
    padding: 1rem 4.5rem;
    flex-direction: column;
    justify-content: center;
    /* display: flex; */
    /* flex-direction: column; */
    /* justify-content: center; */
    /* align-items: flex-end; */
}
button.primary_btn {
    background-size: 200% auto;
    background-image: linear-gradient(90deg,#ae2a78,#e84457 26%,#ec6531 50%,#e84457 76%,#ae2a78);
    height: 2.9rem;
    line-height: 2.9rem;
    border-radius: 0;
    min-width: 7.8rem;
    transition: background-position .3s;
    text-transform: uppercase;
    font-weight: 300;
    border: none;
    color: #fff;
}
.buttonRow {
    display: flex;
    /* align-items: center; */
    justify-content: flex-end;
}
.metamorfozy{
    width: 100%;
    height: 100%;
    background-image: url(/build/images/bg_metamorphoses.jpg);
    background-size: cover;
}
/* opinie */
.opinion {
    display: flex;
    align-items: center;
}
.opinion__content {
    height: 450px;
    display: flex;
    background: #fff;
    align-items: center;
    padding: 30px;
    margin-right: -5rem;
    z-index: 99;
    width: 45%;
    padding: 4rem;
}
.opinion__image {
    width: 50%;
}
.adventagesContent{
    display: flex;
    flex-direction: column;
    justify-content: center;
}
/* oferta */
.col-md-12.offer__content {
    margin-top: -10rem;
}
section.offer{
    background-image: url('https://www.gawrontrenuje.pl/build/images/bg-offer.jpg');
}
.price {
    font-size: 2.9rem;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
}
.packet {
    border: 1px solid #707070;
    display: flex;
    justify-content: center;
    padding: 2rem;
    background-color: #fff;
    flex-direction: column;
    align-items: center;
}
.offer__content{
    display: flex;
    flex-direction: column;
    align-items: center;
}
section.offer {
    background-image: url('https://www.gawrontrenuje.pl/build/images/bg-offer.jpg');
}
/* newsletter */
.offer__newsletter {
    display: flex;
    margin-top: 30px;
}
.offer__newsletterForm {
    background: #fff;
    width: 80%;
    height: 300px;
}
.offer__newsletterImage {
    margin-top: 3rem;
    margin-left: -5rem;
}
/* newsletter 2 */
section.newsletter2 {
    background-image: url('https://www.gawrontrenuje.pl/build/images/bg_newsletter.jpg');
    background-attachment: fixed;
    background-position: 50% 0;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 5.5rem 0;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="https://www.gawrontrenuje.pl/media/cache/stationar_image/media/5ee219582dfaf_meet_our_team.png" alt="" class="img-fluid">
        </div>
        <div class="col-md-8 contentBox">
            <div class="about">
                <h2 class="title">Poznaj <b>nasz zespół</b></h2>
                <strong>Jesteś ciekawa efektów? Nie wierzysz, że może Ci się udać? Zobacz metamorfozy kobiet, które nie bały się zaufać moim sprawdzonym metodom. </strong><br><br>
                <p>Tysiące kilogramów zrzuconych z moim projektem mówią same za siebie. Bariery istnieją tylko w głowie, a ja udowodnię Ci, że w prosty sposób możesz je wszystkie pokonać. </p>
                <p>Zdrowie, wymarzona sylwetka i lepsze samopoczucie są w zasięgu Twojej ręki. Nie zadręczaj się monotonnymi, kosztownymi dietami i długimi godzinami na bieżni. Zobacz zmiany kobiet, które zredukowały tkankę tłuszczową i nauczyły się jak utrzymać ten efekt bez zbędnych restrykcji.</p>
                <div class="buttonRow">
                <button class="primary_btn">Zobacz</button>
                </div>
                
            </div>
        </div>
    </div>
</div>

<section class="metamorfozy">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h2 class="title text-center">Poznaj <b>mój projekt</b></h2>
            </div>
        </div>
    </div>
    aaa
</section>

<section class="opinion">
    <div class="opinion__content">
      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatem repellat maxime natus veritatis nostrum laudantium molestiae beatae ipsa placeat exercitationem.
    </div>
    <div class="opinion__image">
        <img src="https://www.gawrontrenuje.pl/build/images/testimonials.jpg" alt="" >
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-4"><img src="https://www.gawrontrenuje.pl/build/images/cup.svg" alt="" class="img-fluid"></div>
                <div class="col-md-8 adventagesContent"><p><b>Gwarancja sukcesu</b></p><p>setki metamorfoz i przemian</p></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-4"><img src="https://www.gawrontrenuje.pl/build/images/business-and-finance.svg" alt="" class="img-fluid"></div>
                <div class="col-md-8 adventagesContent"><p><b>Bezpośredni kontakt</b></p><p>indywidualne podejście</p></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-4"><img src="https://www.gawrontrenuje.pl/build/images/miscellaneous.svg" alt="" class="img-fluid"></div>
                <div class="col-md-8 adventagesContent"><p><b>Zgrany zespół</b></p><p>dbamy o jakość usług</p></div>
            </div>
        </div>
    </div>
</div>

<section class="offer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 offer__content">
                <h2 class="title text-center">Dostępne <b>pakiety</b></h2>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
            <div class="packet">
                    <div class="price">
                        999zł<sub>/ 3 msc</sub><br>
</div>
                       
                        <ul>
                        <b>Współpraca ze mną to:</b><br><br>
                            <li>Spersonalizowany plan żywieniowy, w którym znajdziesz mnóstwo pomysłów na proste, szybkie i tanie posiłki</li><br>
                            <li>Plan treningowy dobrany do Twoich indywidualnych potrzeb i możliwości</li><br>
                            <li>Stała kontrola Twojego progresu</li><br>
                            <li>100% zadowolenia i satysfakcji</li>
                        </ul>
                        <button class="primary_btn">Wybieram</button>
                    
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
    <div class="offer__newsletter">
        <div class="offer__newsletterForm">
            <p>lorem</p>
        </div>
        <div class="offer__newsletterImage">
            <img src="https://www.gawrontrenuje.pl/media/cache/stationar_image/person.png" alt="">
        </div>

    </div>
</section>

<section class="newsletter2">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="title text-center">Dostępne <b>pakiety</b></h2>
                <p>Dołącz do newslettera i odkryj tajniki zdrowego stylu życia. Dzięki naszym wskazówkom i motywacji osiągniesz swoje cele szybciej niż kiedykolwiek. </p>
            </div>
            <div class="col-md-8"></div>
        </div>
    </div>
</section>

<?php
get_footer();