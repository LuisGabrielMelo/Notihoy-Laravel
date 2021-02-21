<template>
  <div class="col-lg-4">
            <!-- Section Tittle -->
            <div class="section-tittle mb-40">
              <h3>Síguenos</h3>
            </div>
            <!-- Flow Socail -->
            <div class="single-follow mb-45">
              <div class="single-box">
                <div class="follow-us d-flex align-items-center">
                  <div class="follow-social">
                    <a href="#"><img src="/img/news/icon-fb.png" alt=""></a>
                  </div>
                  <div class="follow-count">
                    <span>8,045</span>
                    <p>Fans</p>
                  </div>
                </div>
                <div class="follow-us d-flex align-items-center">
                  <div class="follow-social">
                    <a href="#"><img src="/img/news/icon-tw.png" alt=""></a>
                  </div>
                  <div class="follow-count">
                    <span>8,045</span>
                    <p>Fans</p>
                  </div>
                </div>
                <div class="follow-us d-flex align-items-center">
                  <div class="follow-social">
                    <a href="#"><img src="/img/news/icon-ins.png" alt=""></a>
                  </div>
                  <div class="follow-count">
                    <span>8,045</span>
                    <p>Fans</p>
                  </div>
                </div>
                <div class="follow-us d-flex align-items-center">
                  <div class="follow-social">
                    <a href="#"><img src="/img/news/icon-yo.png" alt=""></a>
                  </div>
                  <div class="follow-count">
                    <span>8,045</span>
                    <p>Fans</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- New Poster -->
            <div class="news-poster d-none d-lg-block">
              <img src="https://via.placeholder.com/248x624?text=PUBLICIDAD" alt="">
            </div>
          </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  data: () => ({}),

  computed: mapGetters({
    user: 'auth/user'
  }),

  methods: {}
}
</script>

<style scoped>
</style>
