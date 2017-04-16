<!-- SLIDER REVOLUTION INITIALIZATION  -->
    <script type="text/javascript">
      jQuery(document).ready(function() {
          
        jQuery("#rev_slider_280_1").show().revolution({
          sliderType: "hero",
          jsFileLocation: "elementary/revo-slider/js/",
          sliderLayout: "fullwidth",
          dottedOverlay: "none",
          delay: 9000,
          responsiveLevels: [1240, 1024, 778, 480],
          visibilityLevels: [1240, 1024, 778, 480],
          gridwidth: [1240, 1024, 778, 480],
          gridheight: [500, 450, 400, 400],
          lazyType: "none",
          parallax: {
            type: "off",
            origo: "slidercenter",
            speed: 1000,
            levels: [0],
            type: "scroll",
            disable_onmobile: "on"
          },
          shadow: 0,
          spinner: "spinner2",
          autoHeight: "off",
          fullScreenAutoWidth: "off",
          fullScreenAlignForce: "off",
          fullScreenOffsetContainer: "",
          fullScreenOffset: "",
          disableProgressBar: "on",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            disableFocusListener: false,
          }
        });
       
      }); /*ready*/
    </script>