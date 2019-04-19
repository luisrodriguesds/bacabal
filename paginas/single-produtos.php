<?php 
    $name = $_GET['item'];
    $prod = array();
    for ($i=0; $i < count($produtos); $i++) { 
        if ($produtos[$i]['nameSlug'] == $name) {
            $prod = $produtos[$i];
        }
    }
    if (empty($prod)) {
        echo '<h1>Erro 404 - Page not found</h1>';
    }else{


?>

<header class="page-header  header-h1 ">
    <div class="container">
        <h1>Produtos / <?php echo $prod['name'] ?> </h1>
        <ul class="breadcrumbs" typeof="BreadcrumbList">
            <li class="home"><span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Go to Home." href="home" class="home">
                    <span property="name">Home</span>
                </a>
                <meta property="position" content="1">
                </span>
            </li>
            <li class="home"><span property="itemListElement" typeof="ListItem">
                <a property="item" typeof="WebPage" title="Go to Home." href="produtos" class="home">
                    <span property="name">Produtos</span>
                </a>
                <meta property="position" content="2">
                </span>
            </li>
            <li class="archive post-product-archive current-item"><span property="itemListElement" typeof="ListItem"><span property="name"><?php echo $prod['name'] ?></span>
                <meta property="position" content="2">
                </span>
            </li>
        </ul>
    </div>
</header>
<div class="container">

    <div class="inner-page margin-default">
        <div class="row">
            <div class="col-md-12 text-page">
                <div class="woocommerce-notices-wrapper"></div>
                <div id="product-2163" class="post-2163 product type-product status-publish has-post-thumbnail product_cat-water product_tag-soda product_tag-water first instock shipping-taxable purchasable product-type-simple">
                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1; transition: opacity .25s ease-in-out;">
                        <figure class="woocommerce-product-gallery__wrapper">
                            <div data-thumb="#" class="woocommerce-product-gallery__image">
                                <a href="#">
                                    <img width="600" height="600" style="margin: 0 auto;" src="<?php echo $prod['img'] ?>" class="wp-post-image" alt="" title="6" data-caption="" />
                                </a>
                            </div>
                        </figure>
                    </div>
                    <div class="summary entry-summary">
                        <h1 class="product_title entry-title"><?php echo $prod['name'] ?></h1>
                        <p class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span><?php echo $prod['price'] ?></span>
                        </p>
                        <div class="woocommerce-product-details__short-description">
                            <p><?php echo $prod['obs'] ?></p>
                        </div>
                        <div class="product_meta"> <span class="posted_in">Categoria: <a href="#" rel="tag">Água</a></span> <span class="tagged_as">Tags: <a href="#" rel="tag">soda</a>, <a href="#" rel="tag">água</a></span></div>
                    </div>
                    <div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul class="tabs wc-tabs" role="tablist">
                            <li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description"> <a href="#tab-description">Descrição</a></li>
                        </ul>
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                            <h2>Descrição</h2>
                            <p><?php echo $prod['description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php } ?>