# Mantl.io Website

## Build
Looking at the dependancies and configuration requirements, I decided to dockerize the deployment so we can easily host on GCE/Mantl/Wherever.
The website for all it’s dynamic rendering is actually static with *ZERO* necessary backing stores. So multiple instances of the container can be run to scale out with ease.

There is a single build step for new code changes as follows :)

```
git clone git@github.com:CiscoCloud/mantl-site.git
# edit code to your hearts content
docker build .
```

The docker build will create you a new container with all app code and dependancies built in. You can then run this locally for testing as follows:
```
$ docker run -d -p 8000:80 <NEW IMAGE ID>
```

Then, add mantl.io to your /etc/hosts file for localhost to test with correct DNS.
http://mantl.io:8000 will then provide your new preview of the site.
If you get a forbidden message, you're hitting the wrong DNS name or haven't set your /etc/hosts file.

## Deploy (production)
Once the container is built, we are versioning and pushing to bintray. Then using kubernetes to deploy multiple instances behind a load balancer.
The  Kubernetes load balancer IP has then been configured in our mantl.io cloudflare account (@matjohn2 for details) to add a cacheing and basic analytics layer in front of the site (same as the previous mantl.io site).

### Tag and push the new version
Note 'v1' needs to be the a new increased integer, look at the current versions on bintray and +1.

```
$ docker tag 7b61ae0beb56 shippedrepos-docker-fcn-deploy-dev.bintray.io/mantlio:v1
$ docker push shippedrepos-docker-fcn-deploy-dev.bintray.io/mantlio:v1
```

### Tell Kubernetes to do a rolling upgrade.
Use whatever your new version number from the tag operation above.

```
kubectl --namespace mantl-site rolling-update mantl-site --image=shippedrepos-docker-fcn-deploy-dev.bintray.io/mantlio:v2
```

### Verify

```
$> kubectl --namespace mantl-site get po
NAME                                                READY     STATUS    RESTARTS   AGE
mantl-site-ccbe3a2197766816389b93c60c19ce2b-7pp4y   1/1       Running   0          22m
mantl-site-ccbe3a2197766816389b93c60c19ce2b-asiv6   1/1       Running   0          24m
mantl-site-ccbe3a2197766816389b93c60c19ce2b-cw26t   1/1       Running   0          27m
mantl-site-ccbe3a2197766816389b93c60c19ce2b-g46y5   1/1       Running   0          25m
mantl-site-ccbe3a2197766816389b93c60c19ce2b-s2bqs   1/1       Running   0          21m

 $> kubectl --namespace mantl-site get svc
NAME         CLUSTER-IP      EXTERNAL-IP      PORT(S)   AGE
mantl-site   10.159.253.43   104.196.119.13   80/TCP    57m
```

This is currently hosted on a Google GKE cluster. We can easily put this wherever in future if a move is needed.

Any issues/changes, PR's or requests to deploy new versions, currently please shout @matjohn2
