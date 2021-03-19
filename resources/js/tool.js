Nova.booting((Vue, router) => {
    router.addRoute({
        name: 'nova-phpinfo',
        path: '/nova-phpinfo',
        component: require('./components/Tool'),
    })
})
