module.exports = (grunt) ->

  # Get all grunt modules
  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks)
  require('time-grunt')(grunt)

  # Project configuration.
  grunt.initConfig

    # Collect data about the project
    pkg: grunt.file.readJSON('package.json')

    # Set Banner for some generated files
    banner: '/*! <%= pkg.name %> - v<%= pkg.version %> - ' + '<%= grunt.template.today("yyyy-mm-dd") %> */\n'

    # coffee
    coffee:
      all:
        files: [
          expand: true
          cwd: '<%= pkg.paths.src.coffee %>'
          src: ['*.coffee']
          dest: '<%= pkg.paths.src.js %>'
          ext: '.js'
        ]

    # concat
    concat:
      js:
        src: [
          'assets/js_lib/**/*.js',
          '<%= pkg.paths.src.js_concat %>'
        ]
        dest: '<%= pkg.paths.build.js %>script.js'
      css:
        src: '<%= pkg.paths.src.css_concat %>'
        dest: '<%= pkg.paths.build.css %>styles.css'

    # eslint
    eslint:
      options:
        config: '.eslintrc'
      all: ['<%= pkg.paths.src.js %>*.js']

    # sass
    sass:
      all:
        files: [
          expand: true
          cwd: '<%= pkg.paths.src.sass %>'
          src: ['*.sass','!_*.sass']
          dest: '<%= pkg.paths.src.css %>'
          ext: '.css'
        ]

    # autoprefixer
    autoprefixer:
      all:
        files: [
          expand: true
          cwd: '<%= pkg.paths.src.css %>'
          src: ['*.css']
          dest: '<%= pkg.paths.src.css %>'
          ext: '.css'
        ]

    # imageEmbed
    # REMEMBER! Fonts should be ignored
    # by trailing a `/*ImageEmbed:skip*/`
    # after `src: url(...)`
    imageEmbed:
      options:
        deleteAfterEncoding : false
      all:
        files: [
          expand: true
          cwd: '<%= pkg.paths.src.css %>'
          src: ['*.css']
          dest: '<%= pkg.paths.src.css %>'
        ]

    # cssmin
    cssmin:
      options:
        banner: '<%= banner %>'
      all:
        files: [
          expand: true
          cwd: '<%= pkg.paths.src.css %>'
          src: ['*.css']
          dest: '<%= pkg.paths.src.css %>'
          ext: '.css'
        ]

    # watch
    watch:
      # watch js
      js:
        files: ['<%= pkg.paths.src.js %>*.js', '.eslintrc']
        tasks: ['newer:eslint', 'concat:js']
        options:
          livereload: true
      # watch sass
      sass:
        files: ['<%= pkg.paths.src.sass %>*.sass']
        tasks: ['newer:sass', 'newer:imageEmbed', 'newer:cssmin', 'concat:css']
        # tasks: ['newer:sass', 'newer:autoprefixer', 'newer:imageEmbed', 'newer:cssmin', 'concat:css']
        options:
          livereload: true

      # watch copy
      copy:
        files: [
          '<%= pkg.paths.src.dir %>*'
          '<%= pkg.paths.src.dir %>site/**/*'
          '<%= pkg.paths.src.dir %>images/**/*'
        ]
        tasks: ['newer:copy']
        options:
          livereload: true

      # watch content
      content:
        files: [
          '<%= pkg.paths.src.dir %>content/**/*'
        ]
        tasks: ['newer:copy']
        options:
          livereload: true

    # copy
    copy:
      all:
        files: [
          expand: true
          cwd: '<%= pkg.paths.src.dir %>'
          src: ['**/*','!<%= pkg.paths.src.dir %>**','<%= pkg.paths.src.dir %>images/**/*']
          dest: '<%= pkg.paths.build.dir %>'
        ]
      bower:
        files: [
          expand: true
          cwd: 'bower_components/'
          src: [
            'jquery/dist/jquery.min.js',
            'underscore/underscore-min.js'
          ]
          dest: '<%= pkg.paths.build.dir %>/js_lib'
        ]

    # php
    php:
      all:
        options:
          port: 1337
          hostname: 'localhost'
          base: '<%= pkg.paths.root %>'
          keepalive: true
          open: true

    # concurrent
    concurrent:
      all:
        tasks: [
          'php'
          'watch'
          'notify'
        ]
      options:
        logConcurrentOutput: true

    # notify
    notify:
      server:
        options:
          title: 'Yo'
          message: 'Server läuft auf <%= php.all.options.hostname %>:<%= php.all.options.port %>'

  # Default task(s)
  # grunt.registerTask('scripts', ['coffee', 'eslint', 'concat:js'])
  grunt.registerTask('scripts', ['coffee', 'concat:js'])
  grunt.registerTask('styles', ['sass', 'imageEmbed', 'cssmin', 'concat:css'])
  # grunt.registerTask('styles', ['sass', 'autoprefixer', 'imageEmbed', 'cssmin', 'concat:css'])
  grunt.registerTask('default', ['copy', 'scripts', 'styles', 'concurrent'])
