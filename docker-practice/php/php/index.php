<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DevOps Engineer Portfolio</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            line-height: 1.6;
        }
        header {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: #fff;
            padding: 40px 0;
            text-align: center;
            position: relative;
        }
        header h1 {
            margin: 0;
            font-size: 3em;
        }
        nav {
            margin-top: 10px;
        }
        nav a {
            margin: 0 15px;
            color: #fff;
            text-decoration: none;
            font-size: 1.2em;
            transition: color 0.3s;
        }
        nav a:hover {
            color: #ff7e5f;
        }
        section {
            padding: 40px 20px;
            max-width: 1200px;
            margin: auto;
        }
        #biography {
            background: #fff;
            padding: 40px;
            margin-bottom: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
            border-radius: 10px;
        }
        #biography img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
            object-fit: cover;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        #biography h2 {
            border-bottom: 2px solid #1e3c72;
            padding-bottom: 10px;
            margin-bottom: 20px;
            color: #1e3c72;
        }
        #projects, #case-studies, #certifications, #open-source, #contact {
            background: #fff;
            padding: 40px;
            margin-bottom: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        #projects h2, #case-studies h2, #certifications h2, #open-source h2, #contact h2 {
            border-bottom: 2px solid #1e3c72;
            padding-bottom: 10px;
            margin-bottom: 20px;
            color: #1e3c72;
        }
        .project, .case-study, .certification, .open-source-contribution {
            margin-bottom: 20px;
            background: #f7f9fc;
            padding: 20px;
            border-radius: 5px;
            border-left: 4px solid #1e3c72;
        }
        .project h3, .case-study h3, .certification h3, .open-source-contribution h3 {
            margin-bottom: 10px;
            color: #2a5298;
        }
        #contact form {
            display: flex;
            flex-direction: column;
        }
        #contact form input, #contact form textarea {
            margin-bottom: 15px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            background: #f9f9f9;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        #contact form button {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 5px;
            font-size: 1.2em;
            cursor: pointer;
            transition: background 0.3s;
        }
        #contact form button:hover {
            background: linear-gradient(135deg, #2a5298, #1e3c72);
        }
        #social {
            margin-top: 30px;
        }
        #social a {
            margin: 0 10px;
            color: #1e3c72;
            text-decoration: none;
            font-size: 1.5em;
            transition: color 0.3s;
        }
        #social a:hover {
            color: #ff7e5f;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #2a5298;
            color: #fff;
        }
        footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <header>
        <h1>ONU ONYEKA CHARLES</h1>
        <h2>DEVOPS / CLOUD ENGINEER</h2>
        <h3>11 Mission Street, Lagos, 234, Nigeria.</h3>
        <h3>+2347065471661</h3>
        <h3>Email: onyekagodonu@yahoo.com</h3>
        <nav>
            <a href="#biography">Biography</a>
            <a href="#projects">Projects</a>
            <a href="#case-studies">Case Studies</a>
            <a href="#certifications">Certifications</a>
            <a href="#open-source">Open Source</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <section id="biography">
        <img src="my-pic.jpg" alt="ONU ONYEKA CHARLES">
        <h2>Biography</h2>
        <p>
            I am a seasoned DevOps Engineer with three years of experience in designing, implementing, and managing scalable 
and resilient cloud infrastructure. My expertise spans across CI/CD pipelines, infrastructure automation, and 
continuous monitoring using industry-leading tools. Proficient in scripting languages like Bash, containerization technologies
like Linux, Jenkins, GitHub Actions, Git, Docker and Kubernetes, and cloud platforms like AWS. I have a combination of hard and
soft skills like imaginative thinking, problem-solving, etc. I’m passionate about improving development workflows
and operational efficiency.
        </p>
        <div id="social">
            <a href="https://twitter.com/OnyekaOnu" target="_blank">Twitter</a>
            <a href="https://www.linkedin.com/in/onu-onyeka" target="_blank">LinkedIn</a>
            <a href="https://github.com/onyeka-hub" target="_blank">GitHub</a>
        </div>
    </section>

    <section id="projects">
        <h2>Projects</h2>
        <div class="project">
            <h3>CI/CD Pipeline for Microservices</h3>
            <p>
                Implemented a CI/CD pipeline for a microservices architecture hosted on AWS. Integrated Jenkins with GitHub for continuous integration, Docker for containerization, and Kubernetes for orchestration.
                <br><strong>Technologies:</strong> Jenkins, GitHub, Docker, Kubernetes, Helm, AWS EKS, Nexus.
                <br><strong>Outcome:</strong> Reduced deployment time by 50% and increased deployment frequency from monthly to weekly.
            </p>
        </div>
        <div class="project">
            <h3>Infrastructure as Code (IaC) with Terraform</h3>
            <p>
                Automated the provisioning of cloud infrastructure using Terraform. Managed infrastructure for multiple environments (dev, test, prod) using a modular approach.
                <br><strong>Technologies:</strong> Terraform, AWS, Azure, Packer.
                <br><strong>Outcome:</strong> Reduced infrastructure provisioning time from days to minutes and minimized manual errors.
            </p>
        </div>
        <div class="project">
            <h3>Automated Monitoring and Alerting System</h3>
            <p>
                Set up a monitoring and alerting system using Prometheus and Grafana for real-time metrics and alerts on a Kubernetes cluster.
                <br><strong>Technologies:</strong> Prometheus, Grafana, Alertmanager, Kubernetes, AWS CloudWatch.
                <br><strong>Outcome:</strong> Improved system reliability with early detection of issues, leading to a 40% reduction in downtime.
            </p>
        </div>
    </section>

    <section id="case-studies">
        <h2>Case Studies</h2>
        <div class="case-study">
            <h3>DevOps Transformation for a Legacy Application</h3>
            <p>
                Migrated a monolithic application to a microservices-based architecture. Introduced CI/CD, automated testing, and infrastructure as code.
                <br><strong>Process:</strong> Assessed the current state, planned and executed the transformation. Educated the team on best practices and tools.
                <br><strong>Results:</strong> Reduced deployment times by 60% and improved application performance by 30%.
            </p>
        </div>
        <div class="case-study">
            <h3>Cloud Cost Optimization</h3>
            <p>
                Conducted a cloud cost analysis and implemented cost-saving measures across multiple AWS accounts. Automated scaling policies and rightsized resources.
                <br><strong>Process:</strong> Analyzed usage patterns, identified inefficiencies, and applied best practices for cost management.
                <br><strong>Results:</strong> Achieved 35% cost savings without impacting performance.
            </p>
        </div>
    </section>

    <section id="certifications">
        <h2>Certifications</h2>
        <div class="certification">
            <h3>AWS Certified Solutions Architect – Associate</h3>
            <p>Validated expertise in designing and deploying scalable, highly available, and fault-tolerant systems on AWS.</p>
        </div>
        <div class="certification">
            <h3>Certified Kubernetes Administrator (CKA)</h3>
            <p>Proved knowledge in administrating Kubernetes clusters, deploying applications, and managing cluster resources.</p>
        </div>
        <div class="certification">
            <h3>HashiCorp Certified: Terraform Associate</h3>
            <p>Demonstrated proficiency in infrastructure as code concepts, Terraform workflows, and cloud infrastructure management.</p>
        </div>
    </section>

    <section id="open-source">
        <h2>Open Source Contributions</h2>
        <div class="open-source-contribution">
            <h3>GitHub Action for Terraform</h3>
            <p>Contributed to an open-source GitHub Action for automating Terraform workflows in CI/CD pipelines.</p>
        </div>
        <div class="open-source-contribution">
            <h3>Kubernetes Dashboard Enhancements</h3>
            <p>Submitted improvements to the Kubernetes Dashboard project, enhancing usability and functionality.</p>
        </div>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <button type="submit">Send Message</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $message = htmlspecialchars($_POST['message']);
            // For the sake of this example, we'll just echo the values.
            // In a real-world scenario, you might send this information via email or store it in a database.
            echo "<p>Thank you, $name. Your message has been received.</p>";
        }
        ?>
    </section>

    <footer>
        <p>&copy; 2024 ONU ONYEKA CHARLES. All rights reserved.</p>
    </footer>
</body>
</html>
