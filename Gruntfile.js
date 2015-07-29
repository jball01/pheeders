module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        less: {
            development: {
                options: {
                    compress: true,
                    yuicompress: true,
                    optimization: 2
                },
                files: {
                    "sites/all/themes/pheeders_bootstrap/css/style.css": "sites/all/themes/pheeders_bootstrap/less/style.less"
                }
            }
        },
        watch: {
            options: {
                livereload: true
            },
            styles: {
                files: ["sites/all/themes/pheeders_boostrap/less/*.less", "sites/all/themes/pheeders_bootstrap/less/Pages/*.less"],
                tasks: ['less'],
                options: {
                    spawn: false
                }
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['watch']);
}
