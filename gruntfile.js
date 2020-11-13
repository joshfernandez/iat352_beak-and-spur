'use strict';
module.exports = function (grunt) {

    grunt.initConfig({
        // jshint: {
        //     options: {
        //         jshintrc: '.jshintrc'
        //     },
        //     all: [
        //         'Gruntfile.js',
        //         'js/**/*.js',
        //         '!build/app.min.js'
        //     ]
        // },
        clean: {
            dist: [
                'build/'
            ]
        },
        uglify: {
            dist: {
                files: {
                    'build/js/main.js': [
                        'js/main.js'
                    ]
                },
                options: {
                    sourceMap: 'build/js/main.map',
                    sourceMappingURL: 'build/js/main.js.map'
                }
            }
        },
        stylus: {
            compile: {
                options: {
                    compress: true,
                    sourcemap: {
                        inline: true,
                        comment: true
                    },
                    paths: ['stylus'],
                    // relativeDest: '../out', //path to be joined and resolved with each file dest to get new one.
                    // //mostly useful for files specified using wildcards
                    // // urlfunc: 'data-uri', // use data-uri('test.png') in our code to trigger Data URI embedding
                    // use: [
                    //    function () {
                    //       return testPlugin('yep'); // plugin with options
                    //    },
                    //    require('fluidity') // use stylus plugin at compile time
                    // ]
                },
                files: {
                    'build/css/main.css': ['stylus/*.styl']
                }
            }
        },
        copy: {
            php: {
                files: [
                    { src: '*.php', dest: 'build/' }
                ]

            }
            ,
            backend: {
                files: [
                    { src: 'php-backend/**', dest: 'build/' }
                ]
            },
            assets: {
                files: [
                    { src: 'assets/**', dest: 'build/' }
                ]
            },
            userAssets: {
                files: [
                    { src: 'user-assets/**', dest: 'build/' }
                ]
            },
            fonts: {
                files: [
                    { src: 'site-fonts/**', dest: 'build/' }
                ]
            }
            ,
            imgs: {
                files: [
                    { src: 'imgs/**', dest: 'build/imgs/' }
                ]
            }
            // ,
            // fonts: {
            //     files: [
            //         { src: 'fonts/**', dest: 'build/fonts/' }
            //     ]
            // }


        },
        watch: {
            options: {
                livereload: true
            },
            stylus: {
                files: [
                    'stylus/*.styl'
                ],
                tasks: ['stylus']
            },
            js: {
                files: [
                    'js/**/*.js'
                ],
                tasks: ['jshint', 'uglify']
            },
            php: {
                files: [
                    '*.php',
                    'php-backend/'
                ],

                tasks: [
                    'copy:php',
                    'copy:backend'
                ]
            },
            assets: {
                files: [
                    'assets/',
                    'user-assets/',
                    'site-fonts/',
                    'imgs/',
                ],
                tasks: [
                    // 'clean',
                    'copy:imgs',
                    'copy:fonts',
                    "copy:userAssets",
                    "copy:assets"
                ]
            },

        },


    });

    // Load tasks
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-jshint');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-stylus');
    grunt.loadNpmTasks('grunt-contrib-copy');
    // Register tasks
    grunt.registerTask('default', [
        'clean',
        'uglify',
        // 'watch',
        // 'jshint',
        'stylus',
        'copy',
    ]);
    grunt.registerTask('dev', [
        'watch'
    ]);

};