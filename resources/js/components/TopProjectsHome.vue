<template>
  <div>
    <!-- Recent Section -->
    <section class="property-section">
      <div class="auto-container">
        <div class="sec-title">
          <span class="title">Горячие предложения</span>
          <h2>ПОПУЛЯРНОЕ</h2>
        </div>

        <div v-if="loading" class="text-center">
          <img src="/images/loader.gif" style="width: 10%" class="loaderImg" />
        </div>
        <div v-else>
          <div v-if="projects.length" class="row">
            <div
              v-for="(project, index) in projects"
              :key="index"
              v-if="project.is_top && index < 6"
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
                      <a
                        ><i class="la la-calendar-minus-o"></i
                        >{{ project.created_at | moment }}</a
                      >
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

        <div class="row text-center">
          <div class="button-column col-lg-12">
            <a href="/project" class="theme-btn btn-style-one">все проекты</a>
          </div>
        </div>
      </div>
    </section>
    <!--End Property Section -->
  </div>
</template>

<script>
import axios from "axios";
import moment from "moment";

export default {
  data() {
    return {
      projects: [],
      loading: true,
    };
  },
  mounted() {
    axios.get("/api/projects").then((response) => {
      this.projects = response.data.filter((project) => project.is_top == true);
      this.loading = false;
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