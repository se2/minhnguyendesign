/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

    // Use this variable to set up the common and page specific functions. If you
    // rename this variable, you will also need to rename the namespace below.
    var Sage = {
        // All pages
        'common': {
            init: function() {
                // JavaScript to be fired on all pages
            },
            addPhoneNav: function() {
                // $('#menu-primary-navigation').append('<div class="contact-box"><strong class="phone"><span id="phone">08387508721 - 0979869226</span></strong></div>');
                // $('#menu-primary-navigation-1').append('<div class="by"><span id="copyright">© Copyright 2014, Minh Nguyen Design Co .ltd Vietnam.</span></div>');
            },
            processIsotope: function() {
                console.log('isotope');
                var $container = $('#projects-wrapper');
                $container.isotope({
                    itemSelector: '.project-element',
                });
                var $optionSets = $('#options .option-set'),
                    $optionLinks = $optionSets.find('a');

                $optionLinks.click(function() {
                    var $this = $(this);
                    // don't proceed if already selected
                    if ($this.hasClass('selected')) {
                        return false;
                    }
                    var $optionSet = $this.parents('.option-set');
                    $optionSet.find('.selected').removeClass('selected');
                    $this.addClass('selected');

                    // make option object dynamically, i.e. { filter: '.my-filter-class' }
                    var options = {},
                        key = $optionSet.attr('data-option-key'),
                        value = $this.attr('data-option-value');

                    // parse 'false' as false boolean
                    value = value === 'false' ? false : value;
                    options[key] = value;
                    if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
                        // changes in layout modes need extra logic
                        changeLayoutMode($this, options);
                    } else {
                        // otherwise, apply new options
                        $container.isotope(options);
                    }
                    return false;
                });
            },
            prettyPhotoProcess: function() {
                console.log('prettyPhoto');
                $(function() {
                    // $("a[rel^='prettyPhoto']").prettyPhoto();

                    $(document).ready(function() {
                        $("a[rel^='prettyPhoto']").prettyPhoto({
                            animation_speed: 'fast',
                            /* fast/slow/normal */
                            slideshow: 5000,
                            /* false OR interval time in ms */
                            autoplay_slideshow: false,
                            /* true/false */
                            opacity: 0.70,
                            /* Value between 0 and 1 */
                            show_title: true,
                            /* true/false */
                            allow_resize: true,
                            /* Resize the photos bigger than viewport. true/false */
                            default_width: 500,
                            default_height: 344,
                            counter_separator_label: '/',
                            /* The separator for the gallery counter 1 "of" 2 */
                            theme: 'pp_default' /* light_rounded / dark_rounded / light_square / dark_square / facebook */
                        });
                    });

                    $('a[data-rel]').each(function() {
                        $(this).attr('rel', $(this).attr('data-rel')).removeAttr('data-rel');
                    });

                });
            },
            finalize: function() {
                // JavaScript to be fired on all pages, after page specific JS is fired
                var self = this;
                self.addPhoneNav();
                self.processIsotope();
                self.prettyPhotoProcess();
            }
        },
        // Home page
        'home': {
            init: function() {
                // JavaScript to be fired on the home page
                // $('body').addClass('no-overflow');
                $('.home-slider-wrapper').slick({
                    arrows: true,
                    dots: false,
                    fade: true,
                    speed: 600,
                    infinite: true,
                    autoplay: true,
                    autoplaySpeed: 5000
                });
            },
            finalize: function() {
                // JavaScript to be fired on the home page, after the init JS
            }
        },
        // About us page, note the change from about-us to about_us.
        'about': {
            init: function() {
                // JavaScript to be fired on the about us page
            }
        },
        'contact': {
            init: function() {

            }
        }
    };

    // The routing fires all common scripts, followed by the page specific scripts.
    // Add additional events for more control over timing e.g. a finalize event
    var UTIL = {
        fire: function(func, funcname, args) {
            var fire;
            var namespace = Sage;
            funcname = (funcname === undefined) ? 'init' : funcname;
            fire = func !== '';
            fire = fire && namespace[func];
            fire = fire && typeof namespace[func][funcname] === 'function';

            if (fire) {
                namespace[func][funcname](args);
            }
        },
        loadEvents: function() {
            // Fire common init JS
            UTIL.fire('common');

            // Fire page-specific init JS, and then finalize JS
            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
                UTIL.fire(classnm);
                UTIL.fire(classnm, 'finalize');
            });

            // Fire common finalize JS
            UTIL.fire('common', 'finalize');
        }
    };

    // Load Events
    $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
