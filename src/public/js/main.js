document.addEventListener('DOMContentLoaded', function() {
    const accordionBtns = document.querySelectorAll('.accordion-button');
    
    accordionBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        const targetId = this.dataset.accordion;
        const targetAccordion = document.getElementById(targetId);
        const arrowIcon = this.querySelector('.arrow img');
  
        btn.classList.toggle('open');
        targetAccordion.classList.toggle('hide');

        if (targetAccordion.classList.contains('hide')) {
          targetAccordion.style.maxHeight = "0";
        } else {
          targetAccordion.style.maxHeight = targetAccordion.scrollHeight + "px";
        }

        // Toggle rotation of the arrow
        arrowIcon.classList.toggle('rotate-180');
      });
    });

    // Animated Counter for Impact Metrics
    function animateCounter(element, target, duration = 2000) {
      const start = 0;
      const increment = target / (duration / 16); // 60fps
      let current = start;
      
      const timer = setInterval(() => {
        current += increment;
        if (current >= target) {
          element.textContent = Math.floor(target);
          clearInterval(timer);
        } else {
          element.textContent = Math.floor(current);
        }
      }, 16);
    }

    // Intersection Observer for metrics animation
    const metricsObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const metricNumbers = entry.target.querySelectorAll('.metric-number');
          metricNumbers.forEach(number => {
            if (!number.classList.contains('animated')) {
              const target = parseInt(number.dataset.target);
              animateCounter(number, target);
              number.classList.add('animated');
            }
          });
        }
      });
    }, {
      threshold: 0.3
    });

    // Observe the metrics section
    const metricsSection = document.getElementById('ImpactMetrics');
    if (metricsSection) {
      metricsObserver.observe(metricsSection);
    }
  });