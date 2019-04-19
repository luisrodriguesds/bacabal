
<?php
    if (isset($_POST['your-name']) && isset($_POST['your-email']) && isset($_POST['your-message'])) {
        
     
        $email           =  "contato@aguabacabal.com.br";
        $mensagem        = '<meta charset="utf-8"><h2>Água Bacabal - Contato</h2><br><p>De '.$_POST['your-name'].' - '.$_POST['your-email'].'<br><br>Conteúdo:<br>'.$_POST['your-message'].'</p>';
        $email_remetente = "contato@aguabacabal.com.br";
        $headers = "MINE-Version: 1.1\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
        $headers .= "From: $email_remetente\n";
        $headers .= "Return: $email_remetente\n";
        $headers .= "Replay-To: $email\n";
        
        if (mail("$email", "Água Bacabal - Contato", "$mensagem", $headers, "-f$email_remetente")) {
            echo '<script type="text/javascript">alert("Mensagem Enviada com sucesso!"); window.location=location.href;</script>';
        }
          
    }
?>

    <header class="page-header  header-h1 ">
        <div class="container">
            <h1>Contate-nos</h1>
            <ul class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home." href="/bacabal/site/" class="home"><span property="name">Home</span></a>
                    <meta property="position" content="1">
                    </span>
                </li>
                <li class="post post-page current-item"><span property="itemListElement" typeof="ListItem"><span property="name">Contate-nos</span>
                    <meta property="position" content="2">
                    </span>
                </li>
            </ul>
        </div>
    </header>
    <div class="container">
        <div class="margin-top">
            <div class="inner-page text-page">
                <div class="row">
                    <div class="col-md-12 text-page">
                        <article id="post-25" class="post-25 page type-page status-publish hentry">
                            <div class="entry-content clearfix" id="entry-div">
                                <section data-vc-full-width="true" data-vc-full-width-init="false" class="vc_section">
                                    <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-top vc_row-flex">
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="heading  transform-header-up   vc_custom_1505581880747" id="like_sc_header_780123386">
                                                        <h4 class="header">Entre em Contato!</h4></div>
                                                    <div class="wpb_text_column wpb_content_element ">
                                                        <div class="wpb_wrapper">
                                                            <!-- <p>Nam eu mi eget velit vulputate tempor gravida quis massa. In malesuada condimentum ultrices. Sed et mauris a purus fermentum elementum. Sed tristique semper enim, et gravida orci iaculis et. Nulla facilisi.</p> -->
                                                        </div>
                                                    </div>
                                                    <div class="align-default ">
                                                        <ul class="social-icons-list   vc_custom_1515710003627 icon-weight-bold" id="like_sc_header_498280678">
                                                            <li class=""><span class="fa fa-whatsapp"></span><span class="head">(99)98183-8500</span></li>
                                                            <li class=""><span class="fa fa-envelope"></span><span class="head">contato@aguabacabal.com.br</span></li>
                                                            <li class=""><span class="fa fa-map-marker"></span><span class="head">1468, R. Magalhães de Almeida, 1200, Bacabal - MA, 65700-000</span></li>
                                                        </ul>
                                                    </div>
                                                    <div class="heading  color-black transform-header-up   vc_custom_1502236442786" id="like_sc_header_1976378072">
                                                        <h6 class="header">Social:</h6></div>
                                                    <div class="align-default ">
                                                        <ul class="social-big icon-weight-bold" id="like_sc_header_764217774">
                                                            <li>
                                                                <a target="_blank" href="https://www.google.com/search?q=%C3%81gua%20Bacabal&oq=%C3%81gua+Bacabal&aqs=chrome..69i57j69i60l3j0l2.6710j0j7&sourceid=chrome&ie=UTF-8&npsic=0&rflfq=1&rlha=0&rllag=-4225821,-44787581,1377&tbm=lcl&rldimm=14763890030589065684&ved=2ahUKEwish9H1q9zhAhXTD7kGHYXsAS0QvS4wBnoECAkQKg&rldoc=1&tbs=lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2#rlfi=hd:;si:14763890030589065684;mv:!1m2!1d-4.2161428!2d-44.7776005!2m2!1d-4.2354994999999995!2d-44.797562899999996;tbs:lrf:!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2" class="fa fa-google-plus"></a>
                                                            </li>
                                                            <li>
                                                                <a target="_blank" href="https://www.facebook.com/agua.bacabal.75" class="fa fa-facebook"></a>
                                                            </li>
                                                            <li>
                                                                <a target="_blank" href="https://www.instagram.com/p/Bt8Ni6sAmCu/?utm_source=ig_share_sheet&igshid=uhyovzhysrlp" class="fa fa-instagram"></a>
                                                            </li>
                                                            <li>
                                                                <a target="_blank" href="https://www.youtube.com/watch?v=l9UcirrUpR0&t=21s" class="fa fa-youtube"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="es-resp">
                                                        <div class="visible-xl" style="height: 0px;"></div>
                                                        <div class="hidden-xl hidden-sm hidden-md hidden-ms hidden-xs" style="height: 0px;"></div>
                                                        <div class="hidden-xl hidden-lg hidden-sm hidden-ms hidden-xs" style="height: 0px;"></div>
                                                        <div class="hidden-xl hidden-lg hidden-md hidden-ms hidden-xs " style="height: 32px;"></div>
                                                        <div class="visible-ms" style="height: 32px;"></div>
                                                        <div class="visible-xs" style="height: 32px;"></div>
                                                    </div>
                                                    <div class="ltx-contact-form-7 transform-default form-default form-bg-default form-style-default form-btn-default form-btn-default form-padding-none    vc_custom_1505582392596" id="like_sc_contact_form_7_1314817811">
                                                        <div class="screen-reader-response"></div>
                                                            <form method="post">
                                                                
                                                                <p>
                                                                    <label> Nome
                                                                        <br /> <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label>
                                                                </p>
                                                                <p>
                                                                    <label> Email
                                                                        <br /> <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </label>
                                                                </p>
                                                                <p>
                                                                    <label> Mensagem
                                                                        <br /> <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label>
                                                                </p>
                                                                <p>
                                                                    <input type="submit" value="Enviar"  />
                                                                </p>
                                                            </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="vc_empty_space" style="height: 100px"><span class="vc_empty_space_inner"></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="vc_row-full-width vc_clearfix"></div>
                               
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
