import * as types from '../mutation-types'
import axios from 'axios'

// state
export const state = {
  posts: {},
  single: {}
}

// getters
export const getters = {
  posts: state => state.posts,
  single: state => state.single
}

// mutations
export const mutations = {
  [types.FETCH_POSTS_SUCCESS] (state, { posts }) {
    state.posts = posts
  },
  [types.FETCH_SINGLE_POST_SUCCESS] (state, { single }) {
    state.single = single
  }
}

// actions
export const actions = {
  async fetchPosts ({ commit }, page = 1) {
    console.log(page)
    try {
      const { data } = await axios.get(`/api/posts?page=${page}`)

      commit(types.FETCH_POSTS_SUCCESS, { posts: data })
    } catch (e) {
      console.error(e)
    }
  },
  async fetchSinglePost ({ commit }, slug) {
    console.log(slug)
    try {
      const { data } = await axios.get(`/api/posts/${slug}`)

      commit(types.FETCH_SINGLE_POST_SUCCESS, { single: data })
    } catch (e) {
      console.error(e)
    }
  }
}
