<template>
	<div>
		<div class="sidebar-page-container">
        <div class="auto-container">
          <div class="upper-info-box">
            <div class="row align-items-center">
              <div class="about-property col-lg-8 col-md-12 col-sm-12">
                <h2>{{ project.title }}</h2>
                <div class="location">
                  <i class="la la-map-marker"></i> {{ project.address }}
                </div>
              </div>
              <div class="price-column col-lg-4 col-md-12 col-sm-12">
                <span class="title">Квартиры от</span>
                <div class="price">$ {{ project.price }}</div>
                <span class="status">{{ project.status.title }}</span>
              </div>
            </div>
          </div>
          <div class="row clearfix">
            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
              <div class="property-detail">
                <div class="upper-box">
                  <div class="carousel-outer">

                    <ul class="image-carousel owl-carousel owl-theme">
                      <li v-for="image in project.images">
                        <a
                          :href="image.img"
                          class="lightbox-image"
                          ><img
                            :src="image.img"
                        /></a>
                      </li>
                    </ul>

                    <ul class="thumbs-carousel owl-carousel owl-theme">
                      <li v-for="image in project.images">
                        <img
                          :src="image.img"
                          alt=""
                        />
                      </li>
                    </ul>

                  </div>
                </div>

                <div class="lower-content">
                  <h4>Описание проекта</h4>
									<div v-html="project.description"></div>
                </div>

                <!-- Property Features -->
                <div class="property-features">
                  <h4>Важная информация</h4>
                  <ul class="list-style-one">
                    <li>Цена: $ {{ project.price }}</li>
                    <li>Статус: {{ project.status.title }}</li>
                    <li>Тип: <span v-for="real in project.reals">{{ real.title }} </span> </li>
                    <li>Страна: {{ project.country.title }}</li>
                    <li>Город: {{ project.city.title }}</li>
                    <li v-for="important_information in project.important_information">{{ important_information.title }}</li>
                  </ul>
                </div>

                <!-- Property Features -->
                <div class="property-features">
                  <h4>Home Amenities</h4>
                  <ul class="list-style-one">
                    <li v-for="home_ameniti in project.home_amenities">{{ home_ameniti.title }}</li>
                  </ul>
                </div>

                <!-- Flooring Tabs -->
                <div class="flooring-tabs tabs-box">
                  <div class="clearfix">
                    <h4>Планировки</h4>
                    <ul class="tab-buttons">
                      <li data-tab="#groud-floor" class="tab-btn active-btn">
                        1 комнатные
                      </li>
                      <li data-tab="#first-floor" class="tab-btn">
                        2-х комнатные
                      </li>
                      <li data-tab="#second-floor" class="tab-btn">
                        3-х комнатные
                      </li>
                    </ul>
                  </div>

                  <div class="tabs-content">
                    <!--Tab / Active Tab-->
                    <div class="tab active-tab" id="groud-floor">
                      <div class="image-box">
												<div v-for="plan in project.plans" class="pan-item">
                          <img
                            :src="plan.img"
                            alt=""
                            class="plan-item__img"
                          />
                          <div class="plan-item__desc">
                            <div class="plan-item__title-block">
                              <h4>{{ plan.rooms }}</h4>
                            </div>
                            <div class="float-left">
															<div class="d-flex justify-content-between">
																<p class="plan-item__room">от {{ plan.price }} т</p>
                              	<p class="plan-item__room">от {{ plan.area }} км2</p>
															</div>
                              <p>
                                {{ plan.description }}
                              </p>
                              <a href="#" class="theme-btn btn-style-one">Получить консультацию</a>
                            </div>
                          </div>
                        </div>

                        <div class="text-center plan-item__more">
                          <a href="#" class="theme-btn btn-style-one">ПОКАЗАТЬ ЕЩЕ</a>
                        </div>
                      </div>
                    </div>

                    <!--Tab -->
                    <div class="tab" id="first-floor">
                      <div class="image-box">
                        <div v-for="plan in project.plans" class="pan-item">
                          <img
                            :src="plan.img"
                            alt=""
                            class="plan-item__img"
                          />
                          <div class="plan-item__desc">
                            <div class="plan-item__title-block">
                              <h4>{{ plan.rooms }}</h4>
                            </div>
                            <div class="float-left">
                              <p class="plan-item__room">от {{ plan.price }} т</p>
                              <p class="plan-item__room">от {{ plan.area }} км2</p>
                              <p>
                                {{ plan.description }}
                              </p>
                              <a href="#" class="theme-btn btn-style-one">Получить консультацию</a>
                            </div>
                          </div>
                        </div>

                        <div class="text-center plan-item__more">
                          <a href="#" class="theme-btn btn-style-six m-auto"
                            >показать еще</a
                          >
                        </div>
                      </div>
                    </div>

                    <!--Tab -->
                    <div class="tab" id="second-floor">
                      <div class="image-box">

												<div v-for="plan in project.plans" class="pan-item">
                          <img
                            :src="plan.img"
                            alt=""
                            class="plan-item__img"
                          />
                          <div class="plan-item__desc">
                            <div class="plan-item__title-block">
                              <h4>{{ plan.rooms }}</h4>
                            </div>
                            <div class="float-left">
                              <p class="plan-item__room">от {{ plan.price }} т</p>
                              <p class="plan-item__room">от {{ plan.area }} км2</p>
                              <p>
                                {{ plan.description }}
                              </p>
                              <a href="#" class="theme-btn btn-style-one">Получить консультацию</a>
                            </div>
                          </div>
                        </div>

                        <div class="text-center plan-item__more">
                          <a href="#" class="theme-btn btn-style-six m-auto"
                            >показать еще</a
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Nearest Places -->
                <div class="nearest-places">
                  <h4>Расположение</h4>
                  <div class="outer-box clearfix">
                    <div id="map" style="height:350px;width:100%"></div>
                  </div>
                </div>

                <!-- Review Comment Form -->
                <div class="review-comment-form">
                  <h4>Консультация</h4>
                  <form method="post" action="contact.html">
                    <div class="row">
                      <div class="form-group col-lg-6 col-md-12 col-sm-12">
                        <input
                          type="text"
                          name="username"
                          placeholder="Введите имя"
                          required
                        />
                      </div>
                      <div class="form-group col-lg-6 col-md-12 col-sm-12">
                        <input
                          type="text"
                          name="number"
                          placeholder="Номер телефона"
                          required
                        />
                      </div>
                      <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <textarea
                          name="message"
                          placeholder="Задайте нам вопрос"
                        ></textarea>
                      </div>
                      <div class="form-group col-lg-6 col-md-6 col-sm-6">
                        <!--                                        <div class="rating-box">-->
                        <!--                                            <div class="text"> Your Rating:</div>-->
                        <!--                                            <div class="rating"><a href="#"><span class="la la-star-o"></span></a><a href="#"><span class="la la-star-o"></span></a><a href="#"><span class="la la-star-o"></span></a><a href="#"><span class="la la-star-o"></span></a><a href="#"><span class="la la-star-o"></span></a>-->
                        <!--                                            </div>-->
                        <!--                                        </div>-->
                      </div>

                      <div
                        class="form-group col-lg-6 col-md-6 col-sm-6 text-right"
                      >
                        <button
                          class="theme-btn btn-style-one"
                          type="submit"
                          name="submit-form"
                        >
                          Получить консультацию
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
              <aside class="sidebar default-sidebar">
                <!-- Agent Widget -->

                <!-- Agent Form Widget -->
                <div class="sidebar-widget agent-from-widget">
                  <div class="sidebar-title">
                    <h2>Получить консультацию</h2>
                  </div>
                  <div class="widget-content">
                    <div class="agent-form">
                      <form method="post" action="contact.html">
                        <div class="form-group">
                          <input
                            type="text"
                            name="username"
                            placeholder="Имя"
                            required
                          />
                        </div>
                        <div class="form-group">
                          <input
                            type="text"
                            name="number"
                            placeholder="Номер"
                            required
                          />
                        </div>
                        <div class="form-group">
                          <button
                            class="theme-btn btn-style-one"
                            type="submit"
                            name="submit-form"
                          >
                            Отправить
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

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
                            <option>ЛОКАЦИЯ</option>
                            <option>СТАМБУЛ</option>
                            <option>АЛАНИЯ</option>
                            <option>КЕМЕР</option>
                            <option>КИПР</option>
                          </select>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                          <select class="custom-select-box">
                            <option>ТИП НЕДВИЖИМОСТИ</option>
                            <option>АПАРТАМЕНТЫ</option>
                            <option>ТАУНХАУСЫ</option>
                            <option>ВИЛЛЫ</option>
                            <option>КВАРТИРЫ</option>
                            <option>ДОМА</option>
                          </select>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                          <select class="custom-select-box">
                            <option>СТАТУС</option>
                            <option>СТРОИТСЯ</option>
                            <option>ПОСТРОЕН</option>
                          </select>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                          <select class="custom-select-box">
                            <option>КОМНАТНОСТЬ</option>
                            <option>1+1 Bedroom</option>
                            <option>2+1 Bedrooms</option>
                            <option>3+1 Bedrooms</option>
                            <option>4+1 Bedrooms</option>
                            <option>5+ Bedrooms</option>
                          </select>
                        </div>


                        <!-- Form Group -->
                        <div class="form-group">
                          <div class="range-slider-one clearfix">
                            <label>СТОИМОСТЬ</label>
                            <div class="price-range-slider"></div>
                            <div class="input">
                              <input
                                type="text"
                                class="price-amount"
                                name="field-name"
                                readonly
                              />
                            </div>
                            <div class="title">US Dollar</div>
                          </div>
                        </div>

                        <!-- Form Group -->
                        <div class="form-group">
                          <button type="submit" class="theme-btn btn-style-one">
                            ПОИСК
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- End Form -->
                </div>

                <!-- Categories -->
                <div class="sidebar-widget categories">
                  <div class="sidebar-title"><h2>ТИП НЕДВИЖИМОСТИ</h2></div>
                  <ul class="cat-list">
                    <li>
                      <a href="#">АПАРТАМЕНТЫ <span>22</span></a>
                    </li>
                    <li>
                      <a href="#">ВИЛЛЫ <span>45</span></a>
                    </li>
                    <li>
                      <a href="#">ТАУНХАУСЫ <span>62</span></a>
                    </li>
                    <li>
                      <a href="#">КВАРТИРЫ <span>70</span></a>
                    </li>
                    <li>
                      <a href="#">ДОМА <span>90</span></a>
                    </li>
                  </ul>
                </div>

								<recently-added></recently-added>

              </aside>
            </div>
          </div>
        </div>
      </div>
	</div>
</template>

<script>
import axios from 'axios';
import $ from "jquery";
import owlCarousel from '/js/owl.js';


export default {
	props: {
		slug: String
	},
	data(){
		return {
			project: [],
		}
	},
	updated (){
		var map_parameters = { center: {lat: this.project.coordinates1, lng: this.project.coordinates2}, zoom: 8 };
		var map = new google.maps.Map(document.getElementById('map'), map_parameters);
		var position1 = { position: {lat: this.project.coordinates1, lng: this.project.coordinates2}, map: map };
		var marker1 = new google.maps.Marker(position1);
		// Product Carousel Slider
		(function($) {
			// Product Carousel Slider
			if ($('.property-detail .image-carousel').length && $('.property-detail .thumbs-carousel').length) {

			var $sync1 = $(".property-detail .image-carousel"),
				$sync2 = $(".property-detail .thumbs-carousel"),
				flag = false,
				duration = 500;

				$sync1
					.owlCarousel({
						loop:false,
						items: 1,
						margin: 20,
						nav: false,
						navText: [ '<span class="icon fa fa-angle-left"></span>', '<span class="icon fa fa-angle-right"></span>' ],
						dots: false,
						autoplay: true,
						autoplayTimeout: 5000
					})
					.on('changed.owl.carousel', function (e) {
						if (!flag) {
							flag = false;
							$sync2.trigger('to.owl.carousel', [e.item.index, duration, true]);
							flag = false;
						}
					});

				$sync2
					.owlCarousel({
						loop:false,
						margin: 10,
						items: 1,
						nav: true,
						navText: [ '<span class="icon la la-arrow-circle-o-left"></span>', '<span class="icon la la-arrow-circle-o-right"></span>' ],
						dots: false,
						center: false,
						autoplay: true,
						autoplayTimeout: 5000,
						responsive: {
							0:{
											items:2,
											autoWidth: false
									},
									400:{
											items:2,
											autoWidth: false
									},
									600:{
											items:3,
											autoWidth: false
									},
									800:{
											items:5,
											autoWidth: false
									},
									1024:{
											items:4,
											autoWidth: false
									}
							},
					})
					
			.on('click', '.owl-item', function () {
				$sync1.trigger('to.owl.carousel', [$(this).index(), duration, true]);
			})
			.on('changed.owl.carousel', function (e) {
				if (!flag) {
					flag = true;		
					$sync1.trigger('to.owl.carousel', [e.item.index, duration, true]);
					flag = false;
				}
			});

			}
		})(window.jQuery);
	},
	mounted (){
		axios.get('/api/projects/' + this.slug)
		.then(response => {
			this.project = response.data;
		});
	},
}

</script>