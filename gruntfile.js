// 'use strict';
module.exports = function (grunt) {

   grunt.initConfig({
      jshint: {
         options: {
            jshintrc: '.jshintrc'
         },
         all: [
            'Gruntfile.js',
            'js/**/*.js',
            '!build/app.min.js'
         ]
      },
      sass: {
         dist: {
            options: {
               style: 'compressed',
               compass: false,
               sourcemap: false
            },
            files: {
               'build/main.css': [
                  'sass/*.scss'
               ]
            }
         }
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
      watch: {
         options: {
            livereload: true
         },
         sass: {
            files: [
               'sass/**/*.scss'
            ],
            tasks: ['sass']
         },
         js: {
            files: [
               'js/**/*.js'
            ],
            tasks: ['jshint', 'uglify']
         },
         php:{
         files: [
            '*.php'
         ]
         },
         html: {
            files: [
               '**/*.html'
            ]
         }
      },
      clean: {
         dist: [
            'build/main.css',
            'build/main.js'
         ]
      }
   });

   // Load tasks
   grunt.loadNpmTasks('grunt-contrib-clean');
   grunt.loadNpmTasks('grunt-contrib-jshint');
   grunt.loadNpmTasks('grunt-contrib-uglify');
   grunt.loadNpmTasks('grunt-contrib-watch');
   grunt.loadNpmTasks('grunt-contrib-sass');

   // Register tasks
   grunt.registerTask('default', [
      'clean',
      'sass',
      'uglify'
   ]);
   grunt.registerTask('dev', [
      'watch'
   ]);

};