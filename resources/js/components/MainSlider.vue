<template>
  <div>
    <!--Main Slider-->
    <section class="main-slider">
      <div
        class="rev_slider_wrapper fullwidthbanner-container"
        id="rev_slider_one_wrapper"
        data-source="gallery"
      >
        <div
          class="rev_slider fullwidthabanner"
          id="rev_slider_one"
          data-version="5.4.1"
        >
          <ul>
            <!-- Slide -->
            <li
              v-for="project in this.projects"
              v-if="project.is_slider"
              :data-description="project.title"
              data-easein="default"
              data-easeout="default"
              data-fsmasterspeed="1500"
              data-fsslotamount="7"
              data-fstransition="fade"
              data-hideafterloop="0"
              data-hideslideonmobile="off"
              :data-index="project.id"
              data-masterspeed="default"
              data-saveperformance="off"
              data-slotamount="default"
              :data-thumb="project.images_for_slider"
              :data-title="project.title"
              data-transition="parallaxvertical"
            >
              <img
                alt=""
                class="rev-slidebg"
                data-bgfit="cover"
                data-bgparallax="10"
                data-bgposition="center center"
                data-bgrepeat="no-repeat"
                data-no-retina=""
                :src="project.images_for_slider"
              />

              <div
                class="tp-caption"
                data-paddingbottom="[0,0,0,0]"
                data-paddingleft="[0,0,0,0]"
                data-paddingright="[0,0,0,0]"
                data-paddingtop="[0,0,0,0]"
                data-responsive_offset="on"
                data-type="text"
                data-height="none"
                data-whitespace="nowrap"
                data-width="auto"
                data-text-align="center"
                data-hoffset="['10','50','0','0']"
                data-voffset="['-20','-20','-20','-20']"
                data-x="['right','right','center','center']"
                data-y="['middle','middle','middle','middle']"
                data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:50px;opacity:0;","ease":"Power3.easeInOut"}]'
              >
                <div class="content-box">
                  <div class="inner-box">
                    <div class="title-box">
                      <h3>{{ project.title }}</h3>
                      <p>{{ project.address }}</p>
                    </div>
                    <div class="price">
                      ${{ project.price.toLocaleString("ru") }}
                    </div>
                    <div class="btn-box">
                      <a
                        :href="'project/' + project.slug"
                        class="theme-btn btn-style-one"
                        >ПОДРОБНЕЕ</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!--End Main Slider-->
  </div>
</template>

<script>
import axios from "axios";
import moment from "moment";

export default {
  data() {
    return {
      projects: [],
    };
  },
  mounted() {
    axios.get("/api/projects").then((response) => {
      this.projects = response.data;
    });
  },
  updated() {
    (function ($) {
      $("#rev_slider_one")
        .show()
        .revolution({
          sliderType: "standard",
          jsFileLocation: "plugins/revolution/js/",
          sliderLayout: "fullwidth",
          dottedOverlay: "yes",
          delay: 5000,
          navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            mouseScrollReverse: "default",
            onHoverStop: "off",
            touch: {
              touchenabled: "on",
              touchOnDesktop: "off",
              swipe_threshold: 75,
              swipe_min_touches: 1,
              swipe_direction: "horizontal",
              drag_block_vertical: false,
            },
            arrows: {
              style: "metis",
              enable: true,
              hide_onmobile: true,
              hide_under: 600,
              hide_onleave: true,
              tmp: "",
              left: {
                h_align: "left",
                v_align: "center",
                h_offset: 0,
                v_offset: 0,
              },
              right: {
                h_align: "right",
                v_align: "center",
                h_offset: 0,
                v_offset: 0,
              },
            },
          },
          responsiveLevels: [1200, 1040, 778, 480],
          visibilityLevels: [1200, 1040, 778, 480],
          gridwidth: [1170, 1040, 778, 540],
          gridheight: [720, 650, 650, 650],
          lazyType: "none",
          parallax: {
            type: "scroll",
            origo: "enterpoint",
            speed: 400,
            levels: [
              5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55,
            ],
          },
          shadow: 0,
          spinner: "off",
          stopLoop: "off",
          stopAfterLoops: -1,
          stopAtSlide: -1,
          shuffle: "off",
          autoHeight: "off",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
          },
        });
    })(window.jQuery);
  },
  filters: {
    moment: function (date) {
      moment.locale("kk");
      return moment(date).format("L");
    },
  },
};
</script>