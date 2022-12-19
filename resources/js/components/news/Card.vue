<template>
	<div>
		      <!--Page Title-->
					<section
        class="page-title"
        style="background-image: url('/images/background/16.jpg')"
      >
        <div class="auto-container">
          <div class="inner-container clearfix">
            <h1>News Detail</h1>
            <ul class="bread-crumb clearfix">
              <li><a href="index.html">Home</a></li>
              <li>News Detail</li>
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
                    <li><span>{{ news.created_at | moment }}</span></li>
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

                <!-- Categories -->
                <div class="sidebar-widget search-properties">
                  <div class="sidebar-title"><h2>Search Properties</h2></div>
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
                            Search
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- End Form -->
                </div>

                <!-- Categories -->
                <div class="sidebar-widget categories">
                  <div class="sidebar-title"><h2>Category Properties</h2></div>
                  <ul class="cat-list">
                    <li>
                      <a href="#">Apartments <span>22</span></a>
                    </li>
                    <li>
                      <a href="#">Villas <span>45</span></a>
                    </li>
                    <li>
                      <a href="#">Open Houses <span>62</span></a>
                    </li>
                    <li>
                      <a href="#">Offices <span>70</span></a>
                    </li>
                    <li>
                      <a href="#">Residentals <span>90</span></a>
                    </li>
                    <li>
                      <a href="#">Co-Working <span>65</span></a>
                    </li>
                    <li>
                      <a href="#">Flat <span>48</span></a>
                    </li>
                    <li>
                      <a href="#">Cottage <span>24</span></a>
                    </li>
                  </ul>
                </div>

                <!-- Recent Properties -->
                <div class="sidebar-widget recent-properties">
                  <div class="sidebar-title"><h2>Recent Properties</h2></div>
                  <div class="widget-content">
                    <!-- Post -->
                    <article class="post">
                      <div class="post-thumb">
                        <a href="blog-detail.html">
                          <img
                            src="/images/resource/property-thumb-1.jpg"
                            alt=""
                          />
                          <span class="status">Rent</span>
                        </a>
                      </div>
                      <span class="location">Lundon, UK</span>
                      <h3>
                        <a href="blog-detail.html">Laxury Balles Villa</a>
                      </h3>
                      <div class="price">$ 760,000</div>
                    </article>

                    <!-- Post -->
                    <article class="post">
                      <div class="post-thumb">
                        <a href="blog-detail.html">
                          <img
                            src="/images/resource/property-thumb-2.jpg"
                            alt=""
                          />
                          <span class="status">Rent</span>
                        </a>
                      </div>
                      <span class="location">Lundon, UK</span>
                      <h3>
                        <a href="blog-detail.html">Laxury Balles Villa</a>
                      </h3>
                      <div class="price">$ 760,000</div>
                    </article>

                    <!-- Post -->
                    <article class="post">
                      <div class="post-thumb">
                        <a href="blog-detail.html">
                          <img
                            src="/images/resource/property-thumb-3.jpg"
                            alt=""
                          />
                          <span class="status hot">hot</span>
                        </a>
                      </div>
                      <span class="location">Lundon, UK</span>
                      <h3>
                        <a href="blog-detail.html">Laxury Balles Villa</a>
                      </h3>
                      <div class="price">$ 760,000</div>
                    </article>

                    <!-- Post -->
                    <article class="post">
                      <div class="post-thumb">
                        <a href="blog-detail.html">
                          <img
                            src="/images/resource/property-thumb-4.jpg"
                            alt=""
                          />
                          <span class="status">Rent</span>
                        </a>
                      </div>
                      <span class="location">Lundon, UK</span>
                      <h3>
                        <a href="blog-detail.html">Laxury Balles Villa</a>
                      </h3>
                      <div class="price">$ 760,000</div>
                    </article>
                  </div>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </div>
      <!-- End Sidebar Container -->

      <!--Clients Section-->
      <section class="clients-section style-three">
        <div class="auto-container">
          <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel owl-carousel owl-theme">
              <li class="slide-item">
                <figure class="image-box">
                  <a href="#"><img src="/images/clients/1.png" alt="" /></a>
                </figure>
              </li>
              <li class="slide-item">
                <figure class="image-box">
                  <a href="#"><img src="/images/clients/2.png" alt="" /></a>
                </figure>
              </li>
              <li class="slide-item">
                <figure class="image-box">
                  <a href="#"><img src="/images/clients/3.png" alt="" /></a>
                </figure>
              </li>
              <li class="slide-item">
                <figure class="image-box">
                  <a href="#"><img src="/images/clients/4.png" alt="" /></a>
                </figure>
              </li>
              <li class="slide-item">
                <figure class="image-box">
                  <a href="#"><img src="/images/clients/1.png" alt="" /></a>
                </figure>
              </li>
              <li class="slide-item">
                <figure class="image-box">
                  <a href="#"><img src="/images/clients/2.png" alt="" /></a>
                </figure>
              </li>
              <li class="slide-item">
                <figure class="image-box">
                  <a href="#"><img src="/images/clients/3.png" alt="" /></a>
                </figure>
              </li>
              <li class="slide-item">
                <figure class="image-box">
                  <a href="#"><img src="/images/clients/4.png" alt="" /></a>
                </figure>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!--End Clients Section-->
	</div>
</template>

<script>
import axios from 'axios';
import moment from 'moment';
import $ from "jquery";
import slider from '/js/jquery-ui.js'
import "jquery-ui";

export default {
	props: {
		slug: String
	},
	data(){
		return {
			news: []
		}
	},
	mounted (){
		axios.get('/api/news/' + this.slug)
		.then(response => {
			this.news = response.data;
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
	filters: {
		moment: function (date) {
			moment.locale('kk');
			return moment(date).format('L');
		}
	}
}
</script>