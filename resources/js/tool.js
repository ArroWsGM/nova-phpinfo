Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'nova-phpinfo',
      path: '/nova-phpinfo',
      component: require('./components/Tool'),
    },
  ])
})
