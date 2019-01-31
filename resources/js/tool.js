Nova.booting((Vue, router, store) => {
    router.addRoutes([
        {
            name: 'websockets',
            path: '/websockets',
            component: require('./components/Tool'),
        },
    ])
})
