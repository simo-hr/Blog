export default async function ({ $axios, store, redirect }) {
  const response = await $axios.get('categories').catch((error) => {
    // eslint-disable-next-line no-console
    console.log(error)
  })
  store.dispatch('category/setCategories', response.data)
  const isAdmin = store.getters['auth/isAdmin']
  if (!isAdmin) {
    redirect('/admin/login')
  }
}
