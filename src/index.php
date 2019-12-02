<?php

require_once('server/db.php');
error_reporting(0);

if (!empty($_POST)) {
    if(!empty($_POST['name'] && !empty($_POST['email']) && !empty($_POST['pass']))) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $pass = htmlspecialchars(md5(md5($_POST['pass'])));
        $guestdata = "INSERT INTO guestbook (name, email, pass) VALUES ('$name', '$email', '$pass')";
        mysqli_query($connection, $guestdata);
    }elseif(!empty($_POST['name'] && !empty($_POST['email']) && !empty($_POST['subject']))) {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $subject = htmlspecialchars($_POST['subject']);
        $mess = htmlspecialchars($_POST['message']);
        $guestdata = "INSERT INTO guestbook (name, email, pass, subject, mess) VALUES ('$name', '$email','', '$subject', '$mess')";
        mysqli_query($connection, $guestdata);
    }
    else {
        echo "Вы ввели данные неккоректно!";
    }
    header("Location: " . $_SERVER['PHP_SELF']);
    die();
}
/*
 * TODO-LIST:
 * ---1. Оптимизировать создание переменных: $name, $email, $pass
 * ---2. Написать else
 * ---3. Сделать проверку на экранирование и ввод SQL иньекций(и XSS)
 * ---4. Убрать повторную отправку формы
 * ---5. Сделать двойное MD5 шифрование пароля
 * ---6. Сделать отправку Сообщения(Message) в нижней форме
 * ---7. Создать константу с ассоциативным массивом для подключения к БД
 * 8. Доработать код и запушить
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AXIT</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700|Raleway:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <img src="icons/header/main_logo.png" alt="main_logo" class="logo">
        <nav>
            <div class="main">
                <a href="*" class="main_menu">Features</a>
                <a href="*" class="main_menu">About</a>
                <a href="*" class="main_menu">Pricing</a>
                <a href="*" class="main_menu">Reviews</a>
                <a href="*" class="main_menu">Contact</a>
            </div>
        </nav>
    </header>
    <section class="main_section">
            <img src="icons/header/logo_section.png" alt="main_logo" class="logo_section">
            <div class="main_section_aside">
                <div class="main_section_aside_header">
                    <span class="main_section_aside_header_title">Try Your
                    <span class="main_section_aside_header_title_yellow"> FREE </span>Trial Today</span>
                </div>
                <form action="index.php" method="POST">
                    <input type="text" name="name" class="main_section_aside_form_name" placeholder="Name">
                    <input type="email" name="email" class="main_section_aside_form_email" placeholder="Email">
                    <input type="password" name="pass" class="main_section_aside_form_pass" placeholder="Password">
                    <button type="submit" name="button_start" class="main_section_aside_footer">
                        <span class="main_section_aside_footer_completion">Get Started</span>
                    </button>
                </form>
            </div>
            <h1 class="main_section_h1">MODERN AXURE TEMPLATE<br>FOR BEAUTIFUL PROTOTYPES</h1>
            <div class="main_section_devider"></div>
            <p class="main_section_paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean<br>euismod bibendum laoreet. Proin gravida dolor sit amet lacus<br>accumsan et viverra justo commodo.</p>
            <button class="main_section_download" type="submit" name="button_main">Download</button>
    </section>
    <section class="social_media">
        <a href="#" class="social_media_link"><img src="icons/header/social_media_icons.png" alt="media" class="social_media_link_btn"></a>
        <h2 class="social_media_text">Social Media</h2>
        <p class="social_media_descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
        Aenean euismod bibendum laoreet.</p>
    </section>
    <section class="features_panel bg_light_gray">
        <div class="features_panel_btn">
            <button class="features_panel_btn_click">TAB 1</button>
            <button class="features_panel_btn_click">TAB 2</button>
            <button class="features_panel_btn_click">TAB 3</button>
        </div>
        <div class="features_panel_main">
            <div class="features_panel_text">Tabs with soft transitioning effect.</div>
            <div class="features_panel_descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod <br>
                    bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra <br>
                    justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque <br>
                    penatibus et magnis dis parturient montes. <br>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod <br>
                    bibendum laoreet.
            </div>
            <button class="features_panel_btn_main" type="submit" name="Main_Download">Download</button>
        </div>
        <img src="icons/section1/city.png" alt="features_panel" class="features_panel_city"> 
    </section>
    <section class="first_section bg_light">
        <div class="first_section_photo"></div>
        <div class="first_section_aside">
            <div class="first_section_aside_name">Sub list section</div>
            <div class="first_section_aside_line"></div>
            <div class="first_section_aside_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean <br> 
                euismod bibendum laoreet. Proin gravida dolor sit amet lacus <br> accumsan et viverra justo commodo.
            </div>
            <div class="first_section_aside_block">

                <div class="first_section_aside_block_upload">
                    <div class="first_section_aside_block_upload_round">
                        <img src="icons/section2/download.png" alt="upload_icon">
                    </div>
                    <div class="first_section_aside_block_upload_name">
                        <div class="first_section_aside_block_upload_name_text">Title</div>
                        <div class="first_section_aside_block_upload_name_descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                            Aenean euismod bibendum laoreet.</div>
                    </div>
                    </div>
                    
                </div>

                <div class="first_section_aside_block_unload">
                    <div class="first_section_aside_block_unload_round">
                        <img src="icons/section2/download_down.png" alt="unload_icon">
                    </div>
                    <div class="first_section_aside_block_unload_name">
                        <div class="first_section_aside_block_unload_name_text">Title</div>
                        <div class="first_section_aside_block_unload_name_descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                            Aenean euismod bibendum laoreet. Proin gravida dolor <br>
                            sit amet lacus accumsan et viverra justo commodo.</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="second_section bg_light_gray">
        <div class="second_section_article">
            <div class="second_section_article_name">Standard Picture Section</div>
            <div class="second_section_article_line"></div>
            <div class="second_section_article_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean <br>
                euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan <br>
                et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis <br>
                natoque penatibus et magnis dis parturient montes. <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod <br>
                bibendum laoreet.</div>
        </div>
        <div class="second_section_photo"></div>
    </section>
    <section class="procces_panel bg_light">
        <div class="procces_panel_name header_name">WHY THIS IS AWESOME</div>
        <div class="procces_panel_line lines"></div>
        <div class="procces_panel_text descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        <div class="procces_panel_advantages">
            <div class="procces_panel_advantages_elements">
                <div class="procces_panel_advantages_elements_round">
                    <img src="icons/section4/lamp.png" alt="lamp_icon">
                </div>
                <div class="procces_panel_advantages_elements_title">Thoughtful Design</div>
                <div class="procces_panel_advantages_elements_descr">Lorem ipsum dolor sit amet, consectetur adipiscing <br>
                    elit. Aenean euismod bibendum laoreet. Proin gravida <br>
                    dolor sit amet lacus accumsan et viverra.</div>
            </div>
            <div class="procces_panel_advantages_elements">
                <div class="procces_panel_advantages_elements_round">
                    <img src="icons/section4/keyboard.png" alt="keyboard_icon">
                </div>
                <div class="procces_panel_advantages_elements_title">Well Crafted</div>
                <div class="procces_panel_advantages_elements_descr">Lorem ipsum dolor sit amet, consectetur adipiscing <br>
                    elit. Aenean euismod bibendum laoreet. Proin gravida <br>
                    dolor sit amet lacus accumsan et viverra.</div>
            </div>
            <div class="procces_panel_advantages_elements">
                <div class="procces_panel_advantages_elements_round">
                    <img src="icons/section4/blitz.png" alt="blitz_icon">
                </div>
                <div class="procces_panel_advantages_elements_title">Easy to Customize</div>
                <div class="procces_panel_advantages_elements_descr">Lorem ipsum dolor sit amet, consectetur adipiscing <br>
                    elit. Aenean euismod bibendum laoreet. Proin gravida <br>
                    dolor sit amet lacus accumsan et viverra.</div>
            </div>
        </div>
    </section>
    <section class="pricing_options bg_light_gray">
        <div class="pricing_options_name header_name">PRICING OPTIONS</div>
        <div class="pricing_options_line lines"></div>
        <div class="pricing_options_text descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        <div class="pricing_options_block">
            <div class="pricing_options_block_elements">
                <div class="pricing_options_block_elements_option">Basic</div>
                <div class="pricing_options_block_elements_price"><span>$</span>0</div>
                <div class="pricing_options_block_elements_period"><span>Free for Life</span></div>
                <div class="pricing_options_block_elements_line"></div>
                <div class="pricing_options_block_elements_descr">1 gb of space</div>
                <div class="pricing_options_block_elements_descr">10 gb of bandwidth</div>
                <div class="pricing_options_block_elements_descr">3 websites</div>
                <div class="pricing_options_block_elements_descr">Basic Customization</div>
                <div class="pricing_options_block_elements_descr">wordpress integration</div>
                <div class="pricing_options_block_elements_descr">email support</div>
            </div>
            <div class="pricing_options_block_elements">
                <div class="pricing_options_block_elements_option">Professional</div>
                <div class="pricing_options_block_elements_price"><span>$</span>19</div>
                <div class="pricing_options_block_elements_period"><span>Monthly Payment</span></div>
                <div class="pricing_options_block_elements_line"><span>OUR MOST POPULAR</span></div>
                <div class="pricing_options_block_elements_descr">5 gb of space</div>
                <div class="pricing_options_block_elements_descr">50 gb of bandwidth</div>
                <div class="pricing_options_block_elements_descr">12 websites</div>
                <div class="pricing_options_block_elements_descr">Advanced Customization</div>
                <div class="pricing_options_block_elements_descr">wordpress integration</div>
                <div class="pricing_options_block_elements_descr">email support</div>
            </div>
            <div class="pricing_options_block_elements">
                <div class="pricing_options_block_elements_option">Enterprise</div>
                <div class="pricing_options_block_elements_price"><span>$</span>70</div>
                <div class="pricing_options_block_elements_period"><span>Monthly Payment</span></div>
                <div class="pricing_options_block_elements_line"></div>
                <div class="pricing_options_block_elements_descr">Unlimited space</div>
                <div class="pricing_options_block_elements_descr">unlimited bandwidth</div>
                <div class="pricing_options_block_elements_descr">100 websites</div>
                <div class="pricing_options_block_elements_descr">Advanced Customization</div>
                <div class="pricing_options_block_elements_descr">wordpress integration</div>
                <div class="pricing_options_block_elements_descr">24/7 customer support</div>
            </div>
        </div>
    </section>
    <section class="reviews bg_light">
        <div class="reviews_name header_name">WHAT OUR CUSTOMERS ARE SAYING</div>
        <div class="reviews_line lines"></div>
        <div class="reviews_text descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        <div class="reviews_block">
            <div class="reviews_block_elements">
                <div class="reviews_block_elements_comment">
                    <div class="reviews_block_elements_comment_text">Lorem ipsum dolor sit amet,<br>
                        consectetur adipisicing elit. Doloribus<br>
                        accusamus expedita repellat similique<br>
                        odio aspernatur ex, architecto eaque<br>
                        quo suscipit.
                    </div>
                </div>
                <div class="reviews_block_elements_photo"></div>
                <div class="reviews_block_elements_name">Jeremy H.</div>
                <div class="reviews_block_elements_descr">Manager</div>
            </div>

            <div class="reviews_block_elements">
                <div class="reviews_block_elements_comment">
                     <div class="reviews_block_elements_comment_text">Lorem ipsum dolor sit amet,<br>
                        consectetur adipisicing elit. Doloribus<br>
                        accusamus expedita repellat similique<br>
                        odio aspernatur ex, architecto eaque<br>
                        quo suscipit.
                    </div>
                </div>
                <div class="reviews_block_elements_photo"></div>
                <div class="reviews_block_elements_name">John S.</div>
                <div class="reviews_block_elements_descr">Freelancer</div>
            </div>

            <div class="reviews_block_elements">
                <div class="reviews_block_elements_comment">
                    <div class="reviews_block_elements_comment_text">Lorem ipsum dolor sit amet, <br>
                        consectetur adipisicing elit. Doloribus<br>
                        accusamus expedita repellat similique<br>
                        odio aspernatur ex, architecto eaque<br>
                        quo suscipit.
                    </div>
                </div>
                <div class="reviews_block_elements_photo"></div>
                <div class="reviews_block_elements_name">Susan W.</div>
                <div class="reviews_block_elements_descr">Photographer</div>
            </div>
        </div>
    </section>
    <section class="download bg_gray">
        <div class="download_name header_name">STYLISH AXURE DESIGN</div>
        <div class="download_line"></div>
        <div class="download_text">Use the sections you need, remove the ones you don't.  
        Create gorgeous prototypes faster than ever!</div>
        <button class="download_button" type="submit" name="button_main">Download</button>
    </section>
    <section class="contact_us bg_light">
        <div class="contact_us_name header_name">CONTACT US</div>
        <div class="contact_us_line lines"></div>
        <div class="contact_us_text descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
        <form action="index.php" method="POST">
            <div class="contact_us_block">
                <div class="contact_us_block_elements">
                    <input type="text" name="name" class="contact_us_block_elements_name" placeholder="Name">
                    <input type="email" name="email" class="contact_us_block_elements_email" placeholder="Email">
                    <input type="text" name="subject" class="contact_us_block_elements_subject" placeholder="Subject">
                </div>
                <div class="contact_us_block_message">
                    <textarea class="contact_us_block_message_text" name="message" cols = "x" rows = "x"placeholder="Message"></textarea>
                </div>
            </div>
            <button class="contact_us_send" type="submit">Send Message</button>
        </form>
    </section>
    <footer class="footer">
        <img src="icons/footer/social.png" alt="social" class="footer_social">
        <div class="footer_copyright">
        <?php
        $date = getdate();
        echo '© 2015 - ' . $date["year"] . 'Axure Themes';
        ?>
        </div>
    </footer>
</body>
</html>