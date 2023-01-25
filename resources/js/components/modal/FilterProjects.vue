<template>
  <div>
    <div class="d-flex openFilterMobile">
      <a
        href="#"
        data-toggle="modal"
        data-target=".modal-filterProjects"
        class="theme-btn btn-style-one w-50"
        >Фильтр</a
      >
      <jquerySelectmenu
        name="sort"
        class="custom-select-box w-50"
        v-model="sort"
      >
        <option value="date">По дате добавления</option>
        <option value="abc">По алфавиту</option>
        <option value="priceСheap">От дешевых к дорогим</option>
        <option value="priceExpensive">От дорогих к дешевым</option>
      </jquerySelectmenu>
    </div>

    <!-- Modal filter -->
    <div
      class="modal fade modal-filterProjects"
      tabindex="-1"
      role="dialog"
      aria-hidden="false"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Фильтр</h4>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="GET" action="/project" class="property-search-form">
              <div class="row">
                <!-- Form Group -->
                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                  <label>Страна</label>
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
                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                  <label>Город</label>
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
                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                  <label>Планировки</label>
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
                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                  <label>Статус</label>
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
                <div class="form-group col-lg-2 col-md-6 col-sm-12">
                  <div class="range-slider-one clearfix">
                    <label>Цена</label>
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
                  </div>
                </div>

                <!-- Form Group -->
                <div class="form-group col-lg-2 col-md-6 col-sm-12">
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

    <!-- Modal sort -->
    <div
      class="modal fade modal-sortProjects"
      tabindex="-1"
      role="dialog"
      aria-hidden="false"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4>Сортировка</h4>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="col-12 text-center">
              <div class="form-group mt-2">
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
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
import jquerySelectmenu from "../widgets/JquerySelectMenu.vue";

export default {
  components: {
    jquerySelectmenu,
  },
  data() {
    return {
      counties: [],
      cities: [],
      citiesDefault: [],
      plans: [],
      statusProjects: [],
      slug_country: "all",
      sort: "date",
    };
  },
  mounted() {
    axios.get("/api/counties").then((response) => {
      this.counties = response.data;
    });
    axios.get("/api/cities").then((response) => {
      this.citiesDefault = response.data;
    });
    axios.get("/api/plan-room").then((response) => {
      this.plans = response.data;
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
    citiesFilter() {
      if (this.slug_country == "all") {
        return this.citiesDefault;
      } else {
        this.cities = this.counties.filter(
          (country) => country.slug == this.slug_country
        );
        return this.cities[0].cities;
      }
    },
  },
  watch: {
    sort: function () {
      this.$emit("sort", this.sort);
    },
  },
};
</script>