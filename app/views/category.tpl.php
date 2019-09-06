<section class="hero">
    <div class="container">
      <!-- Breadcrumbs -->
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Détente</li>
      </ol>
      <!-- Hero Content-->
      <div class="hero-content pb-5 text-center">
        <h1 class="hero-heading">Détente</h1>
        <div class="row">
          <div class="col-xl-8 offset-xl-2">
            <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
              incididunt.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="products-grid">
    <div class="container-fluid">

      <header class="product-grid-header d-flex align-items-center justify-content-between">
        <div class="mr-3 mb-3">
          Affichage <strong>1-12 </strong>de <strong>158 </strong>résultats
        </div>
        <div class="mr-3 mb-3"><span class="mr-2">Voir</span><a href="#" class="product-grid-header-show active">12 </a><a
            href="#" class="product-grid-header-show ">24 </a><a href="#" class="product-grid-header-show ">Tout </a>
        </div>
        <div class="mb-3 d-flex align-items-center"><span class="d-inline-block mr-1">Trier par</span>
          <select class="custom-select w-auto border-0">
            <option value="orderby_0">Defaut</option>
            <option value="orderby_1">Popularité</option>
            <option value="orderby_2">Vote</option>
            <option value="orderby_3">Nouveauté</option>
          </select>
        </div>
      </header>
      <div class="row">
        <!-- product-->
        <div class="product col-xl-3 col-lg-4 col-sm-6">
          <div class="product-image">
            <a href="detail.html" class="product-hover-overlay-link">
              <img src="<?= $absoluteURL?>/assets/images/produits/1-kiss_tn.jpg" alt="product" class="img-fluid">
            </a>
          </div>
          <div class="product-action-buttons">
            <a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a>
            <a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">Voir</span></a>
          </div>
          <div class="py-2">
            <p class="text-muted text-sm mb-1">Chausson</p>
            <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Kissing</a></h3><span class="text-muted">40€</span>
          </div>
        </div>
        <!-- /product-->
        <!-- product-->
        <div class="product col-xl-3 col-lg-4 col-sm-6">
            <div class="product-image">
              <a href="detail.html" class="product-hover-overlay-link">
                <img src="<?= $absoluteURL?>/assets/images/produits/2-rose_tn.jpg" alt="product" class="img-fluid">
              </a>
            </div>
            <div class="product-action-buttons">
              <a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a>
              <a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">Voir</span></a>
            </div>
            <div class="py-2">
              <p class="text-muted text-sm mb-1">Tong</p>
              <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Pink lady</a></h3><span class="text-muted">20€</span>
            </div>
          </div>
          <!-- /product-->
          <!-- product-->
        <div class="product col-xl-3 col-lg-4 col-sm-6">
            <div class="product-image">
              <a href="detail.html" class="product-hover-overlay-link">
                <img src="<?= $absoluteURL?>/assets/images/produits/3-panda_tn.jpg" alt="product" class="img-fluid">
              </a>
            </div>
            <div class="product-action-buttons">
              <a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a>
              <a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">Voir</span></a>
            </div>
            <div class="py-2">
              <p class="text-muted text-sm mb-1">Chausson</p>
              <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Panda</a></h3><span class="text-muted">50€</span>
            </div>
          </div>
          <!-- /product-->
          <!-- product-->
        <div class="product col-xl-3 col-lg-4 col-sm-6">
            <div class="product-image">
              <a href="detail.html" class="product-hover-overlay-link">
                <img src="<?= $absoluteURL?>/assets/images/produits/20-deadpool.jpg" alt="product" class="img-fluid">
              </a>
            </div>
            <div class="product-action-buttons">
              <a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a>
              <a href="detail.html" class="btn btn-dark btn-buy"><i class="fa-search fa"></i><span class="btn-buy-label ml-2">Voir</span></a>
            </div>
            <div class="py-2">
              <p class="text-muted text-sm mb-1">Pantoufle</p>
              <h3 class="h6 text-uppercase mb-1"><a href="detail.html" class="text-dark">Deadpool</a></h3><span class="text-muted">15€</span>
            </div>
          </div>
          <!-- /product-->

      </div>
      
    </div>
  </section>

  <footer class="main-footer">
    <!-- Services block-->
    <div id="footer-services" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 service-column">
            <i class="fa fa-truck"></i>
            <div class="service-text">
              <h6 class="text-uppercase">Livraison et retour gratuit</h6>
              <p class="text-muted font-weight-light text-sm mb-0">Livraison gratuite à partir de 100€</p>
            </div>
          </div>
          <div class="col-lg-4 service-column">
            <i class="fa fa-money"></i>
            <div class="service-text">
              <h6 class="text-uppercase">Satisfait ou remboursé</h6>
              <p class="text-muted font-weight-light text-sm mb-0">30 jours pour renvoyer</p>
            </div>
          </div>
          <div class="col-lg-4 service-column">
            <i class="fa fa-phone"></i>
            <div class="service-text">
              <h6 class="text-uppercase">01 02 03 04 05</h6>
              <p class="text-muted font-weight-light text-sm mb-0">Joignable 24/7</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main block - menus, subscribe form-->
    <div id="footer-menu" class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="font-weight-bold text-uppercase text-lg text-dark mb-3">oShop</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#" target="_blank" title="twitter" class="text-muted text-hover-primary">
                  <i class="fa fa-twitter">
                  </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" target="_blank" title="facebook" class="text-muted text-hover-primary">
                  <i class="fa fa-facebook-official">
                  </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" target="_blank" title="instagram" class="text-muted text-hover-primary">
                  <i class="fa fa-instagram">
                  </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" target="_blank" title="pinterest" class="text-muted text-hover-primary">
                  <i class="fa fa-pinterest">
                  </i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#" target="_blank" title="vimeo" class="text-muted text-hover-primary">
                  <i class="fa fa-vimeo">
                  </i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
            <h6 class="text-uppercase text-dark mb-3">Produits</h6>
            <ul class="list-unstyled">
              <li> <a href="#" class="text-muted">Chaussures de ville</a></li>
              <li> <a href="#" class="text-muted">Chaussures de sport</a></li>
              <li> <a href="#" class="text-muted">Pantoufles</a></li>
              <li> <a href="#" class="text-muted">Tongs</a></li>
              <li> <a href="#" class="text-muted">Chaussons</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 mb-5 mb-lg-0">
            <h6 class="text-uppercase text-dark mb-3">Marques</h6>
            <ul class="list-unstyled">
              <li> <a href="#" class="text-muted">oCirage</a></li>
              <li> <a href="#" class="text-muted">Shossures</a></li>
              <li> <a href="#" class="text-muted">BOOTstrap</a></li>
              <li> <a href="#" class="text-muted">Talonette</a></li>
              <li> <a href="#" class="text-muted">oPompes</a></li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h6 class="text-uppercase text-dark mb-3">Recevez nos offres promotionnelles</h6>
            <p class="mb-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. At itaque temporibus.</p>
            <form action="#" id="newsletter-form">
              <div class="input-group mb-3">
                <input type="email" placeholder="Votre adresse email" class="form-control bg-transparent border-secondary border-right-0">
                <div class="input-group-append">
                  <button type="submit" class="btn btn-outline-secondary border-left-0"><i class="fa fa-paper-plane"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>