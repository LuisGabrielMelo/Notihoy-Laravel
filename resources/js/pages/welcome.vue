<template>
  <div>
    <section class="whats-news-area pt-50 pb-20">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row d-flex justify-content-between">
              <div class="col-lg-3 col-md-3">
                <div class="section-tittle mb-30">
                  <h3>Lo más nuevo</h3>
                </div>
              </div>
              <div class="col-lg-9 col-md-9">
                <div class="properties__button">
                  <!--Nav Button  -->
                  <nav>
                    <div id="nav-tab" class="nav nav-tabs" role="tablist">
                      <a id="nav-home-tab" class="nav-item nav-link active" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Todos</a>
                      <!-- <a id="nav-profile-tab" class="nav-item nav-link" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Lifestyle</a>
                      <a id="nav-contact-tab" class="nav-item nav-link" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Travel</a>
                      <a id="nav-last-tab" class="nav-item nav-link" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Fashion</a>
                      <a id="nav-Sports" class="nav-item nav-link" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Sports</a>
                      <a id="nav-technology" class="nav-item nav-link" data-toggle="tab" href="#nav-techno" role="tab" aria-controls="nav-contact" aria-selected="false">Technology</a> -->
                    </div>
                  </nav>
                  <!--End Nav Button  -->
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <!-- Nav Card -->
                <div id="nav-tabContent" class="tab-content">
                  <!-- card one -->
                  <div id="nav-home" class="tab-pane fade show active" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="whats-news-caption">
                      <div class="row">
                        <div v-for="post in posts.data" :key="post.id" class="col-lg-6 col-md-6">
                          <div class="single-what-news mb-100">
                            <div class="what-img">
                              <img v-if="post.cover" :src="`/storage/${post.cover.path}`" alt="">
                              <img v-else src="https://picsum.photos/seed/picsum/500/350" alt="">
                            </div>
                            <div class="what-cap">
                              <span v-for="cat in post.categories" :key="cat.id" class="color1">{{ cat.name }}</span>
                              <router-link :to="{ name: 'posts.single', params: { slug: post.slug } }">
                                <h4>
                                  {{ post.title }}
                                </h4>
                                <h6>
                                  {{ post.subtitle }}
                                </h6>
                              </router-link>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Nav Card -->
              </div>
            </div>
          </div>
          <SideMenu />
        </div>
      </div>
    </section>
    <!-- Whats New End -->

    <!--Start pagination -->
    <div class="pagination-area pb-45 text-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="single-wrap d-flex justify-content-center">
              <nav aria-label="Page navigation example">
                <pagination show-disabled :data="posts" class="justify-content-start" @pagination-change-page="getPosts">
                  <span slot="prev-nav" class="flaticon-arrow roted" />
                  <span slot="next-nav" class="flaticon-arrow right-arrow" />
                </pagination>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'
import SideMenu from '~/components/main/SideMenu'

export default {
  components: {
    SideMenu
  },
  layout: 'front',
  metaInfo () {
    return { title: this.$t('home') }
  },

  data: () => ({
    title: window.config.appName
  }),

  computed: mapGetters({
    authenticated: 'auth/check',
    posts: 'posts/posts'
  }),
  mounted () {
    this.getPosts()
  },
  methods: {
    ...mapActions({
      getPosts: 'posts/fetchPosts'
    })
  }
}
</script>

<style lang="scss" scoped>
.top-right {
  position: absolute;
  right: 10px;
  top: 18px;
}

.title {
  font-size: 85px;
}
</style>
