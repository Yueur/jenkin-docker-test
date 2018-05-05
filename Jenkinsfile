pipeline {
	agent any
	
	stages {
		stage('Prepare') {
			steps {
				echo 'This stage will be executed first.'
			}
		}
		
		stage('Run') {
			parallel {
				stage('PHP 5') {
					agent {
						docker{
							image 'phpunit-5'
						}
					}
					steps {
						sh 'phpunit --log-junit result-5.xml -c phpunit.xml'
					}
					post {
						always {
							stash includes: 'result-5.xml', name: 'result-5'
						}
					}
				}
				
				stage('PHP 7') {
					agent {
						docker{
							image 'phpunit-7'
						}
					}
					steps {
						sh 'phpunit --log-junit result-7.xml -c phpunit.xml'
					}
					post {
						always {
							stash includes: 'result-7.xml', name: 'result-7'
						}
					}
				}
			}
		}
	}
	
	
	// Not working since the prvious steps are already deleted
	post {
		always {
			echo '-------------------------------------------------'
			
			unstash 'result-5'
			unstash 'result-7'
			
			junit 'result-5.xml'
			junit 'result-7.xml'
		}
	}
	
}
