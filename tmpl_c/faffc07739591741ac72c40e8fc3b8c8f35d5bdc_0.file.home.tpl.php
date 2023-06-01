<?php /* Smarty version 3.1.27, created on 2023-06-01 21:41:21
         compiled from "/home/quickass/domains/easycryptotrading.ltd/public_html/tmpl/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:127914394564791081e445e9_08278254%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faffc07739591741ac72c40e8fc3b8c8f35d5bdc' => 
    array (
      0 => '/home/quickass/domains/easycryptotrading.ltd/public_html/tmpl/home.tpl',
      1 => 1685315779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127914394564791081e445e9_08278254',
  'variables' => 
  array (
    'loginUrl' => 0,
    'signUpUrl' => 0,
    'siteName' => 0,
    'aboutUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_64791081efde44_33991348',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_64791081efde44_33991348')) {
function content_64791081efde44_33991348 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/quickass/domains/easycryptotrading.ltd/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '127914394564791081e445e9_08278254';
$_smarty_tpl->tpl_vars['siteName'] = new Smarty_Variable("Easycrypto Trading LTD", null, 0);?>
<?php $_smarty_tpl->tpl_vars['contactUrl'] = new Smarty_Variable("?a=support", null, 0);?>
<?php $_smarty_tpl->tpl_vars['loginUrl'] = new Smarty_Variable("?a=login", null, 0);?>
<?php $_smarty_tpl->tpl_vars['signUpUrl'] = new Smarty_Variable("?a=signup", null, 0);?>
<?php $_smarty_tpl->tpl_vars['aboutUrl'] = new Smarty_Variable("?a=about", null, 0);?>
<?php $_smarty_tpl->tpl_vars['aboutUrl'] = new Smarty_Variable("?a=about", null, 0);?>


<?php $_smarty_tpl->tpl_vars['pageName'] = new Smarty_Variable("Home", null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ("auth_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>



    <!-- Banner Section -->
    <section class="banner-section">
        <div class="banner-carousel owl-carousel owl-theme">
            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(https://images.unsplash.com/photo-1590649917466-06e6e1c3e92d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NTV8fGJ1c2luZXNzJTIwd29tYW58ZW58MHx8MHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60);">
                <div class="content-box">
                    <div class="content">
                        <div class="auto-container">
                            <span class="title">Experts in</span>
                            <h2>Crypto Mining</h2>
                            <div class="text">
                                Being one of the ways we generate income, we have built this platform to make it easy for investors to diversify and invest their capital into cryptocurrency. This has been a proven way that works and we have experts who ensure that your capital is insured.

                            </div>
                            <div class="btn-box">


                                <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['loginUrl']->value);?>
" class="theme-btn btn-style-two"><span class="btn-title">Login</span></a>
                                <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['signUpUrl']->value);?>
" class="theme-btn btn-style-three"><span class="btn-title">Register</span></a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(https://images.unsplash.com/photo-1551135049-8a33b5883817?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OHx8YnVzaW5lc3MlMjBtZWV0aW5nfGVufDB8fDB8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60);">
                <div class="content-box">
                    <div class="content">
                        <div class="auto-container">
                            <span class="title">Invest in</span>
                            <h2>Global Assets</h2>
                            <div class="text">More effectively with a variety of crypto pairs, derivative trading instruments,<br>and order types such as limit order, market order, stop order, or iceberg order al managed by expert traders </div>
                            <div class="btn-box">

                                <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['loginUrl']->value);?>
" class="theme-btn btn-style-two"><span class="btn-title">Login</span></a>
                                <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['signUpUrl']->value);?>
" class="theme-btn btn-style-three"><span class="btn-title">Register</span></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(https://images.unsplash.com/photo-1577415124269-fc1140a69e91?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OXx8YnVzaW5lc3MlMjBtZWV0aW5nfGVufDB8fDB8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60);">
                <div class="content-box">
                    <div class="content">
                        <div class="auto-container">
                            <span class="title">Regulated</span>
                            <h2><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteName']->value);?>
<Br></h2>
                            <div class="text">Diversify your crypto portfolio and build long-term wealths with advanced tools<br>for crypto mining, wallet management, and crypto holdings. </div>
                            <div class="btn-box">

                                <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['loginUrl']->value);?>
" class="theme-btn btn-style-two"><span class="btn-title">Login</span></a>
                                <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['signUpUrl']->value);?>
" class="theme-btn btn-style-three"><span class="btn-title">Register</span></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item" style="background-image: url(https://images.unsplash.com/photo-1605523711462-f5d5a6688e84?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDN8fGNyeXB0b3xlbnwwfHwwfA%3D%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60);">
                <div class="content-box">
                    <div class="content">
                        <div class="auto-container">
                            <span class="title">Mining</span>
                            <h2>Automated Crypto <br> Mining</h2>
                            <div class="text">Artificial Intelligence is taking over and <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteName']->value);?>
 is following the trend. Invest in our automated mining system powered by blockchain technology </div>
                            <div class="btn-box">

                                <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['loginUrl']->value);?>
" class="theme-btn btn-style-two"><span class="btn-title">Login</span></a>
                                <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['signUpUrl']->value);?>
" class="theme-btn btn-style-three"><span class="btn-title">Register</span></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END Banner Section -->

    <!-- About Us -->
    <section class="about-us">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">About Us</span>
                            <h2><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteName']->value);?>
</h2>
                        </div>
                        <div class="message">We are a known financial and portfolio management company that manages the portfolio of its investors, effectively.

                        </div>
                        <div class="text">We launched this platform to provide hundreds of token & futures trading pairs to help traders to optimize their strategy. We are also one of the top digital asset exchanges by trading volume, serving millions of users in over 100 countries. Our BTC futures trade has nearly $1.5B of volume daily, and is widely recognized as the gold standard for the industry.</div>


                        <div class="link-box clearfix">
                            <a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['aboutUrl']->value);?>
" class="theme-btn btn-style-two"><span class="btn-title">Read More</span></a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="image-layer mt-5" style="">
                <figure class="mt-5"><img src="https://images.unsplash.com/photo-1603202662747-00e33e7d1468?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTR8fGJ1c2luZXNzJTIwbWVldGluZ3xlbnwwfHwwfA%3D%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt=""></figure>
                <span class="float-text">ABOUT US</span>
            </div>
        </div>
    </section>
    <!-- End About Us -->

    <!-- Services Section -->
    <section class="services-section">
        <div class="auto-container">
            <div class="sec-title">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <span class="title">World-class</span>
                        <h2>Blockchain based Platform</h2>
                    </div>
                    <div class="text-column col-lg-5 col-md-12">
                        <div class="text">Invest, Trade, and manage cryptocurrencies in minutes.</div>
                    </div>
                </div>
            </div>

            <div class="carousel-outer">
                <!-- Services Carousel -->
                <div class="services-carousel owl-carousel owl-theme">

                    <!-- service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="https://images.unsplash.com/photo-1519074002996-a69e7ac46a42?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTN8fHRlYW18ZW58MHx8MHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt=""></figure>
                                <div class="overlay-link">
                                    <a href="https://images.unsplash.com/photo-1519074002996-a69e7ac46a42?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTN8fHRlYW18ZW58MHx8MHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="lightbox-image" data-fancybox="Gallery"><span class="icon flaticon-add-1"></span></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <span class="icon flaticon-robot-arm"></span>
                                <h3><a href="#">Trading Experts</a></h3>
                                <div class="text">We have well trained Experts who make sure that loss is reduced to under 0.01% or none</div>

                            </div>
                        </div>
                    </div>
                    <!-- service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="home/images1/resource/service-2.jpg" alt=""></figure>
                                <div class="overlay-link">
                                    <a href="home/cdn.iconscout.com/icon/free/png-256/blockchain-2-411041.png" class="lightbox-image" data-fancybox="Gallery"><span class="icon flaticon-add-1"></span></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <span class="icon flaticon-refinery"></span>
                                <h3><a href="oil-gas-engineering.html">Blockchain Technology</a></h3>
                                <div class="text">Your Investments are stored in blockchain ledgers where they cannot be tampered with</div>

                            </div>
                        </div>
                    </div>



                    <!-- service Block -->
                    <div class="service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="https://images.unsplash.com/photo-1554774853-b415df9eeb92?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjR8fGN1c3RvbWVyfGVufDB8fDB8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt=""></figure>
                                <div class="overlay-link">
                                    <a href="https://images.unsplash.com/photo-1554774853-b415df9eeb92?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjR8fGN1c3RvbWVyfGVufDB8fDB8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="lightbox-image" data-fancybox="Gallery"><span class="icon flaticon-add-1"></span></a>
                                </div>
                            </div>
                            <div class="lower-content">
                                <span class="icon flaticon-laboratory"></span>
                                <h3><a href="#">Worldwide Customer Base</a></h3>
                                <div class="text">Full range of cryptocurrency services for users from over 130 countries around the world.</div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- End service Section -->

    <!-- Project Section -->
    <section class="project-section">
        <div class="bg-pattern" style="background-image: url(https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzB8fGN1c3RvbWVyfGVufDB8fDB8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60);"></div>
        <div class="layer-image" style="background-image: url(https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzB8fGN1c3RvbWVyfGVufDB8fDB8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60);"></div>
        <div class="auto-container">
            <!-- Prject Carousel -->
            <div class="project-carousel owl-carousel owl-theme">
                <!-- Project Block -->
                <div class="project-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzB8fGN1c3RvbWVyfGVufDB8fDB8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="lightbox-image"><img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzB8fGN1c3RvbWVyfGVufDB8fDB8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt=""></a></figure>
                        </div>
                        <div class="content-box">
                            <h4><a href="#">Our Mission</a></h4>
                            <div class="text"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteName']->value);?>
 believes the blockchain technology will eliminate barriers to transactions, increase the efficiency of transactions across society, and eventually have a significant impact on the global economy. We strive to achieve something that changes the world and never stop to innovate and improve on our customer experience. </div>

                        </div>
                    </div>
                </div>

                <!-- Project Block -->
                <div class="project-block">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><a href="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzB8fGN1c3RvbWVyfGVufDB8fDB8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="lightbox-image"><img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzB8fGN1c3RvbWVyfGVufDB8fDB8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" alt=""></a></figure>
                        </div>
                        <div class="content-box">
                            <h4><a href="#">Our Technology</a></h4>
                            <div class="text">Security is always our priority. <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['siteName']->value);?>
 provides a safe, reliable and stable environment for digital assets trading via web interface and mobile app by adopting GSLB, distributed server clusters and many more advanced technologies. We also invent and develop products according to customers' needs and suggestions to offer the best trading experience available in the industry.
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!--End Project Section -->
    <br><br>


<section class="services-section-three">
    <div class="auto-container">
        <div class="sec-title">
            <div class="row">
                <div class="col-lg-7 col-md-12">
                    <span class="title">CHOOSE OUR</span>
                    <h2>Investment Plans </h2>
                </div>
                <div class="text-column col-lg-5 col-md-12">

                </div>
            </div>
        </div>

        <div class="row" align="center">
            <!-- Service BLock -->
            <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInLeft">
                <div class="inner-box">
                    <h3><a href="#">Plan 1</a></h3>
                    <span class="icon flaticon-factory-3"></span>
                    <h3><a href="#">Minimium - $50</a></h3>
                    <h3><a href="#">Maximum - $499</a></h3>
                    <h3><a href="#">Profit - 15%</a></h3>
                    <h3><a href="#">Duration - 12 hours</a></h3>
                    <h3><a href="#">Referral Commission - 5%</a></h3>

                    <div class="link-box"><a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['signUpUrl']->value);?>
">Invest Now</a></div>
                </div>
            </div>

            <!-- Service BLock -->
            <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="400ms">
                <div class="inner-box">
                    <h3><a href="#">Plan 2</a></h3>
                    <span class="icon flaticon-factory-3"></span>
                    <h3><a href="#">Minimium - $500</a></h3>
                    <h3><a href="#">Maximum - $1,999</a></h3>
                    <h3><a href="#">Profit - 45%</a></h3>
                    <h3><a href="#">Duration - 24 hours</a></h3>
                    <h3><a href="#">Referral Commission - 5%</a></h3>

                    <div class="link-box"><a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['signUpUrl']->value);?>
">Invest Now</a></div>
                </div>
            </div>

            <!-- Service BLock -->
            <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="800ms">
                <div class="inner-box">
                    <h3><a href="#"> Plan 3</a></h3>
                    <span class="icon flaticon-factory-3"></span>
                    <h3><a href="#">Minimium - $2,000</a></h3>
                    <h3><a href="#">Maximum - $10,000</a></h3>
                    <h3><a href="#">Profit - 75%</a></h3>
                    <h3><a href="#">Duration - 48 hours</a></h3>
                    <h3><a href="#">Referral Commission - 5%</a></h3>

                    <div class="link-box"><a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['signUpUrl']->value);?>
">Invest Now</a></div>
                </div>
            </div>


            <!-- Service BLock -->
            <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInLeft">
                <div class="inner-box">
                    <h3><a href="#">Plan 4</a></h3>
                    <span class="icon flaticon-factory-3"></span>
                    <h3><a href="#">Minimium - $1,000</a></h3>
                    <h3><a href="#">Maximum - $UNLIMITED</a></h3>
                    <h3><a href="#">Profit - 100%</a></h3>
                    <h3><a href="#">Duration - 72 hours</a></h3>
                    <h3><a href="#">Referral Commission - 5%</a></h3>
                    <div class="link-box"><a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['signUpUrl']->value);?>
">Invest Now</a></div>
                </div>
            </div>
            
            <!-- Service BLock -->
            <div class="service-block-three col-lg-3 col-md-6 col-sm-12 wow fadeInLeft">
                <div class="inner-box">
                    <h3><a href="#">Promo Plan</a></h3>
                    <span class="icon flaticon-factory-3"></span>
                    <h3><a href="#">Minimium - $600</a></h3>
                    <h3><a href="#">Maximum - $UNLIMITED</a></h3>
                    <h3><a href="#">Profit - 100%</a></h3>
                    <h3><a href="#">Duration - 72 hours</a></h3>
                    <h3><a href="#">Referral Commission - 5%</a></h3>
                    <div class="link-box"><a href="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['signUpUrl']->value);?>
">Invest Now</a></div>
                </div>
            </div>
</section>

           <!--<section id="price-chart-part" class="section-p">
                   <div class="container">
                   <div class="row">
                        <div class="col-lg-6 col-xs-12">

                           <div class="columns is-variable is-multiline is-centered">


                               <table class="table is-fullwidth is-bordered">

                                 <tbody>
                                     <tr>
                                         <td>

                                         </td>
                                     </tr>

                                 </tbody>
                               </table>

                           </div>
                           </div>
                           <div class="col-lg-6 col-xs-12">



                               <table class="table is-fullwidth is-bordered">

                                 <tbody>
                                     <tr>
                                         <td>

                                         </td>
                                     </tr>

                                 </tbody>
                               </table>

                             </div>

                   </div>


                   </div>

               </section>  -->

                        <br><br>




                        <!--Clients Section-->
                        <section class="clients-section">
                            <div class="auto-container">
                                <div class="sponsors-outer">
                                    <!--Sponsors Carousel-->
                                    <ul class="sponsors-carousel owl-carousel owl-theme">
                                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="home/1000logos.net/wp-content/uploads/2018/04/Emblem-Bitcoin.jpg" alt=""></a></figure></li>
                                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="home/orionx.net/wp-content/uploads/2018/04/Ethereum-logo-black.jpg" alt=""></a></figure></li>
                                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="home/www.lux-review.com/wp-content/uploads/2018/11/Tron-Logo.html" alt=""></a></figure></li>

                                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="home/avalongroupinvestment.com/assets/img/cbs%20news.jpg" alt=""></a></figure></li>
                                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="home/avalongroupinvestment.com/assets/img/forbes.jpg" alt=""></a></figure></li>
                                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="home/avalongroupinvestment.com/assets/img/wall%20street%20journal.jpg" alt=""></a></figure></li>
                                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="home/avalongroupinvestment.com/assets/img/bloomberg.jpg" alt=""></a></figure></li>
                                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="home/avalongroupinvestment.com/assets/img/financial%20planning.jpg" alt=""></a></figure></li>
                                        <li class="slide-item"><figure class="image-box"><a href="#"><img src="home/avalongroupinvestment.com/assets/img/cnbc.jpg" alt=""></a></figure></li>

                                    </ul>
                                </div>
                            </div>  </div>
                </div>
        </div>


<?php echo $_smarty_tpl->getSubTemplate ("auth_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>