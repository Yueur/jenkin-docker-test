# Jenkins container test repo

This repo is just for testing Jenkins

## How to
0. Install and log to Jenkins
1. Create a pipeline (give it the name you want but how about "jenkins and containers")
2. In pipeline option
	* "Pipeline script from SCM"
	* "GIT"
	* Repo URL is this repo
	* Evrything else is default


## Webhook (Jenkins oriented)
### Prepare
1. Create a new item in Jenkins
2. In Build Triggers make sure `Poll SCM` is enabled
2.5 If you have a Pipeline, just use `Pipeline script from SCM` in Piepline tab
3. Save and test (Build Now)

### Test
1. Get Jenkins's address ; let's say 127.0.0.1:8080
2. Get Your repo's URL ; let's say https://github.com/Yueur/jenkin-docker-test.git
	Please note that Jenkins **HAS** tu use the same URL (if it's HTTPS then it's HTTPS ; SSH is SSH)
3. Poke at http://127.0.0.1:8080/git/notifyCommit?url=https://github.com/Yueur/jenkin-docker-test.git
	You can do this with `curl http://127.0.0.1:8080/git/notifyCommit?url=https://github.com/Yueur/jenkin-docker-test.git`
	Please note that the parm url need to be accessible by your Jenkins

4. To make auto-test after push just create a post-receive file in hooks in the server's git repo folder `$PATH/hooks/post-receive`
	Code inside: 
`#!/bin/bash

curl http://127.0.0.1:8080/git/notifyCommit?url=file:///home/yueur/Musique/serveur
`

*Please note that there need to be a change made for the repo to rebuild it*
