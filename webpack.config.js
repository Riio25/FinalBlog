const path = require('path');

module.exports = {
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
            'CSS': path.resolve('public/css')
        },
    },
};
