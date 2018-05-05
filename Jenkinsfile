pipeline {
	agent {
		dockerfile{
			// additionalBuildArgs  '--no-cache'
		}
	}
	stages{
		stage('Prepare'){
			steps {
				sh 'echo Hello world'
				sh 'echo myCustomDockerEnvVar = $myCustomDockerEnvVar'
				sh 'php -version'
				sh 'phpunit --version'
				sh 'pwd'
				sh 'ls'
			}
		}
		stage('Run'){
			steps {
				sh 'phpunit --log-junit result.xml -c phpunit.xml'
			}
		}
	}
	post {
        always {
            junit 'result.xml'
        }
    }
}
