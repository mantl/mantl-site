module.exports = function(grunt) {
	
	grunt.initConfig({
		
		pkg: grunt.file.readJSON("package.json"),
		
		sass : {
			dist : {
				options: {                      
					style: "compressed"
      			},
				files : {
					"../../public/static/css/style.min.css" : "scss/main.scss"
				}
			}
		},
		
		watch : {
			
			scripts : {
				files: ["js/*"],
				tasks: ["uglify:bower"]
			},

			styles : {
				files: "**/*.scss",
			    tasks: ["sass"]		
			}
		},
		
		bower_concat : {
			
			all : {
				dest : "js/bundle.js",
				exclude : ["modernizr"],
				include : ["jquery", "jquery-migrate", "velocity", "isInViewport"]
			}
		},
		
		uglify : {
			bower : {
				options: {
					mangle : true,
					compress : true
    			},
				files : {
					"../../public/static/js/bundle.min.js" : ["js/bundle.js", "js/main.js"]
    			}
  			}
		}
	});
	
	grunt.loadNpmTasks("grunt-contrib-uglify");
	grunt.loadNpmTasks("grunt-bower-concat");
	grunt.loadNpmTasks("grunt-contrib-sass");
	grunt.loadNpmTasks("grunt-contrib-watch");
	
	grunt.registerTask("buildstyles",["sass", "watch:styles"]);
	grunt.registerTask("buildscripts", ["bower_concat", "uglify:bower", "watch:scripts"]);
	grunt.registerTask("build", ["bower_concat", "uglify:bower", "sass"]);
};