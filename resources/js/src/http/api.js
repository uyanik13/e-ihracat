import store from '@/store/store.js'
import axios from 'axios'


//axios.defaults.baseURL = process.env.APP_URL
axios.defaults.headers = { Accept: 'application/json' }
//axios.defaults.headers = { Locale : store.getters.locale}

let subscribers = []
let isRefreshing = false

function onAccessTokenFetched (accessToken) {
  subscribers.map(callback => callback(accessToken));
}

function addSubscriber (callback) {
  subscribers.push(callback)
}

export default {
init () {
    axios.interceptors.response.use(function (response) {
        return response;

      }, error => {
        const { config, response: { status } } = error
        const originalRequest = config
        //console.log('error',error.response.data)
        if (status === 401 && error.response.data.token_expired === true  && originalRequest.url !== '/api/login' && originalRequest.url !== '/api/logout') {
            if (!isRefreshing){
            isRefreshing = true
            store.dispatch("auth/refreshToken").then((response) => {
                if(!response)return
                let access_token = response
                isRefreshing = false
                if (access_token) {
                    store.auth.commit('SET_BEARER', access_token)
                }
                else if (!access_token || access_token === '')  {
                  delete axios.defaults.headers.common
                }
                onAccessTokenFetched(access_token)
              }).catch((e) => {
              //console.log(e)
            })
          }

          return new Promise((resolve) => {
            addSubscriber(accessToken => {
              // replace the expired token and retry
              originalRequest.headers.Authorization = 'Bearer ' + accessToken
              Cookies.set('token', accessToken)
              resolve(axios(originalRequest))
            })
          })
        }

        return Promise.reject(error)
    })
  },

      get (url, request) {
        return axios.get(url, request)
          .then((response) => Promise.resolve(response.data))
          .catch((error) => Promise.reject(error))
      },
      post (url, request) {
        //console.log(url)
        return axios.post(url, request)
          .then((response) => Promise.resolve(response.data))
          .catch((error) => Promise.reject(error))
      },
      patch (url, request) {
        if (request instanceof FormData) {
          request.append('_method', 'PATCH')
        } else {
          request._method = 'PATCH'
        }
        return axios.post(url, request)
          .then((response) => Promise.resolve(response.data))
          .catch((error) => Promise.reject(error))
      },
      delete (url, request) {
        return axios.delete(url, request)
          .then((response) => Promise.resolve(response.data))
          .catch((error) => Promise.reject(error))
      },
      setToken (token) {
        if (token) {
          axios.defaults.headers.common = { 'Authorization': `Bearer ${token}` }
        }
        else if (!token || token==='')  {
          delete axios.defaults.headers.common
        }
      },
      clearCreds() {
        localStorage.removeItem('access-token')
        localStorage.removeItem('user_permissions')
        state.token = ''
        state.refresh_token = ''
        delete axios.defaults.headers.common
      }
  }



