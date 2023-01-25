<template>
  <div>
    <!-- Property Filter Section -->
    <section class="property-filter-section">
      <div class="auto-container">
        <!--MixitUp Galery-->
        <div class="mixitup-gallery">
          <div class="upper-box clearfix">
            <div class="sec-title">
              <span class="title">НАЙТИ СВОЙ ДОМ В ВАШЕМ ГОРОДЕ</span>
              <h2>ТИПЫ НЕДВИЖИМОСТИ</h2>
            </div>
            <!--Filter-->
            <div class="filters">
              <ul class="filter-tabs filter-btns clearfix">
                <li
                  class="filter"
                  :class="[windowSearch == '' ? 'active' : '']"
                >
                  <a href="/project">Все</a>
                </li>
                <li
                  v-for="(typeReal, key) in typeReals"
                  :key="key"
                  class="filter"
                  :class="[
                    windowData.typereal == typeReal.slug ? 'active' : '',
                  ]"
                  data-role="button"
                  data-filter="all"
                >
                  <a :href="'/project?typereal=' + typeReal.slug">{{
                    typeReal.title
                  }}</a>
                </li>
              </ul>
            </div>
          </div>

          <FilterProjects class="d-none d-md-block"></FilterProjects>

          <div class="row mb-4">
            <div class="col-lg-8">
              <ul class="d-flex flex-wrap filterActiveList">
                <li
                  v-for="(activeFilter, index) in activeFilters"
                  :key="index"
                  class=""
                >
                  <a :href="activeFilter.link" class="filterActive">
                    <span>{{ activeFilter.title }}</span>
                    <span class="la la-close"></span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-lg-4 d-none d-md-flex justify-content-md-end">
              <p class="mr-2">Сортировка:</p>
              <div class="form-group">
                <jquerySelectmenu
                  name="sort"
                  class="custom-select-box"
                  v-model="sort"
                >
                  <option value="date">По дате добавления</option>
                  <option value="abc">По алфавиту</option>
                  <option value="priceСheap">От дешевых к дорогим</option>
                  <option value="priceExpensive">От дорогих к дешевым</option>
                </jquerySelectmenu>
              </div>
            </div>
          </div>

          <div v-if="loading" class="text-center">
            <img
              src="/images/loader.gif"
              style="width: 10%"
              class="loaderImg"
            />
          </div>
          <div v-else>
            <div v-if="filteredProjects().length" class="filter-list row">
              <!-- Property Block -->
              <div
                v-for="(project, index) in filteredProjects()"
                :key="index"
                class="
                  property-block
                  all
                  mix
                  restaurent
                  apprtment
                  form
                  col-xl-4 col-lg-6 col-md-6 col-sm-12
                "
              >
                <div class="inner-box">
                  <div class="image-box">
                    <figure class="image">
                      <blur-hash-image
                        width="400"
                        height="250"
                        :hash="project.hashimg"
                        :src="project.images[0].img"
                        alt=""
                      />
                    </figure>
                    <span class="for">ПРОДАЖА</span>
                    <span class="featured" v-if="project.is_top"
                      >Популярное</span
                    >
                    <ul class="option-box">
                      <li>
                        <a
                          :href="project.images[0].img"
                          class="lightbox-image"
                          :data-fancybox="'property' + project.id"
                          ><i class="la la-camera"></i
                        ></a>
                      </li>
                    </ul>
                    <ul class="info clearfix">
                      <li>
                        <i class="la la-calendar-minus-o"></i
                        >{{ project.created_at | moment }}
                      </li>
                    </ul>
                  </div>
                  <div class="lower-content">
                    <ul class="tags">
                      <li v-for="real in project.reals">
                        <a href="#">{{ real.title }}</a
                        >,
                      </li>
                    </ul>
                    <h3>
                      <a :href="'/project/' + project.slug">{{
                        project.title
                      }}</a>
                    </h3>
                    <div class="lucation">
                      <i class="la la-map-marker"></i> {{ project.address }}
                    </div>
                    <ul class="property-info d-none clearfix">
                      <li><i class="flaticon-dimension"></i> 356 Sq-Ft</li>
                      <li><i class="flaticon-bed"></i> 4 Bedrooms</li>
                      <li><i class="flaticon-car"></i> 2 Garage</li>
                      <li><i class="flaticon-bathtub"></i> 3 Bathroom</li>
                    </ul>
                    <div class="property-price clearfix">
                      <div class="read-more">
                        <a :href="'/project/' + project.slug" class="theme-btn"
                          >Подробнее</a
                        >
                      </div>
                      <div class="price">
                        $ {{ project.price.toLocaleString("ru") }}
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <p v-else class="text-center">Данные отсутствуют</p>
          </div>
        </div>
        <!--Post Share Options-->
        <div class="styled-pagination">
          <ul class="clearfix">
            <li class="prev" v-if="page > 1" @click="page = page - 1">
              <a href="#" type="click"><span>Пред</span></a>
            </li>
            <li
              v-for="(pageNumber, key) in pageCount"
              v-if="pageNumber - page <= 2 && page - pageNumber <= 2"
              :key="key"
              :class="[pageNumber == page ? 'active' : '']"
              @click="page = pageNumber"
            >
              <a href="#" type="click"
                ><span>{{ pageNumber }}</span></a
              >
            </li>
            <li class="next" v-if="hasNextPage" @click="page = page + 1">
              <a href="#" type="click"><span>След</span></a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!--End Property Filter Section -->

    <clientSection></clientSection>
    <FilterProjectsModal
      @sort="changeSort"
      class="d-md-none"
    ></FilterProjectsModal>
  </div>
</template>

<script>
import axios from "axios";
import moment from "moment";
import jquerySelectmenu from "../widgets/JquerySelectMenu.vue";
import clientSection from "../ClientsSection.vue";

const FilterProjects = () => import("../widgets/FilterProjects.vue");
const FilterProjectsModal = () => import("../modal/FilterProjects.vue");

export default {
  components: {
    clientSection,
    jquerySelectmenu,
    FilterProjects,
    FilterProjectsModal,
  },
  data() {
    return {
      projects: [],
      typeReals: [],
      planRoom: [],
      loading: true,
      page: 1,
      pageCount: 1,
      hasNextPage: true,
      isActive: true,
      windowData: "",
      windowSearch: "",
      sort: "date",
      activeFilters: [],
    };
  },
  created() {
    this.windowSearch = window.location.search;
    this.windowData = Object.fromEntries(
      new URL(window.location).searchParams.entries()
    );
  },
  methods: {
    changeSort(sort) {
      this.sort = sort;
    },
    filteredProjects() {
      const start = (this.page - 1) * 12;
      const end = this.page * 12;
      this.pageCount = Math.ceil(this.projects.length / 12);
      this.hasNextPage = this.projects.length > end;

      if (this.sort == "date") {
        return this.projects.slice(start, end);
      }
      if (this.sort == "abc") {
        const sortProjects = this.projects.slice().sort(function (a, b) {
          if (a.title.toLowerCase() < b.title.toLowerCase()) {
            return -1;
          }
        });
        return sortProjects.slice(start, end);
      }
      if (this.sort == "priceСheap") {
        const sortProjects = this.projects.slice().sort(function (a, b) {
          return a.price - b.price;
        });
        return sortProjects.slice(start, end);
      }
      if (this.sort == "priceExpensive") {
        const sortProjects = this.projects.slice().sort(function (a, b) {
          return b.price - a.price;
        });
        return sortProjects.slice(start, end);
      }
    },
  },
  mounted() {
    axios.get("/api/type-real").then((response) => {
      this.typeReals = response.data;
    });
    axios.get("/api/plan-room").then((response) => {
      this.planRooms = response.data;
    });
    axios
      .get("/api/projects")
      .then((response) => {
        this.projects = response.data;

        const windowData = Object.fromEntries(
          new URL(window.location).searchParams.entries()
        );

        if (windowData.search) {
          this.projects = response.data.filter(function (project) {
            return (
              project.title
                .toUpperCase()
                .indexOf(windowData.search.toUpperCase()) !== -1
            );
          });
        }
        if (windowData.cityhome) {
          this.projects = response.data.filter(function (project) {
            return project.city.slug.includes(windowData.cityhome);
          });
        }
        if (windowData.typereal) {
          this.projects = response.data.filter((project) => {
            return project.reals.some(
              (real) => real.slug == windowData.typereal
            );
          });
          let activeTypeReals = this.typeReals.filter(
            (typeReal) => typeReal.slug == windowData.typereal
          );
          this.activeFilters.push({
            title: activeTypeReals[0].title,
            link: "/project",
          });
        }
        if (windowData.country) {
          if (windowData.country == "all") {
            var filteredProjectCountry = response.data;
          } else {
            var filteredProjectCountry = response.data.filter(function (
              project
            ) {
              return project.country.slug.includes(windowData.country);
            });
            let activeTypeReals = this.typeReals.filter(
              (typeReal) => typeReal.slug == windowData.typereal
            );
            this.activeFilters.push({
              title: filteredProjectCountry[0].country.title,
              link: "/project?country=all&city=all&plan=all&status=all&price=50000+-+2000000",
            });
          }
          if (windowData.city == "all") {
            var filteredProjectCity = filteredProjectCountry;
          } else {
            var filteredProjectCity = filteredProjectCountry.filter(function (
              project
            ) {
              return project.city.slug.includes(windowData.city);
            });
            this.activeFilters.push({
              title: filteredProjectCity[0].city.title,
              link: "/project?country=all&city=all&plan=all&status=all&price=50000+-+2000000",
            });
          }
          if (windowData.plan == "all") {
            var filteredProjectRoom = filteredProjectCity;
          } else {
            var filteredProjectRoom = filteredProjectCity.filter(function (
              project
            ) {
              return project.plans.some(function s(plan) {
                return plan.rooms == windowData.plan;
              });
            });
            let activePlanRooms = this.planRooms.filter(
              (planRoom) => planRoom.id == windowData.plan
            );
            this.activeFilters.push({
              title: activePlanRooms[0].title,
              link: "/project?country=all&city=all&plan=all&status=all&price=50000+-+2000000",
            });
          }
          if (windowData.status == "all") {
            var filteredProjectStatus = filteredProjectRoom;
          } else {
            var filteredProjectStatus = filteredProjectRoom.filter(function (
              project
            ) {
              return project.status.slug.includes(windowData.status);
            });
            this.activeFilters.push({
              title: filteredProjectStatus[0].status.title,
              link: "/project?country=all&city=all&plan=all&status=all&price=50000+-+2000000",
            });
          }
          var price = windowData.price.split(" - ");
          this.projects = filteredProjectStatus.filter(function (project) {
            return project.price > price[0] && project.price < price[1];
          });
        }
      })
      .finally(() => {
        this.loading = false;
      });

    $(".custom-select-box")
      .selectmenu()
      .selectmenu("menuWidget")
      .addClass("overflow");
  },
  filters: {
    moment: function (date) {
      moment.locale("kk");
      return moment(date).format("L");
    },
  },
  watch: {
    sort: function () {
      this.page = 1;
    },
  },
};
</script>