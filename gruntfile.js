module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            dist:{
                src:[
                    'assets/js/plugin/*',
                    'assets/js/global.js'
                ],
                dest: 'assets/js/build/production.js',
            }
        },

        uglify:{
            build:{
                src: 'assets/js/build/production.js',
                dest: 'assets/js/build/production.min.js'
            }
        },

        imagemin:{
            dynamic:{
                file:[{
                    cwd: 'assets/images/',
                    src:['**/*.{png,jpg,gif}'],
                    dest: 'assets/images/build/'
                }]
            }
        },

        sass:{
            dist:{
                options:{
                    style: 'expanded'
                },
                files:{
                    'assets/css/build/global.css': 'assets/sass/global.scss',
                    'assets/css/build/page/*.css':'assets/sass/page/*.scss'
                }
            }
        },

        autoprefixer: {
            dist: {
                options: {
                    browsers: ['last 2 version', 'ie 8', 'ie 9']
                }
                files: {
                    'assets/css/build/global.css': 'global.css',
                    'assets/css/build/page/*.css': 'assets/css/build/page/'
                }

            }
        },

        watch:{
            scripts:{
                files:['assets/js/*.js'],
                tasks:['concat','uglify'],
                options:{
                    spawn: false,
                }
            },
            css:{
                files:['assets/css/*.scss'],
                tasks:['sass'],
                options:{
                    spawn: false,
                }
            },
            styles: {
                files: ['assets/css/build/*'],
                tasks: ['autoprefixer']
            }
        }

    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-autoprefixer');

    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat','uglify','imagemin','sass','autoprefixer','watch']);

};