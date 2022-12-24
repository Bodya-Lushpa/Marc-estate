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
                    <img :src="project.images[0].img" alt="" />
                  </figure>
                  <span class="for">ПРОДАЖА</span>
                  <span class="featured" v-if="project.is_top">Популярное</span>
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

        <!--Post Share Options-->
        <div class="styled-pagination">
          <ul class="clearfix">
            <li class="prev" v-if="page > 1" @click="page = page - 1">
              <a type="click"><span>Пред</span></a>
            </li>
            <li
              v-for="(pageNumber, key) in pageCount"
              :key="key"
              :class="[pageNumber == page ? 'active' : '']"
              @click="page = pageNumber"
            >
              <a type="click"
                ><span>{{ pageNumber }}</span></a
              >
            </li>
            <li class="next" v-if="hasNextPage" @click="page = page + 1">
              <a type="submit"><span>След</span></a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!--End Property Filter Section -->
  </div>
</template>

<script>
import axios from "axios";
import moment from "moment";

export default {
  data() {
    return {
      projects: [],
      typeReals: [],
      page: 1,
      pageCount: 1,
      hasNextPage: true,
      isActive: true,
      windowData: "",
      windowSearch: "",
    };
  },
  created() {
    this.windowSearch = window.location.search;
    console.log(this.windowSearch);
    this.windowData = Object.fromEntries(
      new URL(window.location).searchParams.entries()
    );
  },
  methods: {
    filteredProjects() {
      const windowData = Object.fromEntries(
        new URL(window.location).searchParams.entries()
      );
      const start = (this.page - 1) * 6;
      const end = this.page * 6;
      this.pageCount = Math.ceil(this.projects.length / 6);
      this.hasNextPage = this.projects.length > end;

      if (windowData.search) {
        const filteredProject = this.projects.filter(function (project) {
          return (
            project.title
              .toUpperCase()
              .indexOf(windowData.search.toUpperCase()) !== -1
          );
        });
        this.pageCount = Math.ceil(filteredProject.length / 6);
        this.hasNextPage = filteredProject.length > end;
        return filteredProject.slice(start, end);
      }

      if (windowData.cityhome) {
        var filteredProjectCity = this.projects.filter(function (project) {
          return project.city.slug.includes(windowData.cityhome);
        });
        this.pageCount = Math.ceil(filteredProjectCity.length / 6);
        this.hasNextPage = filteredProjectCity.length > end;
        return filteredProjectCity.slice(start, end);
      }

      if (windowData.typereal) {
        const filteredProject = this.projects.filter(function (project) {
          return project.reals.some(function s(real) {
            return real.slug == windowData.typereal;
          });
        });
        this.pageCount = Math.ceil(filteredProject.length / 6);
        this.hasNextPage = filteredProject.length > end;
        return filteredProject.slice(start, end);
      }

      if (windowData.country) {
        var filteredProjectCountry = this.projects.filter(function (project) {
          return project.country.slug.includes(windowData.country);
        });
        var filteredProjectCity = filteredProjectCountry.filter(function (
          project
        ) {
          return project.city.slug.includes(windowData.city);
        });
        var filteredProjectRoom = filteredProjectCity.filter(function (
          project
        ) {
          return project.plans.some(function s(plan) {
            return plan.rooms == windowData.plan;
          });
        });
        var filteredProjectStatus = filteredProjectRoom.filter(function (
          project
        ) {
          return project.status.slug.includes(windowData.status);
        });
        var price = windowData.price.split(" - ");
        var filteredProjectPrice = filteredProjectStatus.filter(function (
          project
        ) {
          return project.price > price[0] && project.price < price[1];
        });
        this.pageCount = Math.ceil(filteredProjectPrice.length / 6);
        this.hasNextPage = filteredProjectPrice.length > end;
        return filteredProjectPrice.slice(start, end);
      }

      return this.projects.slice(start, end);
    },
  },
  mounted() {
    axios.get("/api/projects").then((response) => {
      this.projects = response.data;
    });
    axios.get("/api/type-real").then((response) => {
      this.typeReals = response.data;
    });
  },
  filters: {
    moment: function (date) {
      moment.locale("kk");
      return moment(date).format("L");
    },
  },
};
</script>