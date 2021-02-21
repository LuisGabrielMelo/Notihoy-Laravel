<template>
  <div>
    <!-- About US Start -->
    <div v-if="post" class="about-area">
      <div style="height: 50px;"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <!-- Trending Tittle -->
            <div class="about-right mb-90">
              <div class="about-img">
                <img v-if="post.cover" :src="`/storage/${post.cover.path}`" alt="">
                <img v-else src="https://picsum.photos/seed/picsum/500/250" alt="">
              </div>
              <div class="section-tittle mb-30 pt-30">
                <h2>{{ post.title }}</h2>
                <h4>{{ post.subtitle }}</h4>
              </div>
              <div class="about-prea" v-html="post.content">
              </div>
              <div class="social-share pt-30">
                <div class="section-tittle">
                  <h3 class="mr-20">
                    Share:
                  </h3>
                  <ul>
                    <li><a href="#"><img src="/img/news/icon-ins.png" alt=""></a></li>
                    <li><a href="#"><img src="/img/news/icon-fb.png" alt=""></a></li>
                    <li><a href="#"><img src="/img/news/icon-tw.png" alt=""></a></li>
                    <li><a href="#"><img src="/img/news/icon-yo.png" alt=""></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- From -->
            <div class="row">
              <div class="col-lg-8">
                <form id="contactForm" class="form-contact contact_form mb-80" action="contact_process.php" method="post" novalidate="novalidate">
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <textarea id="message" class="form-control w-100 error" name="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Enter Message" />
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input id="name" class="form-control error" name="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input id="email" class="form-control error" name="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <input id="subject" class="form-control error" name="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                      </div>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <button type="submit" class="button button-contactForm boxed-btn">
                      Send
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <SideMenu />
        </div>
      </div>
    </div>
    <!-- About US End -->
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

  props: {
    slug: {
      type: String,
      default: null
    }
  },
  data: () => ({
    title: window.config.appName
  }),

  computed: mapGetters({
    authenticated: 'auth/check',
    post: 'posts/single'
  }),
  mounted () {
    if (this.slug) {
      this.getPost(this.slug)
    }
  },
  methods: {
    ...mapActions({
      getPost: 'posts/fetchSinglePost'
    })
  }
}
</script>

<style lang="scss" scoped>
</style>
