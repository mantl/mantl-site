<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    public static function devopsFeatures() {

    	return collect([
	        [
	            'title' => 'Runs On Any Cloud',
	            'icon' => 'runs-on-any-cloud.svg',
	            'excerpt' => 'No vendor lock-in. Mantl runs equally well on any provider, saving you time and energy.',
	            'content' => 'Focus on your apps, not on configuration. Playbooks and roles will work on any provider (or metal) as long as it can run CentOS 7 or equivalent. Openstack, bare metal, Vagrant, GCP, VMware and AWS are all supported. To ensure quality, Mantl is tested against a range of cloud providers, and support for other clouds is easy to set up using integrated component Terraform.',
	            'cta_text' => 'Get started with Mantl',
	            'cta_url' => url('download')
	        ],
	        [
	            'title' => 'Flexible',
	            'icon' => 'flexible.svg',
	            'excerpt' => 'A diverse set of technologies and tools allows you to pick the ones that fit your needs.',
	            'content' => 'Focus on your expertise. Setting up a microservices infrastructure can be an incredibly time-consuming task. Mantl harnesses the best-of-breed open source components and packages them as a single, intuitive runtime environment for microservices. A curated stack saves you time on design and deployment, time that can be used to write code, focus on your core skills and ultimately innovate.',
	            'cta_text' => 'Explore Mantl technologies',
	            'cta_url' => url('technologies')
	        ],
	        [
	            'title' => 'Data Solution',
	            'icon' => 'data-solution.svg',
	            'excerpt' => 'Integrated tools like Cassandra, Spark & Hadoop make Mantl great for Big Data.',
	            'content' => 'Manage your resources effectively. Data demands are growing by the day making it more difficult to analyze and store. Setting up a system to support Big Data can take months and can leave you with all sorts of security and networking problems. Mantl can run all the frameworks supported on Apache Mesos, making it a great solution for data services. These include: Hadoop, Spark, Cassandra, Kafka and Elastic Search, which can all easily be deployed using mantl-api.',
	            'cta_text' => '',
	            'cta_url' => ''
	        ],
	        [
	            'title' => 'Integrated Cloud Services',
	            'icon' => 'integrated-cloud-services.svg',
	            'excerpt' => 'Service discovery, secret storage, load balancing, logging and more available right out-of-the-box.',
	            'content' => 'Balanced and fully-connected components. Consul for Service discovery, Vault for secret storage, Traefik for load balancing, Docker for native container support, and ELK for logging. These are just some of the integrated cloud services that make up Mantl architecture, with others being added daily. A fully curated experience means that you won’t have to worry about gluing these essential services together to set up your platform — it’s all available right out-of-the-box.',
	            'cta_text' => 'Explore Services',
	            'cta_url' => url('technologies')
	        ],
	        [
	            'title' => 'Connecting Containers',
	            'icon' => 'connecting-containers.svg',
	            'excerpt' => 'Run your services efficiently with multi-data center configuration and virtual networking tools.',
	            'content' => 'A container orchestrator. Mantl utilizes multi-data center configuration and virtual networking through tools that are scalable, easy to deploy and secure. Are you running complex applications on multiple data centers? Then it’s even more important for your services to run efficiently and securely. Mantl offers a solution by using add-ons like Project Calico to add the IP per container functionality, and Contiv for infrastructure operational policy specification.',
	            'cta_text' => 'Explore Add-ons',
	            'cta_url' => url('technologies#add-ons')
	        ],
	        [
	            'title' => 'Easy Provisioning',
	            'icon' => 'easy-provisioning.svg',
	            'excerpt' => 'Deploy and manage infrastructure with ease using integrated tools like Terraform & Ansible.',
	            'content' => 'Deploy all your services in one go. The Mantl framework provisions both infrastructure and software as code allowing you to deploy your services and applications in a repeatable and automated manner. Integrated components like Ansible (brings up nodes and clusters), and Terraform (provisions virtual machines), ensure that the installation of all components goes smoothly, saving you the hassle.',
	            'cta_text' => 'Get started with Mantl',
	            'cta_url' => 'https://www.youtube.com/watch?v=3f8c3o6RfYc'
	        ],
    	]);
    }


    public static function businessFeatures() {

    	return collect([

	        [
	            'title' => 'Designed for DevOps',
	            'icon' => 'designed-for-devops.svg',
	            'excerpt' => 'Easy to install and set-up, Mantl has been designed with DevOps in mind.',
	            'content' => 'By offering a centralized platform that can be standardized across applications, Mantl simplifies and automates your software development lifecycle. It is an end-to-end solution that enables your DevOps teams to focus on writing great code, not building and automating infrastructure. What usually takes months to deliver can be done quickly and efficiently, saving your enterprise major costs.',
	            'cta_text' => '',
	            'cta_url' => ''
	        ],
	        [
	            'title' => 'No Vendor Lock-in',
	            'icon' => 'no-vendor-lock-in.svg',
	            'excerpt' => 'Runs on any cloud vendor allowing for seamless integration and low costs.',
	            'content' => 'Easily adapt to new environments, technologies and practices. As an enterprise you should be able to run your applications without hassle on any cloud. By using the best open-source components out there, Mantl ensures portability across all vendors giving your enterprise the flexibility and freedom that it needs.',
	            'cta_text' => 'Get started with Mantl',
	            'cta_url' => url('download')
	        ],
	        [
	            'title' => 'Code Portability',
	            'icon' => 'code-portability.svg',
	            'excerpt' => 'Infrastructure that allows code and apps to be deployed pretty much anywhere.',
	            'content' => 'Write code and deploy. The Mantl framework is able to provision both infrastructure and software as code, allowing for maximum portability. Instead of jumping through hoops each time code is moved, your team can deploy their apps anywhere in a repeatable and automated manner. There is no need for separate installs, which offers your enterprise a durable and future-proof solution.',
	            'cta_text' => 'Learn more about Mantl',
	            'cta_url' => 'https://youtu.be/tabvIueU0bI'
	        ],
	        [
	            'title' => 'High Availability',
	            'icon' => 'high-availability.svg',
	            'excerpt' => 'Built-in services support 100% uptime for all your systems and applications.',
	            'content' => 'Customers should always be able to reach your services. In order to reduce (scheduled) downtime, you require a flexible system that can react rapidly to changes and growing demands. Mantl utilizes validated core components, such as Apache Mesos, to support a highly available infrastructure. 100% uptime for all your systems and applications doesn’t have to be out of reach.',
	            'cta_text' => 'Get flexible with Mantl',
	            'cta_url' => url('download')
	        ],
	        [
	            'title' => 'Curated Experience',
	            'icon' => 'curated-experience.svg',
	            'excerpt' => 'All components are validated in advance to save you time and reduce project risk.',
	            'content' => 'Mantl packages together all the components needed to set up your microservices infrastructure as a single and intuitive platform. Each industry standard component is open source and has been tested to ensure its interactivity with the rest of the platform. Mantl is ready to use right out-of-the-box but, if your team chooses, they can still configure the environment allowing for easy integration with the system they currently work in.',
	            'cta_text' => 'Explore Mantl technologies',
	            'cta_url' => url('technologies')
	        ],
	        [
	            'title' => 'Built-in Security',
	            'icon' => 'built-in-security.svg',
	            'excerpt' => 'Keep your network secure without having to worry about tricky configuration.',
	            'content' => 'Building a microservices infrastructure calls for a collection of tools that must be deployed, managed, and integrated separately. This process often leaves holes in your network security and management. Mantl simplifies this by offering fully integrated security features, allowing your team to maintain control over their microservices environment without having to worry about configuration.',
	            'cta_text' => '',
	            'cta_url' => ''
	        ],

	    ]);
    }


    public static function technologies() {

    	return collect([

	        [
	            'name' => 'Consul',
	            'subtitle' => 'Service Discovery and Configuration',
	            'content' => 'Registers every application allowing for them to easily find each other. Discovery is done via a DNS or HTTP interface.',
	            'url' => 'https://www.consul.io/',
	            'icon' => 'consul.png'
	        ],
	        [
	            'name' => 'Docker',
	            'subtitle' => 'Containers',
	            'content' => 'Used to ship containers. All your code is contained and not dependent on the underlying OS, which allows for portability across different hosts/systems.',
	            'url' => 'https://www.docker.com/',
	            'icon' => 'docker.png'
	        ],
	        [
	            'name' => 'Ansible',
	            'subtitle' => 'Application Deployment',
	            'content' => 'Deployes all the applications that make up Mantl. It is an agentless configuration management and app deployment tool.',
	            'url' => 'https://www.ansible.com/',
	            'icon' => 'ansible.png'
	        ],
	        [
	            'name' => 'Kubernetes',
	            'subtitle' => 'Cluster Management & Scheduling',
	            'content' => 'Supports automation of deployment, ops, and scaling of containerized applications. Fully integrated with Consul and Traefik.',
	            'url' => 'http://kubernetes.io/',
	            'icon' => 'kubernetes.png'
	        ],
	        [
	            'name' => 'Traefik',
	            'subtitle' => 'HTTP Reverse Proxy & Load Balancer',
	            'content' => 'A lightweight reverse proxy and load balancer that supports multiple backends. Dynamically updates configuration without restarting allowing for easy and automated Microservice deployment.',
	            'url' => 'https://traefik.io/',
	            'icon' => 'traefik.png'
	        ],
	        [
	            'name' => 'Marathon',
	            'subtitle' => 'Container Orchestration',
	            'content' => 'Schedules and orchestrates for Mesos. Takes specifications for apps to run and lets you scale them up and down, deploy new versions, or roll back. Ensures that a service is healthy and restarts it if it ever fails.',
	            'url' => 'https://mesosphere.github.io/marathon/',
	            'icon' => 'marathon.png'
	        ],
	        [
	            'name' => 'Vault',
	            'subtitle' => 'Secret Storage',
	            'content' => 'How and where to store secrets can pose major problems for DevOps teams. Vault encrypts and provides access to secrets, handles leases, key revocation and rolling.',
	            'url' => 'https://www.vaultproject.io/',
	            'icon' => 'vault.png'
	        ],
	        [
	            'name' => 'Terraform',
	            'subtitle' => 'Provisioning',
	            'content' => 'Provisions infrastructure on your own data centre (ie. OpenStack, VMWare) or on any major cloud provider, which include AWS and GCP. Can be installed on bare metal and virtual machines.',
	            'url' => 'https://www.terraform.io/',
	            'icon' => 'terraform.png'
	        ],
	        [
	            'name' => 'Mesos',
	            'subtitle' => 'Resource Management',
	            'content' => 'Abstracts CPU, memory, storage, and other compute resources away from machines allowing for an elastic and fault-tolerant single-pool of resources.',
	            'url' => 'http://mesos.apache.org/',
	            'icon' => 'mesos.png'
	        ],
	        [
	        	'name' => 'Contiv',
	        	'subtitle' => 'Container Storage & Networking',
	        	'content' => 'Addresses container storage and networking. Specifies infrastructure operational policies for container-based application deployment.',
	        	'url' => 'https://contiv.github.io/',
	        	'icon' => 'contiv.png'
	        ]
	    ]);
    }


    public static function addons() {

    	return collect([

	        [
	            'name' => 'GlusterFS',
	            'subtitle' => '',
	            'content' => 'Implements a distributed filesystem. It is used for container volume management and syncing around the cluster.',
	            'url' => 'http://www.gluster.org/',
	            'icon' => 'glusterfs.png'
	        ],
	        [
	            'name' => 'Calico',
	            'subtitle' => '',
	            'content' => 'Used to add the IP per container functionality. Calico connects Docker containers through IP no matter which worker node they are on.',
	            'url' => 'https://www.projectcalico.org/',
	            'icon' => 'calico.png'
	        ],
	        [
	            'name' => 'ELK Stack',
	            'subtitle' => '',
	            'content' => 'ELK combines Elasticsearch, Logstash, and Kibana to provide automatic metrics collection from all Mantl nodes to an Elasticsearch cluster. Kibana allows for visualization and analysis of this data.',
	            'url' => 'https://www.elastic.co/products',
	            'icon' => 'elk.png'
	        ],
	        [
	            'name' => 'Chronos',
	            'subtitle' => '',
	            'content' => 'Used for job orchestration. Chronos is a distributed cron service and  fault-tolerant scheduler that runs on top of Mesos.',
	            'url' => 'https://mesos.github.io/chronos/',
	            'icon' => 'chronos.png'
	        ]

	    ]);
    }


    public static function resources() {

    	return collect([

    		[
    			'tags' => 'video',
    			'url' => 'https://youtu.be/tabvIueU0bI',
    			'title' => 'Mantl overview',
    			'summary' => 'An overview for anyone interested in learning more about Mantl.'
    		],
    		[
    			'tags' => 'video',
    			'url' => 'https://www.youtube.com/watch?v=FYoAQeQmvMU',
    			'title' => 'Installing Mantl',
    			'summary' => 'A walkthrough on installing Mantl with Terraform & Ansible.'
    		],
    		[
    			'tags' => 'video',
    			'url' => 'https://www.youtube.com/watch?v=3f8c3o6RfYc',
    			'title' => 'Getting Started with Mantl',
    			'summary' => 'You’ve taken the plunge! Now it’s time to learn how to use it.'
    		],
    		[
    			'tags' => 'video',
    			'url' => 'https://communities.cisco.com/videos/15004',
    			'title' => 'Mantl on Cisco Metapod demoing a WordPress app',
    			'summary' => 'In this video Cisco`s Steve Watkins shows how Mantl works on Cisco Metapod.'
    		],
    		[
    			'tags' => 'video',
    			'url' => 'https://www.youtube.com/watch?v=kmhd2coHgQs',
    			'title' => 'Installing ELK on Mantl',
    			'summary' => 'Learn how to install the ELK stack add-on.'
    		],
    		[
    			'tags' => 'video',
    			'url' => 'https://www.youtube.com/watch?v=vabmtVbZDSc',
    			'title' => 'Kong demo on Mantl.',
    			'summary' => 'A demo on using Kong with Mantl.'
    		],
    		[
    			'tags' => 'slides',
    			'url' => 'https://communities.cisco.com/docs/DOC-66701',
    			'title' => 'Mantl and Microservices slides',
    			'summary' => 'Slides from Steve Watkins’ webinar about Mantl on Metapod'
    		]
    	]);
    }


    public static function faq() {

    	return collect([

    		[
    			'question' => 'How does Mantl compare to OpenStack Magnum?',
    			'answer' => '<p>Mantl and Magnum are currently not integrated. However, the projects could compliment one other. Magnum provides an OpenStack API to instantiate a containerized environment within an OpenStack cloud. Magnum supports a range of container clustering implementations and Operating System distributions. Please refer to the <a href="https://wiki.openstack.org/wiki/Magnum">Magnum wiki</a> for additional Magnum details.</p>

				<p>Mantl is an end-to-end solution for deploying and managing a microservices infrastructure. Mantl hosts are provisioned to OpenStack and other supported environments using <a href="https://www.terraform.io/">Terraform</a>. Terraform configuration files manage OpenStack services such as compute, block storage, networking, etc. required to instantiate a Mantl host to an OpenStack cloud. The Terraform <a href="https://www.terraform.io/docs/providers/openstack/index.html">OpenStack Provider</a> would need to be updated since it does not support Magnum. If/when this is accomplished, adding Magnum support to Mantl should be simple.</p>'
    		],
    		[
    			'question' => 'How does Mantl compare to Kubernetes?',
    			'answer' => '<p>Kubernetes is an open source orchestration system for Docker containers. It handles scheduling onto nodes in a compute cluster and actively manages workloads to ensure that their state matches the users declared intentions. Using the concepts of "labels" and "pods", it groups the containers which make up an application into logical units for easy management and discovery.</p>
    			<p>Mantl is an end-to-end solution for deploying and managing a microservices infrastructure. Mantl currently uses <a href="http://mesos.apache.org">Apache Mesos</a> as a cluster manager for microservices. The Mantl team is in the process of evaluating Kubernetes as a cluster manager.</p>'
    		]
    	]);
    }
}
