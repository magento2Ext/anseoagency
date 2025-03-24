document.addEventListener("DOMContentLoaded", function () {
    const counters = document.querySelectorAll('.counter-value');
    const section = document.querySelector('.seoservices_sec'); // Replace with your section selector

    const runCounters = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-count');
                const speed = 100; // Adjust speed
                const increment = Math.ceil(target / speed);
                let current = +counter.innerText.trim();

                if (current < target) {
                    counter.innerText = current + increment;
                    setTimeout(updateCount, 10);
                } else {
                    counter.innerText = target; // Ensure it ends at the target value
                }
            };

            updateCount();
        });
    };

    const observerOptions = {
        root: null, // Uses the viewport as the root
        threshold: 0.1 // Trigger when 10% of the section is visible
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                runCounters();
                observer.unobserve(section); // Stop observing once the counters have started
            }
        });
    }, observerOptions);

    if (section) {
        observer.observe(section); // Start observing the section
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var typeformInstance; // Store the popup instance
    var openBtn = document.getElementById("openTypeform");
    var closeBtn = document.getElementById("closeTypeform");

    openBtn.addEventListener("click", function () {
        var typeformUrl = this.getAttribute("data-url");

        typeformInstance = window.typeformEmbed.makePopup(typeformUrl, {
            mode: "popup",
            autoClose: true,
            onClose: function () {
                closeBtn.style.display = "none"; // Hide close button when Typeform is closed
            }
        });

        typeformInstance.open();
        closeBtn.style.display = "block"; // Show close button
    });

    // Close button functionality
    closeBtn.addEventListener("click", function () {
        if (typeformInstance) {
            typeformInstance.close(); // Close the Typeform popup
        }
        closeBtn.style.display = "none"; // Hide the close button
    });
});

document.addEventListener("DOMContentLoaded", function () {
    var typeformInstance; // Store the popup instance
    var openBtn = document.getElementById("openTypeform1");
    var closeBtn = document.getElementById("closeTypeform");

    openBtn.addEventListener("click", function () {
        var typeformUrl = this.getAttribute("data-url");

        typeformInstance = window.typeformEmbed.makePopup(typeformUrl, {
            mode: "popup",
            autoClose: true,
            onClose: function () {
                closeBtn.style.display = "none"; // Hide close button when Typeform is closed
            }
        });

        typeformInstance.open();
        closeBtn.style.display = "block"; // Show close button
    });

    // Close button functionality
    closeBtn.addEventListener("click", function () {
        if (typeformInstance) {
            typeformInstance.close(); // Close the Typeform popup
        }
        closeBtn.style.display = "none"; // Hide the close button
    });
});



jQuery(document).ready(function ($) {
    $('.sub_slider_list').slick({
        dots: false,
        infinite: false,
        arrows: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

});

jQuery(document).ready(function($) {
    // Check if any <section> element has the class 'seoservicepg' OR if the body has 'single-post' class
    if ($('section.seoservicepg').length || $('body').hasClass('single-post') || $('section.blogresourcepg').length) {
        $('body').addClass('fixedtabpg');
    }
})

jQuery(document).ready(function($) {
    
        $('body').addClass('fixed-header');
    
});

jQuery(document).ready(function($) {
    // Select <li> elements within the menu-primary-menu <ul> that have a child <ul>
    $('#menu-primary-menu > li:has(ul)').addClass('has-dropdown');
});

jQuery(document).ready(function($) {
    // Select <li> elements within the menu-primary-menu <ul> that have a child <ul>
    $('.mobile-submenu > li:has(ul)').addClass('has-dropdown');
});

  function toggleDropdown() {
    const dropdown = document.getElementById("myDropdown");
    dropdown.classList.toggle("show");
  }

  // Close the dropdown if the user clicks outside of it
  window.onclick = function (event) {
    if (!event.target.matches('.dropbtn')) {
      const dropdowns = document.getElementsByClassName("dropdown-content");
      for (let i = 0; i < dropdowns.length; i++) {
        const openDropdown = dropdowns[i];
        if (openDropdown.classList.contains('show')) {
          openDropdown.classList.remove('show');
        }
      }
    }
  }

        jQuery(document).ready(function() {
          jQuery('.slider_feat').slick({
            slidesToShow: 3, // Adjust to control visible slides
            slidesToScroll: 1,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 0,
            speed: 3000, // Adjust speed for smooth scrolling
            cssEase: 'linear', // Ensures smooth movement
            variableWidth: true,
          });
          jQuery(".casestudyslide").slick({
            dots: false,
            infinite: true,
            arrows: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            //centerMode: true,
            autoplaySpeed: 5000,
            responsive: [{
                breakpoint: 1200,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 1,
                },
              }, {
                breakpoint: 768,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                },
              },
              //             ,
              //                       {
              //                      breakpoint:575,
              //                      settings: {
              //                        centerMode: true,
              //                        slidesToShow: 2,
              //                        slidesToScroll: 1,
              //                      },
              //                    }
            ],
          });
        });

        $ = jQuery;
        $(document).ready(function() {
          $('.atg_slider').slick({
            arrows: true,
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            autoplay: true,
            fade: true,
            draggable: true,
            pauseOnHover: false,
            speed: 2000,
            autoplaySpeed: 2500,
          });
        });

        jQuery(document).ready(function($) {
          $('.sub_slider_list').slick({
            dots: false,
            infinite: false,
            arrows: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [{
              breakpoint: 1200,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 1
              }
            }, {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1
              }
            }, {
              breakpoint: 575,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }]
          });
        });

jQuery(document).ready(function($) {
    if ($("body").hasClass("page-template-tools")) {
        $("body").addClass("tools-separate");
    }
    
});

// Add Script for Accordion
           