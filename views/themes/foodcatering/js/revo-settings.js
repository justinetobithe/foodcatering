/* https://learn.jquery.com/using-jquery-core/document-ready/ */
$(document).ready(function() {

  /* initialize the slider based on the Slider's ID attribute from the wrapper above */
  $('#rev_slider_1').show().revolution({
    sliderType:"standard",
    fullScreenAlignForce: 'off',
    responsiveLevels:[1200,992,768,576],
    gridwidth:[1200,992,768,576],
    gridheight:[600,600,600,500],
    // responsiveLevels: [1200, 992, 768, 576],
    // gridwidth:[992, 890, 720, 610],
    // gridheight:[650, 600, 500, 440],
    // visibilityLevels:[992, 890, 720, 610],
    //fullScreenOffsetContainer: '.header .top',
    sliderLayout:"fullwidth",
    autoHeight:"on",
    viewPort: {
       enable: true,
       outof: 'wait',
       visible_area: '80%',
       presize: true
    },
    navigation: {
      arrows: {
        enable: true,
        style: 'uranus',
        hide_onleave: false,
        hide_onmobile: false,
        tmp: '<h6 class="text-uppercase prevnext"></h6>',
        left : {
          h_align:"center",
          v_align:"bottom",
          h_offset:0,
          v_offset:0,
        },
        right : {
          h_align:"center",
          v_align:"bottom",
          h_offset:0,
          v_offset:0
        }
      },
      bullets: {
        enable: true,
        style: 'hesperiden',
        hide_onleave: false,
        h_align: 'center',
        v_align: 'bottom',
        h_offset: 0,
        v_offset: 25,
        space: 30
      },
    },
    // debugMode: true
  });
});
