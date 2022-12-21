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
                          <select name="country" class="custom-select-box">
                            <option v-for="country in counties" :value="country.slug">{{ country.title }}</option>
                          </select>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                          <select name="city" class="custom-select-box">
                            <option v-for="city in cities" :value="city.slug">{{ city.title }}</option>
                          </select>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                          <select name="plan" class="custom-select-box">
                            <option v-for="plan in plans" :value="plan.id">{{ plan.title }}</option>
                          </select>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                          <select name="status" class="custom-select-box">
                            <option v-for="statusProject in statusProjects" :value="statusProject.slug">{{ statusProject.title }}</option>
                          </select>
                        </div>


                        <!-- Form Group -->
                        <div class="form-group">
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
                        <div class="form-group">
                          <button type="submit" class="theme-btn btn-style-one">
                            Поиск
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- End Form -->
                </div>
</template>

<script>
import axios from 'axios';

export default {
	data(){
		return {
			counties: [],
			cities: [],
			plans: [],
			statusProjects: [],
		}
	},
	mounted (){
		axios.get('/api/counties')
		.then(response => {
			this.counties = response.data;
		});
		axios.get('/api/cities')
		.then(response => {
			this.cities = response.data;
		});
		axios.get('/api/plan-room')
		.then(response => {
			this.plans = response.data;
		});
		axios.get('/api/status-projects')
		.then(response => {
			this.statusProjects = response.data;
		});
		$( ".price-range-slider" ).slider({
			range: true,
			min: 100000,
			max: 2000000,
			values: [ 500000, 1000000 ],
			slide: function( event, ui ) {
			$( "input.price-amount" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
			}
		});
		$( "input.price-amount" ).val( $( ".price-range-slider" ).slider( "values", 0 ) + " - $" + $( ".price-range-slider" ).slider( "values", 1 ) );	
	},
}
</script>