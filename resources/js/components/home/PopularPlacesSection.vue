<template>
  <div>
    <!--Popular Places Section-->
    <section class="popular-places-section">
      <div class="auto-container">
        <div class="sec-title">
          <span class="title">Поиск по городам</span>
          <h2>САМЫЕ ПОПУЛЯРНЫЕ МЕСТА</h2>
        </div>

        <div class="masonry-items-container clearfix">
          <!-- Portfolio Item -->
          <div class="popular-item masonry-item medium-item">
            <div class="image-box">
              <figure class="image">
                <img
                  src="/images/background/pexels-oleksandr-pidvalnyi-12940603.jpg"
                  alt=""
                  style="height: 295px"
                />
              </figure>
              <div class="info-box">
                <h3 class="place">
                  <a href="/project?city=alaniya">Алания</a>
                </h3>
                <div class="view-all">
                  <a href="/project?city=alaniya">Посмотреть все</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Item -->
          <div class="popular-item masonry-item medium-item">
            <div class="image-box">
              <figure class="image">
                <img
                  src="/images/background/pexels-funda-izgi-13134869.jpg"
                  alt=""
                  style="height: 420px"
                />
              </figure>
              <div class="info-box">
                <h3 class="place">
                  <a href="/project?city=karaganda">Стамбул</a>
                </h3>
                <div class="view-all">
                  <a href="/project?city=karaganda">Посмотреть все</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Item -->
          <div class="popular-item masonry-item medium-item">
            <div class="image-box">
              <figure class="image">
                <img
                  src="/images/background/pexels-emrah-ayvali-6198387.jpg"
                  alt=""
                  style="height: 295px"
                />
              </figure>
              <div class="info-box">
                <h3 class="place">
                  <a href="/project?city=kemer">Кемер</a>
                </h3>
                <div class="view-all">
                  <a href="/project?city=kemer">Посмотреть все</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Item -->
          <div class="popular-item masonry-item small-item">
            <div class="image-box">
              <figure class="image">
                <img
                  src="/images/background/pexels-serkan-pulat-10534187.jpg"
                  alt=""
                  style="height: 170px"
                />
              </figure>
              <div class="info-box">
                <h3 class="place"><a href="/project">Кипр</a></h3>
                <div class="view-all">
                  <a href="/project">Посмотреть все</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Portfolio Item -->
          <div class="popular-item masonry-item small-item">
            <div class="image-box">
              <figure class="image">
                <img
                  src="/images/background/pexels-mo-ismail-3763190.jpg"
                  alt=""
                  style="height: 170px"
                />
              </figure>
              <div class="info-box">
                <h3 class="place">
                  <a href="/project?cityhome=dubay">Дубаи</a>
                </h3>
                <div class="view-all">
                  <a href="/project?cityhome=dubay">Посмотреть все</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Portfolio Section-->
  </div>
</template>

<script>
export default {
  data() {
    return {};
  },
};
</script>