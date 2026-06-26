<?php
/*
Template Name: Homepage
*/
get_header();
?>

<!-- HERO -->
<section class="hero" id="hero">
  <div class="container">
    <div class="hero-inner">
      <div class="hero-left">
        <div class="hero-label">🏠 Georgia's #1 Property Platform</div>
        <h1>Find Your Dream<br>Property in Georgia</h1>
        <p class="hero-desc">
          Browse 24,000+ verified listings across Tbilisi, Batumi, Kutaisi and beyond. From apartments to commercial spaces — your perfect property is here.
        </p>
        <div class="hero-ctas">
          <a href="/listings/" class="btn btn-green">Browse Listings</a>
          <a href="/list-property/" class="btn btn-outline">List Your Property</a>
        </div>
        <div class="hero-stats">
          <div>
            <div class="hero-stat-num" data-target="24000" data-suffix="+">0+</div>
            <div class="hero-stat-label">Active Listings</div>
          </div>
          <div>
            <div class="hero-stat-num" data-target="8500" data-suffix="+">0+</div>
            <div class="hero-stat-label">Happy Clients</div>
          </div>
          <div>
            <div class="hero-stat-num" data-target="120" data-suffix="+">0+</div>
            <div class="hero-stat-label">Expert Agents</div>
          </div>
        </div>
      </div>
      <div class="hero-visual">
        <div class="hero-map-placeholder"></div>
        <div class="hero-map-badge">
          <div class="hero-map-badge-num">24,000+</div>
          <div class="hero-map-badge-text">Properties Available</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SEARCH -->
<section class="search-section">
  <div class="container">
    <form class="property-search" id="property-search">
      <div class="search-field">
        <label for="location">Location</label>
        <input type="text" id="location" placeholder="Tbilisi, Batumi...">
      </div>
      <div class="search-field">
        <label for="prop-type">Property Type</label>
        <select id="prop-type">
          <option>All Types</option>
          <option>Apartment</option>
          <option>House</option>
          <option>Commercial</option>
          <option>Land</option>
        </select>
      </div>
      <div class="search-field">
        <label for="price-range">Price Range</label>
        <select id="price-range">
          <option>Any Price</option>
          <option>Under $50k</option>
          <option>$50k — $100k</option>
          <option>$100k — $250k</option>
          <option>$250k+</option>
        </select>
      </div>
      <div class="search-field">
        <label for="rooms">Bedrooms</label>
        <select id="rooms">
          <option>Any</option>
          <option>Studio</option>
          <option>1 bed</option>
          <option>2 beds</option>
          <option>3+ beds</option>
        </select>
      </div>
      <button type="submit" class="btn btn-green">Search Properties</button>
    </form>
  </div>
</section>

<!-- FEATURED LISTINGS -->
<section class="listings-section section-pad" id="listings">
  <div class="container">
    <div style="display:flex;justify-content:space-between;align-items:flex-end;margin-bottom:2rem;flex-wrap:wrap;gap:1rem;">
      <div>
        <span class="section-label">Featured Properties</span>
        <h2>New Listings This Week</h2>
      </div>
      <a href="/listings/" class="section-link">View All →</a>
    </div>
    <div class="listings-grid">
      <?php
      $listings = [
        ['Modern 3BR Apartment', 'Vake, Tbilisi', '$145,000', '3', '2', '92', 'GS', 'Giorgi Sharikadze', true],
        ['Sea-View Studio', 'Batumi Beachfront', '$68,500', '1', '1', '42', 'NM', 'Nino Mikhelidze', true],
        ['Commercial Office Space', 'Saburtalo, Tbilisi', '$220,000', '—', '2', '180', 'DK', 'David Kvaratskhelia', false],
        ['Family House + Garden', 'Gldani, Tbilisi', '$89,000', '4', '2', '140', 'AJ', 'Ana Jangveladze', true],
        ['Penthouse Apartment', 'Mtatsminda, Tbilisi', '$380,000', '3', '3', '145', 'LG', 'Lasha Gharibashvili', true],
        ['Investment Apartment', 'Isani, Tbilisi', '$52,000', '2', '1', '58', 'TS', 'Tamar Sulkhanishvili', false],
      ];
      foreach ($listings as $l) : ?>
        <div class="listing-card reveal">
          <div class="listing-img">
            <div class="listing-img-inner"></div>
            <div class="listing-badges">
              <?php if ($l[8]) : ?><span class="badge-new">New</span><?php endif; ?>
              <span class="badge-type">For Sale</span>
            </div>
            <div class="listing-price"><?php echo esc_html($l[2]); ?></div>
          </div>
          <div class="listing-body">
            <div class="listing-title"><?php echo esc_html($l[0]); ?></div>
            <div class="listing-location">📍 <?php echo esc_html($l[1]); ?></div>
            <div class="listing-specs">
              <?php if ($l[3] !== '—') : ?><span class="listing-spec">🛏 <?php echo esc_html($l[3]); ?> bed</span><?php endif; ?>
              <span class="listing-spec">🚿 <?php echo esc_html($l[4]); ?> bath</span>
              <span class="listing-spec">📐 <?php echo esc_html($l[5]); ?>m²</span>
            </div>
            <div class="listing-agent">
              <div class="agent-avatar"><?php echo esc_html($l[6]); ?></div>
              <div>
                <div class="agent-name"><?php echo esc_html($l[7]); ?></div>
                <div class="agent-phone">Licensed Agent</div>
              </div>
              <a href="/contact/?agent=<?php echo sanitize_title($l[7]); ?>" class="btn btn-green" style="padding:8px 16px;font-size:.8125rem;margin-left:auto;">Contact</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- PROPERTY TYPES -->
<section class="types-section section-pad" id="types">
  <div class="container">
    <div class="section-header" style="text-align:center;margin-bottom:2.5rem;">
      <span class="section-label">Browse By Type</span>
      <h2>What Are You Looking For?</h2>
    </div>
    <div class="types-tabs">
      <div class="type-tab active">
        <div class="type-icon">🏢</div>
        <div class="type-name">Residential</div>
        <div class="type-count">16,240 listings</div>
      </div>
      <div class="type-tab">
        <div class="type-icon">🏪</div>
        <div class="type-name">Commercial</div>
        <div class="type-count">4,180 listings</div>
      </div>
      <div class="type-tab">
        <div class="type-icon">🌾</div>
        <div class="type-name">Land &amp; Plots</div>
        <div class="type-count">2,900 listings</div>
      </div>
      <div class="type-tab">
        <div class="type-icon">🔑</div>
        <div class="type-name">Rental</div>
        <div class="type-count">8,340 listings</div>
      </div>
    </div>
  </div>
</section>

<!-- AGENTS -->
<section class="agents-section section-pad" id="agents">
  <div class="container">
    <div class="section-header" style="display:flex;justify-content:space-between;align-items:flex-end;text-align:left;margin-bottom:2rem;flex-wrap:wrap;gap:1rem;">
      <div>
        <span class="section-label">Our Team</span>
        <h2>Expert Property Agents</h2>
      </div>
      <a href="/agents/" class="section-link">All Agents →</a>
    </div>
    <div class="agents-grid">
      <?php
      $agents = [
        ['GS', 'Giorgi Sharikadze', 'Senior Agent · Tbilisi', '48 listings'],
        ['NM', 'Nino Mikhelidze', 'Coastal Specialist · Batumi', '32 listings'],
        ['DK', 'David Kvaratskhelia', 'Commercial Expert · Tbilisi', '27 listings'],
        ['AJ', 'Ana Jangveladze', 'Residential · Kutaisi', '19 listings'],
      ];
      foreach ($agents as $a) : ?>
        <div class="agent-card reveal">
          <div class="agent-card-avatar"><?php echo esc_html($a[0]); ?></div>
          <div class="agent-card-name"><?php echo esc_html($a[1]); ?></div>
          <div class="agent-card-title"><?php echo esc_html($a[2]); ?></div>
          <div class="agent-listings"><?php echo esc_html($a[3]); ?></div>
          <a href="/contact/" class="btn btn-green" style="width:100%;justify-content:center;padding:10px;">Contact Agent</a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- MORTGAGE CALCULATOR -->
<section class="calc-section" id="mortgage">
  <div class="container">
    <div class="calc-inner">
      <div class="calc-content">
        <span class="section-label" style="color:rgba(255,255,255,0.5);">Planning Your Purchase</span>
        <h2>Mortgage Calculator</h2>
        <p style="color:rgba(255,255,255,0.6);font-size:1.0625rem;margin-top:1rem;">
          Estimate your monthly payments based on current Georgian bank rates. Consult our agents for personalized financing options.
        </p>
      </div>
      <div class="calculator" id="calculator">
        <div class="calc-group">
          <label for="prop-price">Property Price (USD)</label>
          <input type="number" id="prop-price" value="120000" min="10000" step="5000">
        </div>
        <div class="calc-group">
          <label for="down-payment">Down Payment (%)</label>
          <select id="down-payment">
            <option value="10">10%</option>
            <option value="20" selected>20%</option>
            <option value="30">30%</option>
            <option value="40">40%</option>
          </select>
        </div>
        <div class="calc-group">
          <label for="loan-term">Loan Term</label>
          <select id="loan-term">
            <option value="10">10 years</option>
            <option value="15">15 years</option>
            <option value="20" selected>20 years</option>
            <option value="25">25 years</option>
          </select>
        </div>
        <div class="calc-group">
          <label for="interest-rate">Interest Rate (%)</label>
          <input type="number" id="interest-rate" value="8.5" min="4" max="20" step="0.1">
        </div>
        <div class="calc-result" id="calc-result">
          <div class="calc-result-num" id="monthly-payment">$1,041</div>
          <div class="calc-result-label">Estimated Monthly Payment</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials-section section-pad">
  <div class="container">
    <div class="section-header" style="text-align:center;margin-bottom:2.5rem;">
      <span class="section-label">Client Stories</span>
      <h2>What Our Clients Say</h2>
    </div>
    <div class="testimonials-grid">
      <?php
      $testimonials = [
        ['MK', 'M. Kobakhidze', 'Found our dream apartment in Vake within 2 weeks. The agent was incredibly professional and transparent throughout the entire process. Highly recommend PropertyHub!'],
        ['SK', 'S. Khoshtaria', 'Listed my commercial property and had serious inquiries within 3 days. Sold at asking price. The platform\'s reach is genuinely impressive.'],
        ['NK', 'N. Kvinikadze', 'As a first-time buyer, I was nervous. The team guided me through every step — valuation, negotiation, legal. Could not have done it without them.'],
      ];
      foreach ($testimonials as $t) : ?>
        <div class="testimonial-card reveal">
          <div class="testimonial-stars">★★★★★</div>
          <div class="testimonial-text">"<?php echo esc_html($t[2]); ?>"</div>
          <div class="testimonial-author">
            <div class="t-avatar"><?php echo esc_html($t[0]); ?></div>
            <div>
              <div class="t-name"><?php echo esc_html($t[1]); ?></div>
              <div class="t-detail">Verified Buyer · Tbilisi</div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
