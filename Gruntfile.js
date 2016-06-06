module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    compass: {
      dist: {
        options: {
          sassDir: 'library/scss',
          cssDir: 'library/css',
          config: 'library/scss/config.rb',
          imagesDir: 'library/images'
        }
      }
    },

    watch: {
      css: {
        files: ['library/scss/*.scss','library/scss/**/*.scss'],
        tasks: ['compass'],
        options: {
          spawn: false,
        }
      },

      php: {
        files: ['*.php', 'library/*.php']
      },

      scripts: {
        files: ['library/js/scripts.js']
      },

      options: {
        livereload: true,
      }
    },
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['watch']);
};
