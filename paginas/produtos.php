
<?php 
    if (isset($_GET['item'])) {
        include 'single-produtos.php';
    }else{
?>
    <header class="page-header  header-h1 ">
        <div class="container">
            <h1>Produtos</h1>
            <ul class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home." href="/bacabal/site/" class="home"><span property="name">Home</span></a>
                    <meta property="position" content="1">
                    </span>
                </li>
                <li class="archive post-product-archive current-item"><span property="itemListElement" typeof="ListItem"><span property="name">Produtos</span>
                    <meta property="position" content="2">
                    </span>
                </li>
            </ul>
        </div>
    </header>
    <div class="container">
        <div class="vc_row-full-width vc_clearfix"></div>
        <section data-vc-full-width="true" data-vc-full-width-init="false" class="vc_section bg-pos-right-bottom" style="opacity: 1;">
            <div class="vc_row wpb_row vc_row-fluid">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="es-resp">
                                <div class="visible-xl" style="height: 32px;"></div>
                                <div class="hidden-xl hidden-sm hidden-md hidden-ms hidden-xs" style="height: 32px;"></div>
                                <div class="hidden-xl hidden-lg hidden-sm hidden-ms hidden-xs" style="height: 32px;"></div>
                                <div class="hidden-xl hidden-lg hidden-md hidden-ms hidden-xs " style="height: 32px;"></div>
                                <div class="visible-ms" style="height: 32px;"></div>
                                <div class="visible-xs" style="height: 16px;"></div>
                            </div>
                            <!-- <div class="heading  head-subheader align-center color-black subcolor-main transform-default bg-image   vc_custom_1514233412817" id="like_sc_header_1209681738">
                                <h6 class="subheader font-main">Nossos Produtos</h6>
                                <h3 class="header">Escolha sua água!</h3></div> -->
                            <div class="woocommerce">
                                <div class="products products-sc products-sc-simple row posts-4">
                                    <?php 
                                        for ($i=0; $i < count($produtos); $i++) { 
                                         
                                    ?>
                                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6  item filter-type- ">
                                        <article id="post-2071" class="post-2071 product type-product status-publish has-post-thumbnail product_cat-water product_tag-mineral product_tag-pack product_tag-soda product_tag-water first instock shipping-taxable purchasable product-type-variable">
                                            <div class="matchHeight item">
                                                <a href="<?php echo '?item='.$produtos[$i]['nameSlug']; ?>">
                                                    <div class="image"> 
                                                        <img width="300" height="300" src="<?php echo $produtos[$i]['img'] ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt=""  />
                                                    </div>
                                                </a>
                                                <div class="description"> <a href="<?php echo '?item='.$produtos[$i]['nameSlug']; ?>" class="header"><h5><?php echo $produtos[$i]['name'] ?></h5></a>
                                                    <div class="post_content entry-content"><?php echo $produtos[$i]['name'] ?></div>
                                                    <h6 class="price color-second">
                                                        <span class="woocommerce-Price-amount amount">
                                                            <span class="woocommerce-Price-currencySymbol">R$</span><?php echo $produtos[$i]['price'] ?> a unidade</span> 
                                                                <span class="woocommerce-Price-amount amount">
                                                                    <span class="woocommerce-Price-currencySymbol">
                                                                        
                                                    </h6>
                                                    <a rel="nofollow" href="<?php echo '?item='.$produtos[$i]['nameSlug']; ?>" data-quantity="1" data-product_id="2071" data-product_sku="" class=" button btn btn-default color-hover-black btn transform-lowercase add_to_cart_button">
                                                        <i class="fa fa-shopping-cart" aria-hidden="true">
                                                            
                                                        </i>Ver Produto
                                                    </a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <?php } ?>

                                  

                                </div>
                            </div>
                            <!-- <div class="btn-wrap align-center"><a href="" class="btn  btn-xxs btn-black-filled transform-default color-text-default color-hover-second align-center   vc_custom_1514234716572" id="like_sc_button_161397150">Todos os Produtos</a></div> -->
                            <div class="es-resp">
                                <div class="visible-xl" style="height: 95px;"></div>
                                <div class="hidden-xl hidden-sm hidden-md hidden-ms hidden-xs" style="height: 95px;"></div>
                                <div class="hidden-xl hidden-lg hidden-sm hidden-ms hidden-xs" style="height: 95px;"></div>
                                <div class="hidden-xl hidden-lg hidden-md hidden-ms hidden-xs " style="height: 95px;"></div>
                                <div class="visible-ms" style="height: 95px;"></div>
                                <div class="visible-xs" style="height: 48px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
<?php 
}
?>