<template>
  <!-- Property Search Section -->
  <section class="property-search-section">
    <div class="auto-container">
      <div class="property-search-tabs tabs-box">
        <div class="tabs-content">
          <!--Tab / Active Tab-->
          <div class="tab active-tab" id="sale">
            <div class="property-search-form">
              <form method="GET" action="/project">
                <div class="row">
                  <!-- Form Group -->
                  <div class="form-group col-lg-4 col-md-6 col-sm-12">
                    <label>Страна</label>
                    <jquery-selectmenu
                      name="country"
                      class="custom-select-box"
                      v-model="slug_country"
                    >
                      <option
                        v-for="(country, index) in counties"
                        :key="index"
                        :value="country.slug"
                      >
                        {{ country.title }}
                      </option>
                    </jquery-selectmenu>
                  </div>

                  <!-- Form Group -->
                  <div class="form-group col-lg-4 col-md-6 col-sm-12">
                    <label>Город</label>
                    <select name="city" id="city" class="custom-select-box">
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
                  <div class="form-group col-lg-4 col-md-6 col-sm-12">
                    <label>Планировки</label>
                    <select name="plan" class="custom-select-box">
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
                  <div class="form-group col-lg-4 col-md-6 col-sm-12">
                    <label>Статус</label>
                    <select name="status" class="custom-select-box">
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
                  <div class="form-group col-lg-4 col-md-6 col-sm-12">
                    <div class="range-slider-one clearfix">
                      <label>Цена</label>
                      <div class="price-range-slider"></div>
                      <div class="input">
                        <input
                          type="text"
                          class="price-amount"
                          name="price"
                          readonly
                        />
                      </div>
                      <div class="title">US Doller</div>
                    </div>
                  </div>

                  <!-- Form Group -->
                  <div class="form-group col-lg-4 col-md-6 col-sm-12">
                    <button type="submit" class="theme-btn btn-style-one">
                      Поиск
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Property Search Section -->
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      counties: [],
      cities: [],
      plans: [],
      statusProjects: [],
      slug_country: "",
    };
  },
  mounted() {
    axios.get("/api/counties").then((response) => {
      this.counties = response.data;
      this.slug_country = response.data[0].slug;
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
      },
    });
    $("input.price-amount").val(
      $(".price-range-slider").slider("values", 0) +
        " - " +
        $(".price-range-slider").slider("values", 1)
    );
    $(".custom-select-box")
      .selectmenu()
      .selectmenu("menuWidget")
      .addClass("overflow");
  },
  methods: {
    citiesFilter() {
      this.cities = this.counties.filter(
        (country) => country.slug == this.slug_country
      );
      return this.cities[0].cities;
    },
  },
};
</script>