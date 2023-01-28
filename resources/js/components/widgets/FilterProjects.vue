<template>
  <div>
    <form
      method="GET"
      action="/project"
      class="property-search-form fixedFilter"
    >
      <div class="fixedFilterContainer auto-container">
        <div class="row align-items-center">
          <div class="col-lg-3">
            <div class="filterItem">
              <div class="row">
                <div class="col-lg-4"><label>Страна</label></div>
                <div class="col-lg-8">
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
              </div>
            </div>
            <div class="filterItem">
              <div class="row">
                <div class="col-lg-4"><label>Тип</label></div>
                <div class="col-lg-8">
                  <select name="typereal" class="custom-select-box">
                    <option value="all">Все типы</option>
                    <option
                      v-for="(typeReal, index) in typeReals"
                      :key="index"
                      :value="typeReal.slug"
                    >
                      {{ typeReal.title }}
                    </option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="filterItem">
              <div class="row">
                <div class="col-lg-4"><label>Регион</label></div>
                <div class="col-lg-8">
                  <jquerySelectmenu
                    name="region"
                    id="city"
                    class="custom-select-box"
                    v-model="slug_region"
                  >
                    <option value="all">Все регионы</option>
                    <option
                      v-for="(region, index) in regionsFilter()"
                      :key="index"
                      :value="region.slug"
                    >
                      {{ region.title }}
                    </option>
                  </jquerySelectmenu>
                </div>
              </div>
            </div>
            <div class="filterItem">
              <div class="row">
                <div class="col-lg-4">
                  <label>Статус</label>
                </div>
                <div class="col-lg-8">
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
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="filterItem">
              <div class="row">
                <div class="col-lg-4"><label>Город</label></div>
                <div class="col-lg-8">
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
              </div>
            </div>
            <div class="filterItem">
              <div class="range-slider-one clearfix">
                <div class="row">
                  <div class="col-lg-4"><label>Цена</label></div>
                  <div class="col-lg-8">
                    <div
                      class="price-range-slider"
                      ref="priceRangeSlider"
                    ></div>
                    <div class="input">
                      <input
                        type="hidden"
                        class="price-amount text-center"
                        name="price"
                        readonly
                      />
                      <p class="price-text text-center w-100"></p>
                    </div>
                    <div class="title">US Dollar</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="filterItem">
              <div class="row">
                <div class="col-lg-4"><label>Планировки</label></div>
                <div class="col-lg-8">
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
              </div>
            </div>
            <button type="submit" class="theme-btn btn-style-one">Поиск</button>
          </div>
        </div>
      </div>
    </form>

    <a href="#" type="click" class="theme-btn btn-style-one fixedFilterBtn"
      >Фильтр</a
    >
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
      regions: [],
      citiesDefault: [],
      plans: [],
      statusProjects: [],
      typeReals: [],
      slug_country: "all",
      slug_region: "all",
    };
  },
  mounted() {
    axios.get("/api/counties").then((response) => {
      this.counties = response.data;
    });
    axios.get("/api/regions").then((response) => {
      this.regions = response.data;
    });
    axios.get("/api/cities").then((response) => {
      this.citiesDefault = response.data;
    });
    axios.get("/api/plan-room").then((response) => {
      this.plans = response.data;
    });
    axios.get("/api/type-real").then((response) => {
      this.typeReals = response.data;
    });
    axios.get("/api/status-projects").then((response) => {
      this.statusProjects = response.data;
    });
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
    regionsFilter() {
      if (this.slug_country == "all") {
        return this.regions;
      } else {
        var regions = this.counties.filter(
          (country) => country.slug == this.slug_country
        );
        return regions[0].regions;
      }
    },
    citiesFilter() {
      if (this.slug_country == "all" && this.slug_region == "all") {
        return this.citiesDefault;
      } else if (this.slug_region == "all") {
        var cities = this.counties.filter(
          (country) => country.slug == this.slug_country
        );
        return cities[0].cities;
      } else {
        var cities = this.regions.filter(
          (region) => region.slug == this.slug_region
        );
        return cities[0].cities;
      }
    },
  },
  watch: {
    slug_country: function () {
      this.slug_region = "all";
    },
  },
};

$(window).scroll(function () {
  if ($(window).scrollTop() > 300) {
    $(".fixedFilterBtn").show();
  } else {
    $(".fixedFilterBtn").hide();
  }
});
</script>

<style>
.fixedFilterBtn {
  display: none;
  width: 100%;
  position: fixed;
  top: 76px;
  left: 0;
  right: 0;
  z-index: 999;
  text-align: center;
}
</style>