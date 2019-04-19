<nav class="navbar navbar-transparent navbar-transparent navbar-transparent-home">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span> </button>
                    <a class="logo" href="home"> 
                        <img style="width:230px;" src="img/logo_pequena.png" class="attachment-full size-full" alt="" />
                    </a>
                </div>
                <div class="pull-right nav-right">
                    <div id="top-search" class="top-search">
                        <a href="#" id="top-search-ico" class="fa fa-search" aria-hidden="true"></a>
                        <input placeholder="Search" value="" type="text">
                    </div>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <div class="toggle-wrap">
                        <button type="button" class="navbar-toggle collapsed"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar top-bar"></span> <span class="icon-bar middle-bar"></span> <span class="icon-bar bottom-bar"></span> </button>
                        <div class="clearfix"></div>
                    </div>
                    <?php $act = 'current_page_item current-menu-ancestor current-menu-parent current_page_ancestor'; ?>
                    <ul id="menu-main-menu" class="nav navbar-nav">
                        <li id="menu-item-3127" class="menu-item menu-item-type-post_type menu-item-object-page <?php echo (($url[0] == 'home') ? $act : '') ?> page_item page-item-2462 menu-item-3127">
                            <a href="home" aria-current="page"><span>Home</span></a>
                            
                        </li>
                        <li id="menu-item-3128" class="menu-item menu-item-type-post_type menu-item-object-page <?php echo (($url[0] == 'sobre-nos') ? $act : '') ?> menu-item-3128">
                            <a href="sobre-nos"><span>Sobre nós</span></a>
                        </li>
                        <li id="menu-item-619" class="menu-item menu-item-type-custom menu-item-object-custom <?php echo (($url[0] == 'produtos') ? $act : '') ?> menu-item-619">
                            <a href="produtos"><span>Produtos</span></a>
                    
                        </li>
                        <li id="menu-item-60" class="menu-item menu-item-type-custom menu-item-object-custom <?php echo (($url[0] == 'galeria') ? $act : '') ?> menu-item-60">
                            <a href="galeria"><span>Galeria</span></a>
                            
                        </li>
                        <li id="menu-item-46" class="menu-item menu-item-type-post_type menu-item-object-page <?php echo (($url[0] == 'contatos') ? $act : '') ?> menu-item-46">
                            <a href="contatos"><span>Contatos</span></a>
                        </li>
                    
                    </ul>
                    <div class="nav-mob">
                        <ul class="nav navbar-nav">
                            <!-- <li>
                                <a href="#" class="shop_table cart-mob" title=""> <span class="cart-contents header-cart-count count">0</span> <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="name">Cart</span> </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </nav>