<?php
/**
 * Template Name: Strona główna
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();
?>
<style>
	section.adventages{
		display: none;
	}
    /* content */
    .contentBox {
    display: flex;
    align-items: center;
}
.about {
    background: #fff;
    margin-left: -6rem;
    padding: 3.5rem 4.5rem;
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
    background-image: url(/wp-content/uploads/2022/11/bg.jpg);
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
    background-image: url('/wp-content/uploads/2022/11/bg2.jpg');
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
    background-image: url('/wp-content/uploads/2022/11/bg2.jpg');
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
    background-image: url('/wp-content/uploads/2022/11/bg_newsletter.jpg');
    background-attachment: fixed;
    background-position: 50% 0;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 5.5rem 0;
}
/* slider	 */
p.mySlider-item__description {
    font-size: 20px;
    margin-right: 20px;
}
	@media only screen and (max-width: 768px) {
		.mySlider-item--2 .mySlider-item__image {
    display: none;
}
		h1.mySlider-item__title {
    font-size: 30px;
    line-height: 35px;
}
		body{
			overflow-x: hidden;
		}
		.sliderBottomBar__image {
    display: none;
}
		.mySlider-item__info {
    width: 100%!important;
}
		.sliderBottomBar__arrow {
    display: none!important;
}
		.mySlider__nav {
    display: none!important;
}
		.sliderBottomBar__contact {
    width: 100%!important;
}
		.sliderBottomBar__rightArrow {
    display: none!important;
}
		.mySlider-item.mySlider-item--1.active {
    display: flex;
    flex-direction: column-reverse;
    align-items: center;
    justify-content: center;
}
		.mySlider-item__image {
    width: 100%!important;
}
		.sliderBottomBar__contactInner {
    width: 60%;
}
		.mySlider-item__container {
    width: 100%!important;
    padding: 0!important;
}
		.sliderBottomBar {
    position: absolute;
    right: 0;
    z-index: 2;
    bottom: -160px!important;
    width: 100%;
    height: 80px;
    display: flex;
    background: #fff;
}
		.about {
    margin-left: 0px;
    padding: 30px 0;
}
		.offer-item-wrapper {
    width: 100%;
}
.footerBottom {
    display: flex;
    flex-direction: column;
    font-size: 11px;
    /* align-items: center; */
}
		.footerBottom p {
    margin-bottom: -10px;
    text-align: justify;
}
		input.wpcf7-form-control.wpcf7-text.wpcf7-email.wpcf7-validates-as-required.wpcf7-validates-as-email.footer__field {
    margin-bottom: 15px;
}
		a.footer__postIcon {
    display: flex;
    justify-content: flex-start!important;
}
		.adventagesItem {
    margin: 20px 0!important;
}
		.social {
    display: flex;
    justify-content: flex-start;
}
		input.wpcf7-form-control.has-spinner.wpcf7-submit.primary_btn {
    margin: 20px;
}
header.title h2 {
    margin-bottom: 20px;
}
		.project{
			margin-top: 110vh!important; margin-bottom: 10vh;
		}
	}
</style>
<?php get_template_part( 'template-parts/slider' ); ?>

<div class="container project" style="margin-top: 90vh; margin-bottom: 10vh;">
    <div class="row">
        <div class="col-md-4">
            <img src="/wp-content/uploads/2022/11/5ee219582dfaf_meet_our_team.jpg" alt="trener" class="img-fluid">
        </div>
        <div class="col-md-8 contentBox">
            <div class="about">
                <h2 class="title">Poznaj <b>mój projekt</b></h2>
                <strong>Jesteś ciekawa efektów? Nie wierzysz, że może Ci się udać? Zobacz metamorfozy kobiet, które nie bały się zaufać moim sprawdzonym metodom. </strong><br><br>
                <p>Tysiące kilogramów zrzuconych z moim projektem mówią same za siebie. Bariery istnieją tylko w głowie, a ja udowodnię Ci, że w prosty sposób możesz je wszystkie pokonać. </p>
                <p>Zdrowie, wymarzona sylwetka i lepsze samopoczucie są w zasięgu Twojej ręki. Nie zadręczaj się monotonnymi, kosztownymi dietami i długimi godzinami na bieżni. Zobacz zmiany kobiet, które zredukowały tkankę tłuszczową i nauczyły się jak utrzymać ten efekt bez zbędnych restrykcji.</p>
                <button class="primary_btn">Zobacz</button>
                
            </div>
        </div>
    </div>
</div>
<?php get_template_part( 'template-parts/methamorphoses' ); ?>
<?php get_template_part( 'template-parts/opinion' ); ?>
<?php get_template_part( 'template-parts/package' ); ?>
<?php get_template_part( 'template-parts/newsletter' ); ?>

<?php
get_footer();