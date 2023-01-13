<template>
  <div>
    <!--Page Title-->
    <section
      class="page-title"
      style="
        background-image: url('/images/background/pexels-kaboompics-com-6053.jpg');
      "
    >
      <div class="auto-container">
        <div class="inner-container clearfix">
          <h1>Новости</h1>
          <ul class="bread-crumb clearfix">
            <li><a href="/">Главная</a></li>
            <li>{{ news.title }}</li>
          </ul>
        </div>
      </div>
    </section>
    <!--End Page Title-->

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container left-sidebar">
      <div class="auto-container">
        <div class="row">
          <!--Content Side-->
          <div class="content-side col-lg-8 col-md-12 col-sm-12">
            <div class="blog-detail">
              <div class="upper-box">
                <div class="image-box">
                  <figure class="image">
                    <img :src="news.img" alt="" />
                  </figure>
                </div>
              </div>

              <div class="lower-content">
                <ul class="info">
                  <li>
                    <span>{{ news.created_at | moment }}</span>
                  </li>
                </ul>
                <h2>{{ news.title }}</h2>
                <div v-html="news.text"></div>
              </div>

              <!-- Post Share Option -->
              <div class="post-share-options clearfix d-none">
                <div class="pull-left clearfix">
                  <span class="icon la la-tags"></span>
                  <ul class="tags">
                    <li><a href="#">Apartment,</a>,</li>
                    <li><a href="#">Condo,</a>,</li>
                    <li><a href="#">Multi Family,</a></li>
                    <li><a href="#">Villa</a></li>
                  </ul>
                </div>
                <div class="pull-right clearfix">
                  <ul class="social-icon clearfix">
                    <li>
                      <a href="#"><i class="la la-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-google-plus"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-dribbble"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="la la-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!--Sidebar Side-->
          <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
            <aside class="sidebar default-sidebar">
              <search-projects-filter></search-projects-filter>

              <type-real></type-real>

              <recently-added></recently-added>
            </aside>
          </div>
        </div>
      </div>
    </div>
    <!-- End Sidebar Container -->
  </div>
</template>

<script>
import axios from "axios";
import moment from "moment";

export default {
  props: {
    slug: String,
  },
  data() {
    return {
      news: [],
    };
  },
  mounted() {
    axios.get("/api/news/" + this.slug).then((response) => {
      this.news = response.data;
    });
    $(".price-range-slider").slider({
      range: true,
      min: 0,
      max: 10000,
      values: [1000, 8000],
      slide: function (event, ui) {
        $("input.price-amount").val(ui.values[0] + " - " + ui.values[1]);
      },
    });
    $("input.price-amount").val(
      $(".price-range-slider").slider("values", 0) +
        " - $" +
        $(".price-range-slider").slider("values", 1)
    );
  },
  filters: {
    moment: function (date) {
      moment.locale("kk");
      return moment(date).format("L");
    },
  },
};
</script>