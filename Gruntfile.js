module.exports = function(grunt) {
	var deployFile = 'deploy_settings.json';
	    deployInfo = {};

	if (grunt.file.exists(deployFile)) {
		deployInfo = grunt.file.readJSON(deployFile);
	}

	grunt.initConfig({
		sshconfig: {
			production: {
				host:     deployInfo.host,
				username: deployInfo.username,
				password: deployInfo.password,
				deployTo: deployInfo.deployTo
			}
		},

		syncdeploy: {
			main: {
				src: [
					'app/**/*',
					'bootstrap/**/*',
					'config/**/*',
					'database/**/*',
					'public/**/*',
					'public/.htaccess',
					'resources/**/*',
					'storage/**/',
					'storage/**/.gitignore',
					'vendor/**/*',
					'.env',
					'artisan',
					'composer.json',
					'server.php'
				]
			},
			options: {
				removeEmpty: true,
				keepFiles: ['.env', '.htaccess', 'storage/**/*']
			}
		}
	});

	grunt.loadNpmTasks('grunt-sync-deploy');
	grunt.option('config', 'production');
	grunt.registerTask('deploy', 'syncdeploy');
};
