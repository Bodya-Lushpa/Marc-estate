<template>
  <div>
    <div class="sidebar-page-container">
      <div class="auto-container">
        <div class="upper-info-box">
          <div class="row align-items-center">
            <div class="about-property col-lg-8 col-md-12 col-sm-12">
              <h2>{{ project.title }}</h2>
              <div class="location">
                <i class="la la-map-marker"></i> {{ project.address }}
              </div>
            </div>
            <div class="price-column col-lg-4 col-md-12 col-sm-12">
              <span class="title">Квартиры от</span>
              <div class="price">
                $ {{ parseInt(project.price).toLocaleString("ru") }}
              </div>
              <span class="status">{{ project.status.title }}</span>
            </div>
          </div>
        </div>
        <div class="row clearfix">
          <!--Content Side-->
          <div class="content-side col-lg-8 col-md-12 col-sm-12">
            <div class="property-detail">
              <div class="upper-box">
                <div class="carousel-outer">
                  <ul
                    class="image-carousel owl-carousel owl-theme"
                    id="image-carousel"
                  >
                    <li v-for="(image, index) in project.images" :key="index">
                      <a
                        :href="image.img"
                        class="lightbox-image"
                        style="display: block"
                      >
                        <blur-hash-image
                          height="80"
                          :hash="image.hashimg"
                          :src="image.img"
                        />
                      </a>
                    </li>
                  </ul>

                  <ul class="thumbs-carousel owl-carousel owl-theme">
                    <li v-for="(image, index) in project.images" :key="index">
                      <blur-hash-image
                        height="80"
                        :hash="image.hashimg"
                        :src="image.img"
                        alt=""
                      />
                    </li>
                  </ul>
                </div>
              </div>

              <!-- Property Features -->
              <div class="property-features">
                <h4>Важная информация</h4>
                <ul class="list-style-one">
                  <li>
                    Тип:
                    <span v-for="(real, index) in project.reals" :key="index"
                      >{{ real.title }}
                    </span>
                  </li>
                  <li>Страна: {{ project.country.title }}</li>
                  <li>Город: {{ project.city.title }}</li>
                  <li
                    v-for="(
                      important_information, index
                    ) in project.important_information"
                    :key="index"
                  >
                    {{ important_information.title }}
                  </li>
                </ul>
              </div>

              <div class="lower-content">
                <h4>Описание проекта</h4>
                <div v-html="project.description"></div>
              </div>

              <!-- Property Features -->
              <div class="property-features">
                <h4>Преимущества</h4>
                <ul class="list-style-one">
                  <li
                    v-for="(home_ameniti, index) in project.home_amenities"
                    :key="index"
                  >
                    {{ home_ameniti.title }}
                  </li>
                </ul>
              </div>

              <!-- Flooring Tabs -->
              <div class="flooring-tabs tabs-box" v-if="project.plans[0].rooms">
                <div class="clearfix">
                  <h4>Планировки</h4>
                  <ul class="tab-buttons">
                    <li
                      @click="selectRooms('all')"
                      class="theme-btn btn-style-one"
                      :class="[selectRoom == 'all' ? 'active-btn' : '']"
                    >
                      Все
                    </li>
                    <li
                      v-for="(planRoom, index) in roomsTitle()"
                      :key="index"
                      @click="selectRooms(planRoom.rooms)"
                      class="theme-btn btn-style-one"
                      :class="[
                        selectRoom == planRoom.rooms ? 'active-btn' : '',
                      ]"
                    >
                      {{ planRoom.plan_room.title }}
                    </li>
                  </ul>
                </div>

                <div class="tabs-content">
                  <div class="tab active-tab">
                    <div class="image-box">
                      <div
                        v-for="(plan, index) in filterRooms()"
                        :key="index"
                        v-if="index < showPlans"
                        class="pan-item"
                      >
                        <a
                          :href="plan.img"
                          class="lightbox-image plan-item__img_wrap"
                        >
                          <img :src="plan.img" alt="" class="plan-item__img" />
                        </a>
                        <div class="plan-item__desc">
                          <div class="plan-item__title-block">
                            <h4>{{ rooms(plan.id) }}</h4>
                          </div>
                          <div class="float-left">
                            <div class="d-flex justify-content-between">
                              <p class="plan-item__room">
                                от $
                                {{ parseInt(plan.price).toLocaleString("ru") }}
                              </p>
                              <p class="plan-item__room">
                                от {{ plan.area }} м<sup>2</sup>
                              </p>
                            </div>
                            <p>
                              {{ plan.description }}
                            </p>
                            <a
                              href="#"
                              class="theme-btn btn-style-one"
                              data-toggle="modal"
                              data-target=".modal-consultation"
                              >Получить консультацию</a
                            >
                          </div>
                        </div>
                      </div>

                      <div class="text-center plan-item__more">
                        <button
                          class="theme-btn btn-style-one"
                          @click="showPlans = filterRooms().length"
                          v-if="
                            filterRooms().length > 3 &&
                            filterRooms().length != showPlans
                          "
                        >
                          ПОКАЗАТЬ ЕЩЕ
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Nearest Places -->
              <!-- <div class="nearest-places">
                <h4>Расположение</h4>
                <div class="outer-box clearfix">
                  <div
                    ref="map"
                    id="map"
                    style="height: 350px; width: 100%"
                  ></div>
                </div>
              </div> -->

              <formFull :csrf="csrf" :title_project="project.title"></formFull>
            </div>
          </div>

          <!--Sidebar Side-->
          <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
            <aside class="sidebar default-sidebar">
              <!-- Agent Widget -->

              <formWidget
                :csrf="csrf"
                :title_project="project.title"
              ></formWidget>

              <searchProjectsFilter></searchProjectsFilter>

              <typeReal></typeReal>

              <recentlyAdded></recentlyAdded>
            </aside>
          </div>
        </div>
      </div>
    </div>

    <clientSection></clientSection>

    <modalFormConsultation></modalFormConsultation>

    <FilterProjectsModal
      @sort="changeSort"
      class="d-md-none notSort"
    ></FilterProjectsModal>
  </div>
</template>

<script>
import axios from "axios";
import searchProjectsFilter from "../widgets/SearchProjectsFilter.vue";
import typeReal from "../widgets/TypeReal.vue";
import recentlyAdded from "../widgets/RecentlyAdded.vue";
import formWidget from "../forms/FormConsultationWidget.vue";
import formFull from "../forms/FormConsultationFull.vue";
import clientSection from "../ClientsSection.vue";
import modalFormConsultation from "../modal/FormConsultation.vue";
const FilterProjectsModal = () => import("../modal/FilterProjects.vue");

export default {
  components: {
    clientSection,
    modalFormConsultation,
    searchProjectsFilter,
    typeReal,
    recentlyAdded,
    formWidget,
    formFull,
    FilterProjectsModal,
  },
  props: {
    slug: String,
    csrf: String,
  },
  data() {
    return {
      project: [],
      plans: [],
      planRooms: [],
      selectRoom: "all",
      showPlans: 3,
    };
  },
  mounted() {
    axios.get("/api/projects/" + this.slug).then((response) => {
      this.project = response.data;
      console.log(this.project);
    });
    axios.get("/api/plans/").then((response) => {
      this.plans = response.data;
    });
  },
  updated() {
    // var map_parameters = {
    //   center: {
    //     lat: "47.451348",
    //     lng: "65.170465",
    //   },
    //   zoom: 8,
    // };
    // var map = new google.maps.Map(this, map_parameters);
    // var position1 = {
    //   position: {
    //     lat: "47.451348",
    //     lng: "65.170465",
    //   },
    //   map: map,
    // };
    // var marker1 = new google.maps.Marker(position1);

    // Product Carousel Slider
    $(".lightbox-image").fancybox({
      openEffect: "fade",
      closeEffect: "fade",
      helpers: {
        media: {},
      },
    });

    // Product Carousel Slider
    if (
      $(".property-detail .image-carousel").length &&
      $(".property-detail .thumbs-carousel").length
    ) {
      var $sync1 = $(".property-detail .image-carousel"),
        $sync2 = $(".property-detail .thumbs-carousel"),
        flag = false,
        duration = 500;

      $sync1
        .owlCarousel({
          loop: false,
          items: 1,
          margin: 20,
          nav: false,
          navText: [
            '<span class="icon fa fa-angle-left"></span>',
            '<span class="icon fa fa-angle-right"></span>',
          ],
          dots: false,
          autoplay: true,
          autoplayTimeout: 5000,
        })
        .on("changed.owl.carousel", function (e) {
          if (!flag) {
            flag = false;
            $sync2.trigger("to.owl.carousel", [e.item.index, duration, true]);
            flag = false;
          }
        });

      $sync2
        .owlCarousel({
          loop: false,
          margin: 10,
          items: 1,
          nav: true,
          navText: [
            '<span class="icon la la-arrow-circle-o-left"></span>',
            '<span class="icon la la-arrow-circle-o-right"></span>',
          ],
          dots: false,
          center: false,
          autoplay: true,
          autoplayTimeout: 5000,
          responsive: {
            0: {
              items: 2,
              autoWidth: false,
            },
            400: {
              items: 2,
              autoWidth: false,
            },
            600: {
              items: 3,
              autoWidth: false,
            },
            800: {
              items: 5,
              autoWidth: false,
            },
            1024: {
              items: 4,
              autoWidth: false,
            },
          },
        })
        .on("click", ".owl-item", function () {
          $sync1.trigger("to.owl.carousel", [$(this).index(), duration, true]);
        })
        .on("changed.owl.carousel", function (e) {
          if (!flag) {
            flag = true;
            $sync1.trigger("to.owl.carousel", [e.item.index, duration, true]);
            flag = false;
          }
        });
    }
  },
  methods: {
    selectRooms(planRoom) {
      this.showPlans = 3;
      this.selectRoom = planRoom;
    },
    rooms(room_id) {
      return this.plans.filter((plan) => plan.id == room_id)[0].plan_room.title;
    },
    filterRooms() {
      if (this.selectRoom == "all") {
        return this.project.plans;
      } else {
        return this.project.plans.filter(
          (plan) => plan.rooms == this.selectRoom
        );
      }
    },
    roomsTitle() {
      this.planRooms = this.plans.filter(
        (plan) => plan.project_id == this.project.id
      );
      const res = this.planRooms.reduce((o, i) => {
        if (!o.find((v) => v.rooms == i.rooms)) {
          o.push(i);
        }
        return o;
      }, []);
      return res;
    },
  },
};
</script>