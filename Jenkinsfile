pipeline {
	agent {
		docker{
			image 'phpunit-5'
		}
	}
	stages{
		stage('Prepare'){
			steps {
				sh 'php -version'
				sh 'phpunit --version'
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
