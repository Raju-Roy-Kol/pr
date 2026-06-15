<?php
get_header();
?>
<style>
  .compound-price span{
    display:inline-block;
  }
  .compound-price strong{
    line-height: 1px;
    
  }
  .woocommerce-Price-amount.amount,.woocommerce-Price-currencySymbol {
  font-size: 28px!important ;
  line-height: 28px;
}
.sidebar-box ul li a {
  color: #000;
}
.compound-price,.compound-save,.compound-footer{
  background:#fff;
}
</style>


    <!-- Hero -->
    <section class="hero-section">
      <div class="container hero-content">
        <div class="hero-left">
          <h1>High-Purity Peptides & Research Essentials</h1>

          <p>
            Premiere Health Essentials provides premium research compounds
            manufactured with strict quality standards, transparent sourcing,
            and third-party testing to support advanced laboratory and research
            applications.
          </p>

          <a href="#" class="primary-btn"> Shop Research Compounds </a>
        </div>
      </div>
    </section>

    <!-- Research Driven -->
    <section class="research-section">
      <div class="container">
        <h2>Research-Driven. Quality-Focused.</h2>

        <p>
          Our mission is to provide researchers with premium compounds supported
          by transparency, consistency, and dependable service. We continuously
          prioritize product quality, customer experience, and responsible
          research standards in every order we fulfill.
        </p>
      </div>
    </section>

    <!-- Usage Card -->
    <section class="usage-section">
      <div class="container">
        <div class="usage-card">
          <div class="usage-icon">!</div>

          <div class="usage-content">
            <strong>PRODUCT USAGE:</strong>

            Premiere Health Essentials products are intended strictly for
            laboratory research use only and are not for human or veterinary
            use. Products are sold exclusively to qualified research
            professionals and institutions for in vitro research applications.
            These products are not drugs, foods, cosmetics, or dietary
            supplements and have not been evaluated by the FDA. By purchasing,
            the buyer agrees the products will be used solely for lawful
            research purposes.
          </div>
        </div>
      </div>
    </section>

    <!-- =====================================
     MOST POPULAR RESEARCH COMPOUNDS
===================================== -->

    <section class="popular-compounds-section">
      <div class="container">
        <div class="section-heading">
          <h2>Most Popular Research Compounds</h2>

          <p>
            Our most requested research compounds trusted by researchers and
            laboratories across the country.
          </p>
        </div>

        <div class="compound-grid">
              <?php

                    $products = wc_get_products([
                        'status' => 'publish',
                        'limit'  => 3
                    ]);

                    foreach ($products as $product) :

                    ?>

                    <article class="compound-card">

                        <div class="compound-card-header">

                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-white.png" alt="">

                        </div>

                        <div class="compound-card-body">

                            <h3><?php echo $product->get_name(); ?></h3>

                            <div class="compound-image">

                                <?php echo $product->get_image('medium'); ?>

                            </div>

                            <div class="compound-note">
                                For Research Use Only
                                <br>
                                Not for human or veterinary use
                            </div>

                        </div>

                        <div class="compound-price">

                            <span>Starting at</span>

                            <strong>
                                <?php echo $product->get_price_html(); ?>
                            </strong>

                        </div>

                        <div class="compound-save">
                            ORDER MORE, SAVE MORE
                        </div>

                        <div class="compound-footer">

                            <a href="<?php echo get_permalink($product->get_id()); ?>">
                                LEARN MORE
                            </a>

                        </div>

                    </article>

                    <?php endforeach; ?>
        </div>
      </div>
    </section>

    <!-- =====================================
     WHY RESEARCHERS CHOOSE US
===================================== -->

    <section class="why-choose-section">
      <div class="container">
        <div class="why-top">
          <div class="why-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/premier-logo.png" alt="Premier" />
          </div>

          <div class="why-content">
            <h2>Why Researchers Choose Premiere Health Essentials</h2>

            <p>
              We believe research compounds should come with complete
              transparency, consistent quality, and dependable fulfillment.
              Every product is carefully sourced and manufactured with strict
              quality control standards to help support reliable research
              outcomes.
            </p>
          </div>
        </div>

        <div class="why-features">
          <div class="feature-card">
            <div class="feature-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Quality-Standards-Icon.svg" alt="" />
            </div>

            <h3>Rigorous Quality Standards</h3>

            <p>
              Each batch undergoes testing and verification for identity and
              purity.
            </p>
          </div>

          <div class="feature-card">
            <div class="feature-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Transparent-Sourcing-Icon.svg" alt="" />
            </div>

            <h3>Transparent Sourcing</h3>

            <p>Clear manufacturing and sourcing standards you can trust.</p>
          </div>

          <div class="feature-card">
            <div class="feature-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Research-Focus-Support-Icon.svg" alt="" />
            </div>

            <h3>Research-Focused Support</h3>

            <p>
              Dedicated customer support for research product inquiries and
              order assistance.
            </p>
          </div>

          <div class="feature-card">
            <div class="feature-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Reliable-Eqipment-Icon.svg" alt="" />
            </div>

            <h3>Reliable Fulfillment</h3>

            <p>
              Fast, discreet shipping and dependable inventory availability.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- products section -->
    <section class="research-categories-section">
      <div class="container">
        <!-- Heading -->

        <div class="research-header">
          <h2>Explore Research Categories</h2>

          <p>
            Browse our curated collection of research compounds and laboratory
            essentials.
          </p>
        </div>

        <!-- Filters -->

        <div class="research-filters">
          <div class="research-filter-left">
            <span class="filter-label"> Filter By Research Categories </span>

            <div class="filter-buttons">
             <button class="filter-btn active" data-target="all">
        All
    </button>

                  <?php

                  $category_order = [
                      'metabolic-pathways' => 'Metabolic Pathways',
                      'gh-signaling'       => 'GH Signaling',
                      'tissue-repair'      => 'Tissue Repair',
                      'cellular-function'  => 'Cellular Function',
                      'multi-pathway'      => 'Multi-Pathway',
                      'reconstruction'     => 'Reconstruction'
                  ];

                  foreach ($category_order as $slug => $title) :

                  ?>

                      <button
                          class="filter-btn"
                          data-target="<?php echo esc_attr($slug); ?>"
                      >
                          <?php echo esc_html($title); ?>
                      </button>

                  <?php endforeach; ?>
            </div>
          </div>

          <div class="research-filter-right">
            <span class="filter-label"> Product Filters </span>

            <select class="product-filter">
              <option>Select Filter</option>
            </select>
          </div>
        </div>

        <div class="research-layout">
          <!-- Sidebar -->

          <aside class="research-sidebar">
            <div class="sidebar-box">
              <h3>CATEGORIES</h3>

              <ul>

                  <?php

                  $category_order = [
                      'metabolic-pathways' => 'Metabolic Pathways',
                      'gh-signaling'       => 'GH Signaling',
                      'tissue-repair'      => 'Tissue Repair',
                      'cellular-function'  => 'Cellular Function',
                      'multi-pathway'      => 'Multi-Pathway',
                      'reconstruction'     => 'Reconstruction'
                  ];

                  foreach ($category_order as $slug => $title) :

                      $category = get_term_by(
                          'slug',
                          $slug,
                          'product_cat'
                      );

                      if (!$category) {
                          continue;
                      }

                  ?>

                      <li class="category-title">
                          <a href="#<?php echo esc_attr($slug); ?>">
                              <?php echo esc_html($title); ?>
                          </a>
                      </li>

                      <?php

                      $products = wc_get_products([
                          'status'   => 'publish',
                          'limit'    => -1,
                          'category' => [$slug]
                      ]);

                      foreach ($products as $product) :

                      ?>

                          <li>
                              <a href="<?php echo get_permalink($product->get_id()); ?>">
                                  <?php echo esc_html($product->get_name()); ?>
                              </a>
                          </li>

                      <?php endforeach; ?>

                  <?php endforeach; ?>

              </ul>
            </div>
          </aside>

          <!-- Content -->

          <div class="research-content">
           

            <?php

            render_product_slider(
                'metabolic-pathways',
                'Metabolic Pathways'
            );

            render_product_slider(
                'gh-signaling',
                'GH Signaling'
            );

            render_product_slider(
                'tissue-repair',
                'Tissue Repair'
            );

            render_product_slider(
                'cellular-function',
                'Cellular Function'
            );
             render_product_slider(
                'multi-pathway',
                'Multi-Pathway'
            );
             render_product_slider(
                'reconstruction',
                'Reconstruction'
            );

          ?>
          </div>
        </div>
      </div>
    </section>

    <!-- =====================================================
     RESEARCH CTA SECTION
===================================================== -->

    <section class="research-cta">
      <div class="container">
        <div class="research-cta-grid">
          <div class="research-save">
            <h2>
              Research More.
              <br />
              Save More.
            </h2>

            <p>
              Unlock volume pricing with our tiered discount structure designed
              for ongoing research projects and larger laboratory orders.
            </p>

            <ul>
              <li>Buy 2+ Items → Save 5%</li>
              <li>Buy 5+ Items → Save 10%</li>
              <li>Buy 10+ Items → Save 15%</li>
            </ul>
          </div>

          <div class="research-dedicated">
            <h2>Built For Dedicated Researchers</h2>

            <p>
              Whether you're conducting independent studies or managing
              larger-scale research operations, Premier Health Essentials
              provides reliable access to premium research compounds with
              dependable support and fulfillment.
            </p>

            <a href="#" class="primary-btn mt-40"> Shop Research Compounds </a>
          </div>
        </div>
      </div>
    </section>

    <!-- =====================================================
     TRANSPARENCY SECTION
===================================================== -->

    <section class="transparency-section">
      <div class="container transparency-section-bg">
        <div class="transparency-wrapper">
          <div class="transparency-content">
            <h2>Transparency & Quality You Can Verify</h2>

            <p>
              At Premiere Health Essentials, we are committed to maintaining
              strict quality standards through transparent testing and
              manufacturing practices.
            </p>

            <p>
              Certificates of analysis and laboratory verification documents are
              available to support confidence in product quality and
              consistency.
            </p>

            <a href="#" class="primary-btn"> Explore Certifications </a>
          </div>

          <div class="transparency-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/xxl-logo.png" alt="" />
          </div>
        </div>

        <!-- Newsletter -->

        <div class="newsletter-card">
          <h2>Join The Premiere Health Essentials Community</h2>

          <p>
            Subscribe for product updates, new releases, promotions, and
            research news.
          </p>

          <form class="newsletter-form">
            <input type="email" placeholder="Enter Email Address*" />

            <button type="submit">SUBMIT</button>
          </form>
        </div>
      </div>
    </section>

    <!-- =====================================================
     FOOTER
===================================================== -->

    <footer class="site-footer">
      <div class="container">
        <div class="footer-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt="" />
        </div>

        <div class="footer-grid">
          <!-- Navigation -->

          <div class="footer-column footer-accordion">
            <button class="footer-title">
              Main Navigation

              <span
                ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-down.png" class="arrow-down-img"
              /></span>
            </button>

            <ul class="footer-links">
              <li><a href="#">Shop</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Support</a></li>
              <li><a href="#">Peptide Info</a></li>
              <li><a href="#">COA Library</a></li>
            </ul>
          </div>

          <!-- Support -->

          <div class="footer-column footer-accordion">
            <button class="footer-title">
              Support

              <span
                ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-down.png" class="arrow-down-img"
              /></span>
            </button>

            <ul class="footer-links">
              <li><a href="#">My Account</a></li>
              <li><a href="#">Track My Order</a></li>
              <li><a href="#">FAQs</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>

          <!-- Legal -->

          <div class="footer-column footer-accordion">
            <button class="footer-title">
              Legal

              <span
                ><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-down.png" class="arrow-down-img"
              /></span>
            </button>

            <ul class="footer-links">
              <li><a href="#">Privacy Policy</a></li>
              <li><a href="#">Terms & Conditions</a></li>
              <li><a href="#">Disclaimer</a></li>
              <li><a href="#">Waiver Agreement</a></li>
            </ul>
          </div>

          <!-- Email -->

          <div class="footer-column">
            <h3>Email</h3>

            <p>info@premierehealthessentials.com</p>
          </div>

          <!-- Shipping -->

          <div class="footer-column">
            <h3>Shipping Days</h3>

            <p>Mon-Fri / Except Holidays</p>
          </div>
        </div>

        <div class="footer-divider"></div>

        <div class="footer-disclaimer">
          <p>
            All products sold by Premiere Health Essentials are intended for
            laboratory research purposes only. Products are not intended for
            human consumption, medical use, diagnosis, treatment, or prevention
            of disease.
          </p>
        </div>

        <div class="copyright">
          © 2026 Premiere Health Essentials. All Rights Reserved.
        </div>
      </div>
    </footer>

<?php
get_footer();
?>