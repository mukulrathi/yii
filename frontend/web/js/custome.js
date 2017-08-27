$(document).on('ready', function() {
        var slide = $('.slider-single');
        var slideTotal = slide.length - 1;
        var slideCurrent = -1;

        function slideInitial() {
            slide.addClass('proactivede');
            setTimeout(function() {
                slideRight();
            }, 500);
        }

        function slideRight() {
            if (slideCurrent < slideTotal) {
                slideCurrent++;
            } else {
                slideCurrent = 0;
            }

            if (slideCurrent > 0) {
                var preactiveSlide = slide.eq(slideCurrent - 1);
            } else {
                var preactiveSlide = slide.eq(slideTotal);
            }
            var activeSlide = slide.eq(slideCurrent);
            if (slideCurrent < slideTotal) {
                var proactiveSlide = slide.eq(slideCurrent + 1);
            } else {
                var proactiveSlide = slide.eq(0);

            }

            slide.each(function() {
                var thisSlide = $(this);
                if (thisSlide.hasClass('preactivede')) {
                    thisSlide.removeClass('preactivede preactive active proactive').addClass('proactivede');
                }
                if (thisSlide.hasClass('preactive')) {
                    thisSlide.removeClass('preactive active proactive proactivede').addClass('preactivede');
                }
            });
            preactiveSlide.removeClass('preactivede active proactive proactivede').addClass('preactive');
            activeSlide.removeClass('preactivede preactive proactive proactivede').addClass('active');
            proactiveSlide.removeClass('preactivede preactive active proactivede').addClass('proactive');
        }

        function slideLeft() {
            if (slideCurrent > 0) {
                slideCurrent--;
            } else {
                slideCurrent = slideTotal;
            }
            if (slideCurrent < slideTotal) {
                var proactiveSlide = slide.eq(slideCurrent + 1);
            } else {
                var proactiveSlide = slide.eq(0);
            }
            var activeSlide = slide.eq(slideCurrent);
            if (slideCurrent > 0) {
                var preactiveSlide = slide.eq(slideCurrent - 1);
            } else {
                var preactiveSlide = slide.eq(slideTotal);
            }
            slide.each(function() {
                var thisSlide = $(this);
                if (thisSlide.hasClass('proactivede')) {
                    thisSlide.removeClass('preactive active proactive proactivede').addClass('preactivede');
                }
                if (thisSlide.hasClass('proactive')) {
                    thisSlide.removeClass('preactivede preactive active proactive').addClass('proactivede');
                }
            });
            preactiveSlide.removeClass('preactivede active proactive proactivede').addClass('preactive');
            activeSlide.removeClass('preactivede preactive proactive proactivede').addClass('active');
            proactiveSlide.removeClass('preactivede preactive active proactivede').addClass('proactive');
        }
        var left = $('.slider-left');
        var right = $('.slider-right');
        left.on('click', function() {
            slideLeft();
        });
        right.on('click', function() {
            slideRight();
        });
        slideInitial();
    });

  var componentForm = {
    street_number: 'short_name',
    locality: 'long_name',
    administrative_area_level_1: 'short_name',
    country: 'long_name',
    postal_code: 'short_name'
  };

  function initAutocomplete() {
    autocomplete = new google.maps.places.Autocomplete(
        /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
        {types: ['geocode']});
     autocomplete.addListener('place_changed', fillInAddress);
  }
  function fillInAddress() {
    // Get the place details from the autocomplete object.
    var place = autocomplete.getPlace();
    for (var i = 0; i < place.address_components.length; i++) {
      var addressType = place.address_components[i].types[0];
      if (componentForm[addressType]) {
        var val = place.address_components[i][componentForm[addressType]];
        document.getElementById(addressType).value = val;
      }
    }
  }
