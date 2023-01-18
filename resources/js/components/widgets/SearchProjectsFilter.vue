<template>
  <!-- Categories -->
  <div class="sidebar-widget search-properties">
    <div class="sidebar-title"><h2>ПОИСК НЕДВИЖИМОСТИ</h2></div>
    <!-- Property Search Form -->
    <div class="property-search-form style-three">
      <form method="GET" action="/project">
        <div class="row no-gutters">
          <!-- Form Group -->
          <div class="form-group">
            <jquerySelectmenu
              name="country"
              class="custom-select-box"
              v-model="slug_country"
            >
              <option value="all">Все страны</option>
              <option
                v-for="(country, index) in counties"
                :key="index"
                :value="country.slug"
              >
                {{ country.title }}
              </option>
            </jquerySelectmenu>
          </div>

          <!-- Form Group -->
          <div class="form-group">
            <select name="city" id="city" class="custom-select-box">
              <option value="all">Все города</option>
              <option
                v-for="(city, index) in citiesFilter()"
                :key="index"
                :value="city.slug"
              >
                {{ city.title }}
              </option>
            </select>
          </div>

          <!-- Form Group -->
          <div class="form-group">
            <select name="plan" class="custom-select-box">
              <option value="all">Все планировки</option>
              <option
                v-for="(plan, index) in plans"
                :key="index"
                :value="plan.id"
              >
                {{ plan.title }}
              </option>
            </select>
          </div>

          <!-- Form Group -->
          <div class="form-group">
            <select name="status" class="custom-select-box">
              <option value="all">Все статусы</option>
              <option
                v-for="(statusProject, index) in statusProjects"
                :key="index"
                :value="statusProject.slug"
              >
                {{ statusProject.title }}
              </option>
            </select>
          </div>

          <!-- Form Group -->
          <div class="form-group">
            <div class="range-slider-one clearfix">
              <label>Цена</label>
              <div class="price-range-slider"></div>
              <div class="input">
                <input
                  type="hidden"
                  class="price-amount"
                  name="price"
                  readonly
                />
                <p class="price-text"></p>
              </div>
              <div class="title">US Dollar</div>
            </div>
          </div>

          <!-- Form Group -->
          <div class="form-group">
            <button type="submit" class="theme-btn btn-style-one">Поиск</button>
          </div>
        </div>
      </form>
    </div>
    <!-- End Form -->
  </div>
</template>

<script>
import axios from "axios";
import jquerySelectmenu from "./JquerySelectMenu.vue";

export default {
  components: {
    jquerySelectmenu,
  },
  data() {
    return {
      counties: [],
      cities: [],
      citiesFiltered: [],
      plans: [],
      statusProjects: [],
      slug_country: "all",
    };
  },
  mounted() {
    axios.get("/api/counties").then((response) => {
      this.counties = response.data;
    });
    axios.get("/api/cities").then((response) => {
      this.cities = response.data;
    });
    axios.get("/api/plan-room").then((response) => {
      this.plans = response.data;
    });
    axios.get("/api/status-projects").then((response) => {
      this.statusProjects = response.data;
    });
  },
  updated() {
    $(".price-range-slider").slider({
      range: true,
      min: 50000,
      max: 2000000,
      values: [50000, 2000000],
      slide: function (event, ui) {
        $("input.price-amount").val(ui.values[0] + " - " + ui.values[1]);
        $("p.price-text").html(
          ui.values[0].toLocaleString("ru") +
            " - " +
            ui.values[1].toLocaleString("ru")
        );
      },
    });
    $("input.price-amount").val(
      $(".price-range-slider").slider("values", 0) +
        " - " +
        $(".price-range-slider").slider("values", 1)
    );
    $("p.price-text").html(
      $(".price-range-slider").slider("values", 0).toLocaleString("ru") +
        " - " +
        $(".price-range-slider").slider("values", 1).toLocaleString("ru")
    );
    $(".custom-select-box")
      .selectmenu()
      .selectmenu("menuWidget")
      .addClass("overflow");
  },
  methods: {
    citiesFilter() {
      if (this.slug_country != "all") {
        this.citiesFiltered = this.counties.filter(
          (country) => country.slug == this.slug_country
        );
        return this.citiesFiltered[0].cities;
      } else {
        return this.cities;
      }
    },
  },
};
</script>