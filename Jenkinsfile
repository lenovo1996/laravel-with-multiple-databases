pipeline {
  agent any
  stages {
    stage('Build Enviroment') {
      parallel {
        stage('Build env') {
          steps {
            sh 'echo \'Build enviroment\';'
          }
        }

        stage('print msg') {
          steps {
            echo 'This is an message'
          }
        }

        stage('sleep 5s') {
          steps {
            sleep 5
          }
        }

        stage('print msg 2') {
          steps {
            echo 'Done stage build enviroment'
          }
        }

      }
    }

    stage('Run test') {
      steps {
        sh 'echo \'this is an message 2\''
      }
    }

    stage('Analyzing code') {
      steps {
        sh 'echo \'trigger sonar cube\''
      }
    }

    stage('Deploy') {
      steps {
        sh 'echo \'run deploy script\''
      }
    }

  }
}