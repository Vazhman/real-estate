/* PropertyHub main.js */
(function() {
  'use strict';

  const header = document.getElementById('site-header');
  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobile-menu');

  if (header) {
    window.addEventListener('scroll', function() {
      header.classList.toggle('scrolled', window.scrollY > 10);
    }, { passive: true });
  }

  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', function() {
      const open = mobileMenu.classList.toggle('open');
      hamburger.setAttribute('aria-expanded', open);
    });
  }

  // Counter animation
  const io = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        if (entry.target.dataset.target) {
          const target = parseInt(entry.target.dataset.target);
          const suffix = entry.target.dataset.suffix || '';
          const start = performance.now();
          function update(now) {
            const p = Math.min((now - start) / 2000, 1);
            const eased = 1 - Math.pow(1 - p, 3);
            entry.target.textContent = Math.floor(target * eased).toLocaleString() + suffix;
            if (p < 1) requestAnimationFrame(update);
          }
          requestAnimationFrame(update);
        }
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });

  document.querySelectorAll('.reveal, [data-target]').forEach(function(el) { io.observe(el); });

  // Property type tabs
  document.querySelectorAll('.type-tab').forEach(function(tab) {
    tab.addEventListener('click', function() {
      document.querySelectorAll('.type-tab').forEach(function(t) { t.classList.remove('active'); });
      tab.classList.add('active');
    });
  });

  // Mortgage calculator
  function calcMortgage() {
    var price = parseFloat(document.getElementById('prop-price').value) || 0;
    var downPct = parseFloat(document.getElementById('down-payment').value) / 100;
    var years = parseFloat(document.getElementById('loan-term').value);
    var rate = parseFloat(document.getElementById('interest-rate').value) / 100 / 12;
    var principal = price * (1 - downPct);
    var n = years * 12;
    var monthly = principal * (rate * Math.pow(1 + rate, n)) / (Math.pow(1 + rate, n) - 1);
    var el = document.getElementById('monthly-payment');
    if (el && isFinite(monthly)) el.textContent = '$' + Math.round(monthly).toLocaleString();
  }

  ['prop-price', 'down-payment', 'loan-term', 'interest-rate'].forEach(function(id) {
    var el = document.getElementById(id);
    if (el) el.addEventListener('input', calcMortgage);
  });
  calcMortgage();
})();
