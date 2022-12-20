<template>
 <!-- Categories -->
 <div class="sidebar-widget search-properties">
                  <div class="sidebar-title"><h2>ПОИСК НЕДВИЖИМОСТИ</h2></div>
                  <!-- Property Search Form -->
                  <div class="property-search-form style-three">
                    <form method="post" action="index.html">
                      <div class="row no-gutters">
                        <!-- Form Group -->
                        <div class="form-group">
                          <select class="custom-select-box">
                            <option>Location</option>
                            <option>New York</option>
                            <option>Los Angeles</option>
                            <option>Chicago</option>
                            <option>Houston</option>
                          </select>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                          <select class="custom-select-box">
                            <option>Property Type</option>
                            <option>Residential</option>
                            <option>Commercial</option>
                            <option>Industrial</option>
                            <option>Apartments</option>
                          </select>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                          <select class="custom-select-box">
                            <option>Property Status</option>
                            <option>For Rent</option>
                            <option>For Sale</option>
                          </select>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                          <select class="custom-select-box">
                            <option>Any Bedrooms</option>
                            <option>01 Bedroom</option>
                            <option>02 Bedrooms</option>
                            <option>03 Bedrooms</option>
                            <option>04 Bedrooms</option>
                            <option>05 Bedrooms</option>
                          </select>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                          <select class="custom-select-box">
                            <option>Any Bathrooms</option>
                            <option>01 Bathroom</option>
                            <option>02 Bathrooms</option>
                            <option>03 Bathrooms</option>
                            <option>04 Bathrooms</option>
                            <option>05 Bathrooms</option>
                          </select>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                          <div class="range-slider-one clearfix">
                            <label>Price Filter</label>
                            <div class="price-range-slider"></div>
                            <div class="input">
                              <input
                                type="text"
                                class="price-amount"
                                name="field-name"
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
			
		}
	},
	mounted (){
		axios.get('/api/news/')
		.then(response => {
			console.log(response);
		});
		$( ".price-range-slider" ).slider({
			range: true,
			min: 0,
			max: 10000,
			values: [ 1000, 8000 ],
			slide: function( event, ui ) {
			$( "input.price-amount" ).val( ui.values[ 0 ] + " - " + ui.values[ 1 ] );
			}
		});
		$( "input.price-amount" ).val( $( ".price-range-slider" ).slider( "values", 0 ) + " - $" + $( ".price-range-slider" ).slider( "values", 1 ) );	
	},
}
</script>