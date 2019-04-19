

    <header class="page-header  header-h1 ">
        <div class="container">
            <h1>Galeria</h1>
            <ul class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Home." href="/bacabal/site/" class="home"><span property="name">Home</span></a>
                    <meta property="position" content="1">
                    </span>
                </li>
                <li class="post post-page current-item"><span property="itemListElement" typeof="ListItem"><span property="name">Galeria</span>
                    <meta property="position" content="2">
                    </span>
                </li>
            </ul>
        </div>
    </header>
        <div class="container">
        <div class=" margin-default">
            <div class="gallery-page gallery-inner">
                <div class="container">
                    <div class="row">
                        <?php 
                            for ($i=0; $i <= 12; $i++) { 
                             
                        ?>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-ms-6">
                            <div class="item">
                                <a href="img/galeria/g_<?php echo ($i+1) ?>.jpg" class="swipebox photo" data-fancybox="images" rel="images" class="images"> 
                                    <img width="755" style="height: 250px;" height="500" src="img/galeria/g_<?php echo ($i+1) ?>.jpg" class="attachment-aquaterias-gallery size-aquaterias-gallery" alt="" /><span class="fa fa-search"></span> 
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

  