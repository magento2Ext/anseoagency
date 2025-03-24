<?php /*Template Name: SEO Packages*/ get_header(); ?>

<style>
  .tab-pane.active {
    display: block;
}

.tab-pane {
    display: none;
}

ul.navs-new {
    display: flex;
    justify-content: center;
    gap: 10px;
}

ul.navs-new li.nav-item a.active {
    color: #4b7ff8;
}

ul.navs-new li.nav-item {
    list-style: none;
}

.pricing-table ul.clearfix.elegant {
    display: flex;
    gap: 30px;
}

.pricing-table ul.clearfix.elegant li.plan-item {
    width: calc(25% - 22.5px);
    list-style: none;
}

.pricing-table ul.clearfix.elegant::before,.pricing-table ul.clearfix.elegant::after {
    content: unset;
}
</style>

<div class="pricing-table-main elegant_pro-main">
  <div class="wrapper">
  <div class="pricing-table-header elegant_pro-header">
    <div class="filters d-flex" style="">
      <div class="frequency-nav-new d-flex align-items-center m-auto">
        <ul class="navs-new">
          <li class="nav-item float-left">
            <a class="nav-link frequency active" href="#" data-tab="1_months">Monthly</a>
          </li>
          <li class="nav-item float-left">
            <a class="nav-link frequency" href="#" data-tab="3_months">Quarterly</a>
          </li>
          <li class="nav-item float-left">
            <a class="nav-link frequency" href="#" data-tab="6_months">Half-Yearly</a>
          </li>
          <li class="nav-item float-left">
            <a class="nav-link frequency" href="#" data-tab="1_years">Yearly</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="pricing-table-body">
    <div class="tab-content">
      <!-- Monthly Plan -->
      <div class="tab-pane active" id="1_months">
      <div class="pricing-table popular">
  <ul class="clearfix elegant">
    <li class="plan-item">
      <div class="plan-block">
        <div id="plan-name" class="plan-name">Bronze</div>
        <div class="main-price">
          <div class="plan-price-strike"></div>
          <span class="price-figure">
            <span class="basic-plan price-value">
              <span class="otherCurrency" id="plan-amount">Rs.12000</span>
            </span>
          </span>
          <span class="price-term"><span> Billed Monthly</span></span>
          <span class="price-caption">18% Gst Extra</span>
          <span class="goal">
            <button class="rounded cursor-pointer pay-button" data-amount="2000"> Choose Plan</button>
          </span>
        </div>
        <ul id="price-features" class="price-features" style="border-top: 1px solid rgb(237, 237, 237); padding-bottom: 7px;">
          <li><p class="position-relative">10-25 Keywords</p></li>
          <li><p class="position-relative">SEO Audit Report</p></li>
          <li><p class="position-relative">Content Duplicacy Check</p></li>
          <li><p class="position-relative">Initial Backlinks Analysis</p></li>
          <li><p class="position-relative">Initial Rank Report</p></li>
          <li><p class="position-relative">Google Analytics &amp; Webmaster Tools Setup</p></li>
          <li><p class="position-relative">Sitemap Implementation (HTML &amp; XML)</p></li>
          <li><p class="position-relative">On-Page Optimization (Title Tag, Meta Tag, Image Tag, Content Optimization)</p></li>
          <li><p class="position-relative">W3C Validation</p></li>
          <li><p class="position-relative">Robot.txt Implementation</p></li>
          <li><p class="position-relative">Internal Web Page Linking</p></li>
          <li><p class="position-relative">3-5 SEO Optimized Articles</p></li>
          <li><p class="position-relative">50-100 Backlinks</p></li>
          <li><p class="position-relative">Monthly SEO Report</p></li>
        </ul>
      </div>
    </li>

    <li class="plan-item">
      <div class="plan-block elegant-pro-popular">
        <div class="ribbon">
          <div class="ribbon-inner"><small>Most Popular</small></div>
        </div>
        <div class="plan-name" id="plan-name">Silver</div>
        <div class="main-price">
          <div class="plan-price-strike"></div>
          <span class="price-figure">
            <span class="basic-plan price-value">
              <span class="otherCurrency" id="plan-amount">Rs.20000</span>
            </span>
          </span>
          <span class="price-term"><span> Billed Monthly</span></span>
          <span class="price-caption">18% Gst Extra</span>
          <span class="goal">
            <a href="https://rzp.io/subscription/plan_PrEloqv2e2UPdp" class="rounded cursor-pointer">
  <button>Choose Plan</button>
</a>
          </span>
        </div>
        <ul id="price-features" class="price-features" style="border-top: 1px solid rgb(237, 237, 237); padding-bottom: 7px;">
          <li><p class="position-relative">25-50 Keywords</p></li>
          <li><p class="position-relative">SEO Audit Report</p></li>
          <li><p class="position-relative">Content Duplicacy Check</p></li>
          <li><p class="position-relative">Competition Analysis</p></li>
          <li><p class="position-relative">Initial Backlinks Analysis</p></li>
          <li><p class="position-relative">Initial Rank Report</p></li>
          <li><p class="position-relative">Sitemap Implementation (HTML &amp; XML)</p></li>
          <li><p class="position-relative">On-Page Optimization (Title Tag, Meta Tag, URL Optimization, Image Tag)</p></li>
          <li><p class="position-relative">Off-Page Optimization (Social Bookmarking, Blog Submission)</p></li>
          <li><p class="position-relative">W3C Validation</p></li>
          <li><p class="position-relative">Robot.txt Implementation</p></li>
          <li><p class="position-relative">Internal Web Page Linking</p></li>
          <li><p class="position-relative">5-8 SEO Optimized Articles</p></li>
          <li><p class="position-relative">100-200 Backlinks</p></li>
          <li><p class="position-relative">Monthly SEO Report</p></li>
        </ul>
      </div>
    </li>

    <li class="plan-item">
      <div class="plan-block">
        <div class="plan-name" id="plan-name">Gold</div>
        <div class="main-price">
          <div class="plan-price-strike"></div>
          <span class="price-figure">
            <span class="basic-plan price-value">
              <span class="otherCurrency" id="plan-amount">Rs.30000</span>
            </span>
          </span>
          <span class="price-term"><span> Billed Monthly</span></span>
          <span class="price-caption">18% Gst Extra</span>
          <span class="goal">
            <button class="rounded cursor-pointer"><a href="https://rzp.io/rzp/QZixQGO">Choose Plan</a></button>
          </span>
        </div>
        <ul id="price-features" class="price-features" style="border-top: 1px solid rgb(237, 237, 237); padding-bottom: 7px;">
          <li><p class="position-relative">50-75 Keywords</p></li>
          <li><p class="position-relative">SEO Audit Report</p></li>
          <li><p class="position-relative">Comprehensive SEO Audit Report</p></li>
          <li><p class="position-relative">Content Duplicacy Check</p></li>
          <li><p class="position-relative">Competition Analysis</p></li>
          <li><p class="position-relative">Initial Backlinks Analysis</p></li>
          <li><p class="position-relative">Initial Rank Report</p></li>
          <li><p class="position-relative">Sitemap Implementation (HTML &amp; XML)</p></li>
          <li><p class="position-relative">On-Page Optimization (Title Tag, Meta Tag, URL Optimization, Image Tag)</p></li>
          <li><p class="position-relative">Off-Page Optimization (Social Bookmarking, Blog Submission)</p></li>
          <li><p class="position-relative">W3C Validation</p></li>
          <li><p class="position-relative">Robot.txt Implementation</p></li>
          <li><p class="position-relative">Internal Web Page Linking</p></li>
          <li><p class="position-relative">8-12 SEO Optimized Articles</p></li>
          <li><p class="position-relative">200-300 Backlinks</p></li>
          <li><p class="position-relative">Weekly SEO Report</p></li>
        </ul>
      </div>
    </li>

    <li class="plan-item">
      <div class="plan-block">
        <div class="plan-name" id="plan-name">Platinum</div>
        <div class="main-price">
          <div class="plan-price-strike"></div>
          <span class="price-figure">
            <span class="basic-plan price-value">
              <span class="otherCurrency" id="plan-amount">Rs.50000</span>
            </span>
          </span>
          <span class="price-term"><span> Billed Monthly</span></span>
          <span class="price-caption">18% Gst Extra</span>
          <span class="goal">
            <button class="rounded cursor-pointer">Choose Plan</button>
          </span>
        </div>
        <ul id="price-features" class="price-features" style="border-top: 1px solid rgb(237, 237, 237); padding-bottom: 7px;">
          <li><p class="position-relative">Unlimited Keywords</p></li>
          <li><p class="position-relative">Unlimited Product Optimization</p></li>
          <li><p class="position-relative">Target Unlimited Cities</p></li>
          <li><p class="position-relative">Advanced SEO Audit Report</p></li>
          <li><p class="position-relative">Initial Backlinks Analysis</p></li>
          <li><p class="position-relative">Initial Rank Report</p></li>
          <li><p class="position-relative">Sitemap Implementation (HTML &amp; XML)</p></li>
          <li><p class="position-relative">Content Optimization for E-commerce Categories &amp; Product Pages</p></li>
          <li><p class="position-relative">Keyword Research &amp; Management</p></li>
          <li><p class="position-relative">Sitemap &amp; Robot.txt Implementation</p></li>
          <li><p class="position-relative">On-Page Optimization (Product URLs, Meta Tags, Image Alt Tags)</p></li>
          <li><p class="position-relative">Off-Page Optimization (Backlinks, Blog Submission)</p></li>
          <li><p class="position-relative">W3C Validation</p></li>
          <li><p class="position-relative">Robot.txt Implementation</p></li>
          <li><p class="position-relative">Internal Web Page Linking</p></li>
          <li><p class="position-relative">15-18 SEO Optimized Articles</p></li>
          <li><p class="position-relative">300-500 Backlinks</p></li>
          <li><p class="position-relative">Weekly SEO Report</p></li>
        </ul>
      </div>
    </li>
  </ul>
</div>

      </div>

      <!-- Quarterly Plan -->
      <div class="tab-pane" id="3_months">
        <div class="pricing-table popular">
    <ul class="clearfix elegant">
        <li class="plan-item">
            <div class="plan-block">
                <div id="plan-name" class="plan-name">Bronze</div>
                <div class="main-price">
                    <div class="plan-price-strike"></div>
                    <span class="price-figure">
                        <span class="basic-plan price-value">
                            <span class="otherCurrency" id="plan-amount">Rs.32400</span>
                        </span>
                    </span>
                    <span class="price-term"><span> Billed Quarterly</span></span>
                    <span class="price-caption">18% Gst Extra</span>
                    <span class="goal">
                        <button class="rounded cursor-pointer">Choose Plan</button>
                    </span>
                </div>
                <ul id="price-features" class="price-features">
                    <li><p class="position-relative">10-25 Keywords</p></li>
                    <li><p class="position-relative">SEO Audit Report</p></li>
                    <li><p class="position-relative">Content Duplicacy Check</p></li>
                    <li><p class="position-relative">Initial Backlinks Analysis</p></li>
                    <li><p class="position-relative">Initial Rank Report</p></li>
                    <li><p class="position-relative">Google Analytics &amp; Webmaster Tools Setup</p></li>
                    <li><p class="position-relative">Sitemap Implementation (HTML &amp; XML)</p></li>
                    <li><p class="position-relative">On-Page Optimization (Title Tag, Meta Tag, Image Tag, Content Optimization)</p></li>
                    <li><p class="position-relative">W3C Validation</p></li>
                    <li><p class="position-relative">Robot.txt Implementation</p></li>
                    <li><p class="position-relative">Internal Web Page Linking</p></li>
                    <li><p class="position-relative">3-5 SEO Optimized Articles</p></li>
                    <li><p class="position-relative">50-100 Backlinks</p></li>
                    <li><p class="position-relative">Monthly SEO Report</p></li>
                </ul>
            </div>
        </li>

        <li class="plan-item">
            <div class="plan-block">
                <div class="plan-name" id="plan-name">Silver</div>
                <div class="main-price">
                    <div class="plan-price-strike"></div>
                    <span class="price-figure">
                        <span class="basic-plan price-value">
                            <span class="otherCurrency" id="plan-amount">Rs.54000</span>
                        </span>
                    </span>
                    <span class="price-term"><span> Billed Quarterly</span></span>
                    <span class="price-caption">18% Gst Extra</span>
                    <span class="goal">
                        <button class="rounded cursor-pointer">Choose Plan</button>
                    </span>
                </div>
                <ul id="price-features" class="price-features">
                    <li><p class="position-relative">25-50 Keywords</p></li>
                    <li><p class="position-relative">SEO Audit Report</p></li>
                    <li><p class="position-relative">Content Duplicacy Check</p></li>
                    <li><p class="position-relative">Competition Analysis</p></li>
                    <li><p class="position-relative">Initial Backlinks Analysis</p></li>
                    <li><p class="position-relative">Initial Rank Report</p></li>
                    <li><p class="position-relative">Sitemap Implementation (HTML &amp; XML)</p></li>
                    <li><p class="position-relative">On-Page Optimization (Title Tag, Meta Tag, URL Optimization, Image Tag)</p></li>
                    <li><p class="position-relative">Off-Page Optimization (Social Bookmarking, Blog Submission)</p></li>
                    <li><p class="position-relative">W3C Validation</p></li>
                    <li><p class="position-relative">Robot.txt Implementation</p></li>
                    <li><p class="position-relative">Internal Web Page Linking</p></li>
                    <li><p class="position-relative">5-8 SEO Optimized Articles</p></li>
                    <li><p class="position-relative">100-200 Backlinks</p></li>
                    <li><p class="position-relative">Monthly SEO Report</p></li>
                </ul>
            </div>
        </li>

        <li class="plan-item">
            <div class="plan-block elegant-pro-popular">
                <div class="ribbon">
                    <div class="ribbon-inner"><small>Most Popular</small></div>
                </div>
                <div class="plan-name" id="plan-name">Gold</div>
                <div class="main-price">
                    <div class="plan-price-strike"></div>
                    <span class="price-figure">
                        <span class="basic-plan price-value">
                            <span class="otherCurrency" id="plan-amount">Rs.81000</span>
                        </span>
                    </span>
                    <span class="price-term"><span> Billed Quarterly</span></span>
                    <span class="price-caption">18% Gst Extra</span>
                    <span class="goal">
                        <button class="rounded cursor-pointer">Choose Plan</button>
                    </span>
                </div>
                <ul id="price-features" class="price-features">
                    <li><p class="position-relative">50-75 Keywords</p></li>
                    <li><p class="position-relative">SEO Audit Report</p></li>
                    <li><p class="position-relative">Comprehensive SEO Audit Report</p></li>
                    <li><p class="position-relative">Content Duplicacy Check</p></li>
                    <li><p class="position-relative">Competition Analysis</p></li>
                    <li><p class="position-relative">Initial Backlinks Analysis</p></li>
                    <li><p class="position-relative">Initial Rank Report</p></li>
                    <li><p class="position-relative">Sitemap Implementation (HTML &amp; XML)</p></li>
                    <li><p class="position-relative">On-Page Optimization (Title Tag, Meta Tag, URL Optimization, Image Tag)</p></li>
                    <li><p class="position-relative">Off-Page Optimization (Social Bookmarking, Blog Submission)</p></li>
                    <li><p class="position-relative">W3C Validation</p></li>
                    <li><p class="position-relative">Robot.txt Implementation</p></li>
                    <li><p class="position-relative">Internal Web Page Linking</p></li>
                    <li><p class="position-relative">8-12 SEO Optimized Articles</p></li>
                    <li><p class="position-relative">200-300 Backlinks</p></li>
                    <li><p class="position-relative">Weekly SEO Report</p></li>
                </ul>
            </div>
        </li>

        <li class="plan-item">
            <div class="plan-block">
                <div class="plan-name" id="plan-name">Platinum</div>
                <div class="main-price">
                    <div class="plan-price-strike"></div>
                    <span class="price-figure">
                        <span class="basic-plan price-value">
                            <span class="otherCurrency" id="plan-amount">Rs.135000</span>
                        </span>
                    </span>
                    <span class="price-term"><span> Billed Quarterly</span></span>
                    <span class="price-caption">18% Gst Extra</span>
                    <span class="goal">
                        <button class="rounded cursor-pointer">Choose Plan</button>
                    </span>
                </div>
                <ul id="price-features" class="price-features">
                    <li><p class="position-relative">Unlimited Keywords</p></li>
                    <li><p class="position-relative">Unlimited Product Optimization</p></li>
                    <li><p class="position-relative">Target Unlimited Cities</p></li>
                    <li><p class="position-relative">Advanced SEO Audit Report</p></li>
                    <li><p class="position-relative">Initial Backlinks Analysis</p></li>
                    <li><p class="position-relative">Initial Rank Report</p></li>
                    <li><p class="position-relative">Sitemap Implementation (HTML &amp; XML)</p></li>
                    <li><p class="position-relative">Content Optimization for E-commerce Categories &amp; Product Pages</p></li>
                    <li><p class="position-relative">Keyword Research &amp; Management</p></li>
                    <li><p class="position-relative">Sitemap &amp; Robot.txt Implementation</p></li>
                    <li><p class="position-relative">On-Page Optimization (Product URLs, Meta Tags, Image Alt Tags)</p></li>
                    <li><p class="position-relative">Off-Page Optimization (Backlinks, Blog Submission)</p></li>
                    <li><p class="position-relative">W3C Validation</p></li>
                    <li><p class="position-relative">Robot.txt Implementation</p></li>
                    <li><p class="position-relative">Internal Web Page Linking</p></li>
                    <li><p class="position-relative">15-18 SEO Optimized Articles</p></li>
                    <li><p class="position-relative">300-500 Backlinks</p></li>
                    <li><p class="position-relative">Weekly SEO Report</p></li>
                </ul>
            </div>
        </li>
    </ul>
</div>
      </div>

      <!-- Half-Yearly Plan -->
      <div class="tab-pane" id="6_months">
  <div class="pricing-table popular">
  <ul class="clearfix elegant">
    
    <!-- Bronze Plan -->
    <li class="plan-item">
      <div class="plan-block">
        <div id="plan-name" class="plan-name">Bronze</div>
        <div class="main-price">
          <div class="plan-price-strike"></div>
          <span class="price-figure">
            <span class="basic-plan price-value">
              <span class="otherCurrency" id="plan-amount">Rs.61200</span>
            </span>
          </span>
          <span class="price-term">Billed Bi-Yearly</span>
          <span class="price-caption">18% GST Extra</span>
          <span class="goal">
            <button class="rounded cursor-pointer">Choose Plan</button>
          </span>
        </div>
        <ul id="price-features" class="price-features" style="border-top: 1px solid rgb(237, 237, 237); padding-bottom: 7px;">
          <li><p class="position-relative">10-25 Keywords</p></li>
          <li><p class="position-relative">SEO Audit Report</p></li>
          <li><p class="position-relative">Content Duplicacy Check</p></li>
          <li><p class="position-relative">Initial Backlinks Analysis</p></li>
          <li><p class="position-relative">Initial Rank Report</p></li>
          <li><p class="position-relative">Google Analytics & Webmaster Tools Setup</p></li>
          <li><p class="position-relative">Sitemap Implementation (HTML & XML)</p></li>
          <li><p class="position-relative">On-Page Optimization (Title Tag, Meta Tag, Image Tag, Content Optimization)</p></li>
          <li><p class="position-relative">W3C Validation</p></li>
          <li><p class="position-relative">Robot.txt Implementation</p></li>
          <li><p class="position-relative">Internal Web Page Linking</p></li>
          <li><p class="position-relative">3-5 SEO Optimized Articles</p></li>
          <li><p class="position-relative">50-100 Backlinks</p></li>
          <li><p class="position-relative">Monthly SEO Report</p></li>
        </ul>
      </div>
    </li>

    <!-- Silver Plan -->
    <li class="plan-item">
      <div class="plan-block">
        <div class="plan-name" id="plan-name">Silver</div>
        <div class="main-price">
          <div class="plan-price-strike"></div>
          <span class="price-figure">
            <span class="basic-plan price-value">
              <span class="otherCurrency" id="plan-amount">Rs.102000</span>
            </span>
          </span>
          <span class="price-term">Billed Bi-Yearly</span>
          <span class="price-caption">18% GST Extra</span>
          <span class="goal">
            <button class="rounded cursor-pointer">Choose Plan</button>
          </span>
        </div>
        <ul id="price-features" class="price-features" style="border-top: 1px solid rgb(237, 237, 237); padding-bottom: 7px;">
          <li><p class="position-relative">25-50 Keywords</p></li>
          <li><p class="position-relative">SEO Audit Report</p></li>
          <li><p class="position-relative">Content Duplicacy Check</p></li>
          <li><p class="position-relative">Competition Analysis</p></li>
          <li><p class="position-relative">Initial Backlinks Analysis</p></li>
          <li><p class="position-relative">Initial Rank Report</p></li>
          <li><p class="position-relative">Sitemap Implementation (HTML & XML)</p></li>
          <li><p class="position-relative">On-Page Optimization (Title Tag, Meta Tag, URL Optimization, Image Tag)</p></li>
          <li><p class="position-relative">Off-Page Optimization (Social Bookmarking, Blog Submission)</p></li>
          <li><p class="position-relative">W3C Validation</p></li>
          <li><p class="position-relative">Robot.txt Implementation</p></li>
          <li><p class="position-relative">Internal Web Page Linking</p></li>
          <li><p class="position-relative">5-8 SEO Optimized Articles</p></li>
          <li><p class="position-relative">100-200 Backlinks</p></li>
          <li><p class="position-relative">Monthly SEO Report</p></li>
        </ul>
      </div>
    </li>

    <!-- Gold Plan -->
    <li class="plan-item">
      <div class="plan-block elegant-pro-popular">
        <div class="ribbon">
          <div class="ribbon-inner"><small>Most Popular</small></div>
        </div>
        <div class="plan-name" id="plan-name">Gold</div>
        <div class="main-price">
          <div class="plan-price-strike"></div>
          <span class="price-figure">
            <span class="basic-plan price-value">
              <span class="otherCurrency" id="plan-amount">Rs.153000</span>
            </span>
          </span>
          <span class="price-term">Billed Bi-Yearly</span>
          <span class="price-caption">18% GST Extra</span>
          <span class="goal">
            <button class="rounded cursor-pointer">Choose Plan</button>
          </span>
        </div>
        <ul id="price-features" class="price-features" style="border-top: 1px solid rgb(237, 237, 237); padding-bottom: 7px;">
          <li><p class="position-relative">50-75 Keywords</p></li>
          <li><p class="position-relative">SEO Audit Report</p></li>
          <li><p class="position-relative">Comprehensive SEO Audit Report</p></li>
          <li><p class="position-relative">Content Duplicacy Check</p></li>
          <li><p class="position-relative">Competition Analysis</p></li>
          <li><p class="position-relative">Initial Backlinks Analysis</p></li>
          <li><p class="position-relative">Initial Rank Report</p></li>
          <li><p class="position-relative">Sitemap Implementation (HTML & XML)</p></li>
          <li><p class="position-relative">On-Page Optimization (Title Tag, Meta Tag, URL Optimization, Image Tag)</p></li>
          <li><p class="position-relative">Off-Page Optimization (Social Bookmarking, Blog Submission)</p></li>
          <li><p class="position-relative">W3C Validation</p></li>
          <li><p class="position-relative">Robot.txt Implementation</p></li>
          <li><p class="position-relative">Internal Web Page Linking</p></li>
          <li><p class="position-relative">8-12 SEO Optimized Articles</p></li>
          <li><p class="position-relative">200-300 Backlinks</p></li>
          <li><p class="position-relative">Weekly SEO Report</p></li>
        </ul>
      </div>
    </li>

    <!-- Platinum Plan -->
    <li class="plan-item">
      <div class="plan-block">
        <div class="plan-name" id="plan-name">Platinum</div>
        <div class="main-price">
          <div class="plan-price-strike"></div>
          <span class="price-figure">
            <span class="basic-plan price-value">
              <span class="otherCurrency" id="plan-amount">Rs.255000</span>
            </span>
          </span>
          <span class="price-term">Billed Bi-Yearly</span>
          <span class="price-caption">18% GST Extra</span>
          <span class="goal">
            <button class="rounded cursor-pointer">Choose Plan</button>
          </span>
        </div>
        <ul id="price-features" class="price-features" style="border-top: 1px solid rgb(237, 237, 237); padding-bottom: 7px;">
          <li><p class="position-relative">Unlimited Keywords</p></li>
          <li><p class="position-relative">Unlimited Product Optimization</p></li>
          <li><p class="position-relative">Target Unlimited Cities</p></li>
          <li><p class="position-relative">Advanced SEO Audit Report</p></li>
          <li><p class="position-relative">Initial Backlinks Analysis</p></li>
          <li><p class="position-relative">Initial Rank Report</p></li>
          <li><p class="position-relative">Sitemap Implementation (HTML & XML)</p></li>
          <li><p class="position-relative">Content Optimization for E-commerce Categories & Product Pages</p></li>
          <li><p class="position-relative">Keyword Research & Management</p></li>
          <li><p class="position-relative">Sitemap & Robot.txt Implementation</p></li>
          <li><p class="position-relative">On-Page Optimization (Product URLs, Meta Tags, Image Alt Tags)</p></li>
          <li><p class="position-relative">Off-Page Optimization (Backlinks, Blog Submission)</p></li>
          <li><p class="position-relative">W3C Validation</p></li>
          <li><p class="position-relative">Robot.txt Implementation</p></li>
          <li><p class="position-relative">Internal Web Page Linking</p></li>
          <li><p class="position-relative">15-18 SEO Optimized Articles</p></li>
          <li><p class="position-relative">300-500 Backlinks</p></li>
          <li><p class="position-relative">Weekly SEO Report</p></li>
        </ul>
      </div>
    </li>

  </ul>
</div>

      </div>

      <!-- Yearly Plan -->
      <div class="tab-pane" id="1_years">
        <div class="pricing-table popular">
  <ul class="clearfix elegant">

    <!-- Bronze Plan -->
    <li class="plan-item">
      <div class="plan-block">
        <div class="plan-name" id="plan-name">Bronze</div>
        <div class="main-price">
          <div class="plan-price-strike"></div>
          <span class="price-figure">
            <span class="basic-plan price-value">
              <span class="otherCurrency" id="plan-amount">Rs.9600</span>
            </span>
          </span>
          <span class="price-term">Per Month / Billed Annually</span>
          <span class="price-caption">18% GST Extra</span>
          <span class="goal">
            <button class="rounded cursor-pointer">Choose Plan</button>
          </span>
        </div>
        <ul class="price-features" id="price-features" style="border-top: 1px solid rgb(237, 237, 237); padding-bottom: 7px;">
          <li><p>10-25 Keywords</p></li>
          <li><p>SEO Audit Report</p></li>
          <li><p>Content Duplicacy Check</p></li>
          <li><p>Initial Backlinks Analysis</p></li>
          <li><p>Initial Rank Report</p></li>
          <li><p>Google Analytics & Webmaster Tools Setup</p></li>
          <li><p>Sitemap Implementation (HTML & XML)</p></li>
          <li><p>On-Page Optimization (Title Tag, Meta Tag, Image Tag, Content Optimization)</p></li>
          <li><p>W3C Validation</p></li>
          <li><p>Robot.txt Implementation</p></li>
          <li><p>Internal Web Page Linking</p></li>
          <li><p>3-5 SEO Optimized Articles</p></li>
          <li><p>50-100 Backlinks</p></li>
          <li><p>Monthly SEO Report</p></li>
        </ul>
      </div>
    </li>

    <!-- Silver Plan -->
    <li class="plan-item">
      <div class="plan-block">
        <div class="plan-name" id="plan-name">Silver</div>
        <div class="main-price">
          <div class="plan-price-strike"></div>
          <span class="price-figure">
            <span class="basic-plan price-value">
              <span class="otherCurrency" id="plan-amount">Rs.16000</span>
            </span>
          </span>
          <span class="price-term">Per Month / Billed Annually</span>
          <span class="price-caption">18% GST Extra</span>
          <span class="goal">
            <button class="rounded cursor-pointer">Choose Plan</button>
          </span>
        </div>
        <ul class="price-features" id="price-features" style="border-top: 1px solid rgb(237, 237, 237); padding-bottom: 7px;">
          <li><p>25-50 Keywords</p></li>
          <li><p>SEO Audit Report</p></li>
          <li><p>Content Duplicacy Check</p></li>
          <li><p>Competition Analysis</p></li>
          <li><p>Initial Backlinks Analysis</p></li>
          <li><p>Initial Rank Report</p></li>
          <li><p>Sitemap Implementation (HTML & XML)</p></li>
          <li><p>On-Page Optimization (Title Tag, Meta Tag, URL Optimization, Image Tag)</p></li>
          <li><p>Off-Page Optimization (Social Bookmarking, Blog Submission)</p></li>
          <li><p>W3C Validation</p></li>
          <li><p>Robot.txt Implementation</p></li>
          <li><p>Internal Web Page Linking</p></li>
          <li><p>5-8 SEO Optimized Articles</p></li>
          <li><p>100-200 Backlinks</p></li>
          <li><p>Monthly SEO Report</p></li>
        </ul>
      </div>
    </li>

    <!-- Gold Plan -->
    <li class="plan-item">
      <div class="plan-block">
        <div class="plan-name" id="plan-name">Gold</div>
        <div class="main-price">
          <div class="plan-price-strike"></div>
          <span class="price-figure">
            <span class="basic-plan price-value">
              <span class="otherCurrency" id="plan-amount">Rs.24000</span>
            </span>
          </span>
          <span class="price-term">Per Month / Billed Annually</span>
          <span class="price-caption">18% GST Extra</span>
          <span class="goal">
            <button class="rounded cursor-pointer">Choose Plan</button>
          </span>
        </div>
        <ul class="price-features" id="price-features" style="border-top: 1px solid rgb(237, 237, 237); padding-bottom: 7px;">
          <li><p>50-75 Keywords</p></li>
          <li><p>SEO Audit Report</p></li>
          <li><p>Comprehensive SEO Audit Report</p></li>
          <li><p>Content Duplicacy Check</p></li>
          <li><p>Competition Analysis</p></li>
          <li><p>Initial Backlinks Analysis</p></li>
          <li><p>Initial Rank Report</p></li>
          <li><p>Sitemap Implementation (HTML & XML)</p></li>
          <li><p>On-Page Optimization (Title Tag, Meta Tag, URL Optimization, Image Tag)</p></li>
          <li><p>Off-Page Optimization (Social Bookmarking, Blog Submission)</p></li>
          <li><p>W3C Validation</p></li>
          <li><p>Robot.txt Implementation</p></li>
          <li><p>Internal Web Page Linking</p></li>
          <li><p>8-12 SEO Optimized Articles</p></li>
          <li><p>200-300 Backlinks</p></li>
          <li><p>Weekly SEO Report</p></li>
        </ul>
      </div>
    </li>

    <!-- Platinum Plan -->
    <li class="plan-item">
      <div class="plan-block elegant-pro-popular">
        <div class="ribbon">
          <div class="ribbon-inner"><small>Most Popular</small></div>
        </div>
        <div class="plan-name" id="plan-name">Platinum</div>
        <div class="main-price">
          <div class="plan-price-strike"></div>
          <span class="price-figure">
            <span class="basic-plan price-value">
              <span class="otherCurrency" id="plan-amount">Rs.40000</span>
            </span>
          </span>
          <span class="price-term">Per Month / Billed Annually</span>
          <span class="price-caption">18% GST Extra</span>
          <span class="goal">
            <button class="rounded cursor-pointer">Choose Plan</button>
          </span>
        </div>
        <ul class="price-features" id="price-features" style="border-top: 1px solid rgb(237, 237, 237); padding-bottom: 7px;">
          <li><p>Unlimited Keywords</p></li>
          <li><p>Unlimited Product Optimization</p></li>
          <li><p>Target Unlimited Cities</p></li>
          <li><p>Advanced SEO Audit Report</p></li>
          <li><p>Initial Backlinks Analysis</p></li>
          <li><p>Initial Rank Report</p></li>
          <li><p>Sitemap Implementation (HTML & XML)</p></li>
          <li><p>Content Optimization for E-commerce Categories & Product Pages</p></li>
          <li><p>Keyword Research & Management</p></li>
          <li><p>Sitemap & Robot.txt Implementation</p></li>
          <li><p>On-Page Optimization (Product URLs, Meta Tags, Image Alt Tags)</p></li>
          <li><p>Off-Page Optimization (Backlinks, Blog Submission)</p></li>
          <li><p>W3C Validation</p></li>
          <li><p>Robot.txt Implementation</p></li>
          <li><p>Internal Web Page Linking</p></li>
          <li><p>15-18 SEO Optimized Articles</p></li>
          <li><p>300-500 Backlinks</p></li>
          <li><p>Weekly SEO Report</p></li>
        </ul>
      </div>
    </li>

  </ul>
</div>

      </div>
    </div>
  </div>
</div>
</div>
