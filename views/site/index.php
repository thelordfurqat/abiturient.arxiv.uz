<?php use yii\widgets\ActiveForm;

?>
<!--
Home Slider
==================================== -->
<section>
    <div id="home-carousel" class="carousel slide" data-interval="false">
        <div class="">

            <!-- <div class="item" style="background-color: #000"> -->
                <div class="carousel-caption">
                    <div class="animated bounceInDown">
                        <h2>Onlayn Abiturent </h2>
                        <p>Abiturentlardan onlayn ariza qabul qilish!</p><br><br>
                        <a href="#contact"><div class="btn btn-blue pull-right">Ariza jo'natish</div></a>
                    </div>
                </div>
            </div>

            <div class="item active"  style="background-color: #000; height: 550px;" >
                <img src="" alt="">
                <div class="carousel-caption">
                    <div class="animated bounceInRight">
                        <h2>Onlayn Abiturent </h2>
                        <p>Abiturentlardan onlayn ariza qabul qilish!</p><br><br>
                        <a href="#contact"><div class="btn btn-blue pull-right">Ariza jo'natish</div></a>
                    </div>
                </div>
            </div>
    </div>
</section>
<section id="subscribe" class="">
    <div class="container">
        <div class="row">

            <div class="col-md-7 wow fadeInLeft" style="visibility: visible;">
                <?php $form=ActiveForm::begin(['action'=>Yii::$app->homeUrl.'site/check','method'=>'post','options'=>['class'=>'subscription-form']])?>
<!--                <form action="check" method="post" class="subscription-form">-->
                    <i class="fa fa-envelope-o fa-lg"></i>
                    <input type="input" name="id_code" class="subscribe" placeholder="Diplom yoki shaxodatnoma raqami" required="required">
                    <input type="submit" value="Yuborish" id="mail-submit">

                <?php if(Yii::$app->session->hasFlash('check')):?>
                    <br>
                    <div class="alert alert-success" style="background-color: transparent; border: none; color: #fff">
                        <?=Yii::$app->session->getFlash('check')?>
                    </div>
                <?php endif;?>
<!--                </form>-->
                <?php ActiveForm::end();?>
            </div>
            <div class="col-md-4 text-left wow fadeInRight" style="visibility: visible;">
                <p>Hujjat jarayonini tekshirish uchun Dipolom yoki shaxodatnoma raqamini kiriting. Bu jarayon orqali siz hujjatlariningizning qaysi holat bosqichida ekanligi haqida to'liq ma'lumotga ega bo'lasiz.</p>
            </div>
        </div>
    </div>
</section>
<!--
End #home Slider
========================== -->


<!--
#service
========================== -->
<section id="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center wow fadeInDown">
                    <h2>Xizmatlar</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-6 col-sm-12 wow fadeInLeft">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="<?=Yii::$app->homeUrl?>theme/img/icons/monitor.png" class="media-object" alt="Monitor">
                    </a>
                    <div class="media-body">
                        <h3>Abiturentlar uchun onlayn hujjat qabul qilish</h3>
                        <!--<p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam.</p>-->
                    </div>
                </div>

            </div>

            <div class="col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="<?=Yii::$app->homeUrl?>theme/img/icons/cog.png" alt="Cog">
                    </a>
                    <div class="media-body">
                        <h3>Hujjatlarni tekshirish</h3>
                        <!--<p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam.</p>-->
                    </div>
                </div>

            </div>

            <div class="col-md-6 col-sm-12 wow fadeInLeft">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="<?=Yii::$app->homeUrl?>theme/img/icons/ruler.png" alt="Ruler">
                    </a>
                    <div class="media-body">
                        <h3>Hujjatlar jarayonini tekshirish</h3>
                        <!--<p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam.</p>-->
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-sm-12 wow fadeInRight" data-wow-delay="0.2s">
                <div class="media">
                    <a href="#" class="pull-left">
                        <img src="<?=Yii::$app->homeUrl?>theme/img/icons/camera.png" alt="Camera">
                    </a>
                    <div class="media-body">
                        <h3>Arizalar yuborish</h3>
                        <!--<p>Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam.</p>-->
                    </div>
                </div>
            </div>

        </div> <!-- end .row -->
    </div> <!-- end .container -->
</section>
<!--
End #service
========================== -->
<!--
#about
========================== -->
<!-- <section id="about">
    <div class="container">
        <div class="row">

            <div class="section-title text-center wow fadeInUp">
                <h2>Biz Haqimizda</h2>
            </div>

            <div class="about-us text-center wow fadeInDown">
                <img src="<?=Yii::$app->homeUrl?>theme/img/about.png" alt="About Us" class="img-responsive">
            </div>
        </div>
    </div>
</section> -->
<!--
End #about
========================== -->
<!--
#count
========================== -->

<section id="count">
    <div class="container">
        <div class="row">
            <div class="counter-section clearfix">

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.5s">
                    <div class="fact-item text-center">
                        <div class="fact-icon">
                            <i class="fa fa-check-square fa-lg"></i>
                        </div>
                        <span data-to="120">0</span>
                        <p>Jo'natilgan Arizalar</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.8s">
                    <div class="fact-item text-center">
                        <div class="fact-icon">
                            <i class="fa fa-users fa-lg"></i>
                        </div>
                        <span data-to="152">0</span>
                        <p>Ko'rib chiqilganlar</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="1.1s">
                    <div class="fact-item text-center last">
                        <div class="fact-icon">
                            <i class="fa fa-clock-o fa-lg"></i>
                        </div>
                        <span data-to="2500">0</span>
                        <p>Ko'rib chiqilayotganlar</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="1.3s">
                    <div class="fact-item text-center last">
                        <div class="fact-icon">
                            <i class="fa fa-trophy fa-lg"></i>
                        </div>
                        <span data-to="150">0</span>
                        <p>Qabul qilinmaganlar</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--
End #count
========================== -->
<!--
#quotes
========================== -->
<section id="quotes">
    <div class="container">
        <div class="row wow zoomIn">
            <div class="col-lg-12">
                <div class="call-to-action text-center">
                    <p>“Abiturentlar uchun hujjatlarni onlayn tarzda qabul qilish xizmati”</p>
                    <span>Onlayn Abiturent</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!--
End #quotes
========================== -->

<!--
#pricing
========================== -->
<section id="pricing">
    <div class="container">
        <div class="row">

            <div class="section-title text-center wow fadeInUp">
                <h2>Xizmat Narxlari</h2>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp">
                <div class="pricing-table text-center">
                    <div class="price">
                        <span class="plan">Xorazm bo'yicha</span>
                        <span class="value"><small>SUM</small><strong>5 000</strong></span>
                    </div>
                    <ul class="text-center">
                        <li>Xazorasp</li>
                        <li>Xiva</li>
                        <li>Gurlan</li>
                        <li>va Boshqalar</li>
                    </ul>
                    <!--<a href="#" class="btn btn-price">Buy Now</a>-->
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="pricing-table text-center">
                    <div class="price">
                        <span class="plan">Respublika bo'yicha</span>
                        <span class="value"><small>SUM</small><strong>10 000</strong></span>
                    </div>
                    <ul class="text-center">
                        <li>Qoraqolpog'iston</li>
                        <li>Vodiy</li>
                        <li>Toshkent</li>
                        <li>va Boshqalar</li>
                    </ul>
                    <!--<a href="#" class="btn btn-price">Buy Now</a>-->
                </div>
            </div>


        </div>

    </div>
</section>
<!--
End #pricing
========================== -->
<!--
#contact
========================== -->
<section id="contact">
    <div class="container">
        <div class="row">

            <div class="section-title text-center wow fadeInDown">
                <h2>Ariza jo'natish</h2>
            </div>

            <div class="col-md-8 col-sm-9 wow fadeInLeft">
                <div class="contact-form clearfix">
                    <?php $form = ActiveForm::begin(['action'=>'','method'=>'post','id'=>'form-add-ariza']); ?>
<!--                    <form action="sendariza" method="post">-->
                        <div class="input-field">
                            <label style="color: #212121;">F.I.O :</label><br>
                            <?=$form->field($abiturent,'fio')->textInput(['placeholder'=>"Ismingizni kiriting", 'required'=>"required"])->label('')?>
<!--                            <input type="text" class="form-control" name="fio" placeholder="Ismingizni kiriting" required="required">-->
                        </div>
                        <div class="input-field">
                            <label style="color: #212121;">Passport seriya raqami :</label><br>
                            <?=$form->field($abiturent,'passport')->textInput(['placeholder'=>"Passport seriya va raqamini kiriting", 'required'=>"required"])->label('')?>
<!--                            <input type="text" class="form-control" name="passport" placeholder="Passport seriya va raqamini kiriting" required="required">-->
                        </div>
                        <div class="input-field">
                            <label style="color: #212121;">Telefon raqam :</label><br>
                            <?=$form->field($abiturent,'telefon')->textInput(['placeholder'=>"Telefon raqamingizni kiriting", 'required'=>"required"])->label('')?>
<!--                            <input type="text" class="form-control" name="tel" placeholder="Telefon raqamingizni kiriting" required="required">-->
                        </div>
                        <div class="input-field">
                            <label id="message" style="color: #212121;">Manzil :</label><br>
                            <?=$form->field($abiturent,'manzil')->textInput(['placeholder'=>"Manzilingizni kiriting", 'required'=>"required"])->label('')?>
<!--                            <input type="text" class="form-control" name="mazil" placeholder="Manzilingizni kiriting" required="required">-->
                        </div>
                        <div class="input-field">
                            <label style="color: #212121;">Kollej diplomi yoki shaxodatnoma raqami: </label><br>
                            <?=$form->field($abiturent,'id_kod')->textInput(['placeholder'=>"Kollej diplomi yoki shaxodatnoma raqamini kiriting",'type'=>'number', 'required'=>"required"])->label('')?>
<!--                            <input type="text" class="form-control" name="dtm_raqam" placeholder="DTM raqamini kiriting" required="required">-->
                        </div>
                        <div class="input-field">
                            <label style="color: #212121;">Universitet nomi: </label><br>
                            <input type="text" placeholder="Universitet nomi kiriting" style="width: 100%; padding: 10px 15px;">
<!--                            <input type="text" class="form-control" name="dtm_raqam" placeholder="DTM raqamini kiriting" required="required">-->
                        </div>
                        <div class="input-field">
                            <label style="color: #212121;">Yo'nalishi: </label><br>
                            <input type="text" placeholder="Yo'nalishni kiriting" style="width: 100%; padding: 10px 15px;">
<!--                            <input type="text" class="form-control" name="dtm_raqam" placeholder="DTM raqamini kiriting" required="required">-->
                        </div>
                        <div class="input-field">
                            <label style="color: #212121;">Harbiy tavsiya: </label><br>
                            <input type="text" placeholder="Harbiy tavsiyani kiriting" style="width: 100%; padding: 10px 15px;">
<!--                            <input type="text" class="form-control" name="dtm_raqam" placeholder="DTM raqamini kiriting" required="required">-->
                        </div>
                        <div class="input-field" >
                            <label style="color: #212121;">Diplom yoki shaxodatnoma fayli:</label><br>
                            <?=$form->field($abiturent,'dtm_varaqi')->fileInput(['required'=>"required"])->label('')?>
<!--                            <input type="file" class="form-control" name="dtm_file" placeholder="Dtm varaqasini yuklang" required="required" style="border: none">-->
                        </div>
                        <div class="input-field">
                            <label style="color: #212121;">To'lov haqida ma'lumotnomani yuklang :<span class="small" style="color: #1b6d85">To'lov <a href="#">8600020496681232</a>  raqamiga jo'natilsin</span></label><br>
                            <?=$form->field($abiturent,'payment_file')->fileInput(['placeholder'=>"Ismingizni kiriting",'extensions'=>'png, jpg, bmp, ico', 'required'=>"required"])->label('')?>
<!--                            <input type="file" class="form-control" name="malumotnoma" placeholder="Ma'lumotnomani yuklang" required="required" style="border: none">-->
                        </div>
                    <button type="submit" class="btn btn-blue pull-right send-ariza" >Jo'natish</button>
<!--                        <input type="button" class="btn btn-blue pull-right send-ariza" value="Jo'natish" id="msg-submit">-->
                    <?php if(Yii::$app->session->hasFlash('success')):?>
                        <div class="alert alert-success">
                            <strong>Muvoffaqqiyatli bajarildi</strong> <?=Yii::$app->session->getFlash('success')?>
                        </div>
                    <?php endif;?>
                    <?php if(Yii::$app->session->hasFlash('error')):?>
                        <div class="alert alert-warning col-lg-9">
                            <p>
                            <strong>Ogohlantirish</strong> <?=Yii::$app->session->getFlash('error')?>
                            </p>
                        </div>
                    <?php endif;?>

                    <?php ActiveForm::end(); ?>


<!--                    </form>-->
                </div> <!-- end .contact-form -->
            </div> <!-- .col-md-8 -->

            <div class="col-md-4 col-sm-3 wow fadeInRight">
                <!-- end .contact-details -->
            </div> <!-- .col-md-4 -->

        </div>
    </div>
</section>

<!--
End #contact
========================== -->

<!--
#footer
========================== -->
<footer id="footer" class="text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- <div class="footer-logo wow fadeInDown">
                    <img src="<?=Yii::$app->homeUrl?>theme/img/logo.png" alt="logo">
                </div> -->

                <!-- <div class="footer-social wow fadeInUp">
                    <h3>We are social</h3>
                    <ul class="text-center list-inline">
                        <li><a href="http://goo.gl/RqhEjP"><i class="fa fa-facebook fa-lg"></i></a></li>
                        <li><a href="http://goo.gl/hUfpSB"><i class="fa fa-twitter fa-lg"></i></a></li>
                        <li><a href="http://goo.gl/r4xzR4"><i class="fa fa-google-plus fa-lg"></i></a></li>
                        <li><a href="http://goo.gl/k9zAy5"><i class="fa fa-dribbble fa-lg"></i></a></li>
                    </ul>
                </div> -->

                <div class="copyright">

                    <p>Developed by <a target="_blank" href="#">Matchanova Shodiya</a></p>
                </div>

            </div>
        </div>
    </div>
</footer>
<!--
End #footer
========================== -->
