<template>
  <nav>
    <ul id="navigation">
      <li>
        <router-link :to="{ name: 'welcome' }">
          Inicio
        </router-link>
      </li>
      <!-- <li>
        <a href="#">Pages</a>
        <ul class="submenu">
          <li><a href="elements.html">Element</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="single-blog.html">Blog Details</a></li>
          <li><a href="details.html">Categori Details</a></li>
        </ul>
      </li> -->
    </ul>
  </nav>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
  data: () => ({
    appName: window.config.appName
  }),

  computed: mapGetters({
    user: 'auth/user'
  }),

  methods: {

  }
}
</script>

<style scoped>
</style>
