<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
        <h1>Effortlessly Manage Your Projects and Websites in One Powerful Platform</h1>
        <p>Build, manage, and optimize your online presence with ease.</p>
        <a href="#contact" class="btn">Get Started</a>
    </section>

    <!-- Image Section -->
    <section class="image-section">
        <img src="<?php  echo get_template_directory_uri(); ?>/image/background.jpg" alt="Sample Image">
    </section>

    <!-- Core Strengths Section -->
    <section class="core-strengths">
        <h2>Core Strengths</h2>
        <h3>What Sets Us Apart</h3>
        <div class="strengths-container">
            <div class="strength-item">
                <h4>01</h4>
                <h5>Seamless User Management</h5>
                <p>Effortlessly handle user details, project stages, and advanced features like e-commerce and SEO.</p>
            </div>
            <div class="strength-item">
                <h4>02</h4>
                <h5>Customized User Experience</h5>
                <p>Tailored services for free and paid users, offering distinct levels of service based on their needs.</p>
            </div>
            <div class="strength-item">
                <h4>03</h4>
                <h5>Robust Monitoring System</h5>
                <p>Comprehensive user activity tracking and insights to enhance engagement and platform performance.</p>
            </div>
        </div>
    </section>

    <!-- Vision Section -->
    <section class="vision-section">
        <div class="image-section">
            <img src="<?php echo get_template_directory_uri(); ?>/image/vision.png" alt="Vision Image">
        </div>
        <div class="text-section">
            <h6>Our Vision</h6>
            <h1>Transforming Ideas into Reality</h1>
            <p>At our core, we believe in the power of ideas. Our mission is to turn those ideas into reality, delivering exceptional solutions that exceed expectations.</p>
            <a href="#" class="read-more-button">Read More</a>
        </div>
    </section>
    <section class="services">
        <h2>Our Solutions</h2>
        <h3>Explore Our Range of Services</h3>
        <div class="services-container">
            <div class="service-item">
                <img src="<?php  echo get_template_directory_uri(); ?>/image/service1.jpg" alt="User Authentication">
                <h4>User Authentication</h4>
                <p>Secure login, profile management, activity tracking.</p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="service-item">
                <img src="<?php  echo get_template_directory_uri(); ?>/image/service2.jpg" alt="Subscription Management">
                <h4>Subscription Management</h4>
                <p>Flexible plans, easy upgrades, detailed subscription information.</p>
                <a href="#" class="btn">Read More</a>
            </div>
            <div class="service-item">
                <img src="<?php  echo get_template_directory_uri(); ?>/image/service3.png" alt="E-commerce Integration">
                <h4>E-commerce Integration</h4>
                <p>Advanced online selling features with SEO optimization.</p>
                <a href="#" class="btn">Read More</a>
            </div>
            <!-- Add more service items as needed -->
        </div>
    </section>
    <!-- Testimonials Section -->
    <section class="testimonials">
        <h2>Testimonials</h2>
        <div class="testimonial-container">
            <div class="testimonial-card">
                <img src="<?php  echo get_template_directory_uri(); ?>/image/test2.jpg" alt="Person 1">
                <p>neweb.ai has truly revolutionized how we manage our online projects.Its userfriendly and offers exceptional support.</p>
                <h4>John Doe</h4>
                <h5>CEO, Bussiness Owner</h5>
            </div>
            <div class="testimonial-card">
                <img src="<?php  echo get_template_directory_uri(); ?>/image/test1.jpg" alt="Person 2">
                <p>I am impressed by the efficiency and feature of neweb.ai . It has boosted our on;ine presence and sales significantly.</p>
                <h4>Jane Smith</h4>
                <h5>Bussiness Owner</h5>
            </div>
            <div class="testimonial-card">
                <img src="<?php  echo get_template_directory_uri(); ?>/image/test3.jpg" alt="Person 2">
                <p>I am impressed by the efficiency and feature of neweb.ai . It has boosted our on;ine presence and sales significantly.</p>
                <h4>Jane Smith</h4>
                <h5>Bussiness Owner</h5>
            </div>
            
        </div>
    </section>
    <!-- Value Propositions Section -->
<section class="value-propositions">
    <div class="value-prop-container">
        <div class="image-section">
            <img src="<?php  echo get_template_directory_uri(); ?>/image/value.jpg" alt="Coding Image">
        </div>
        <div class="text-section">
            <h6>WHY CHOOSE US</h6>
            <h1>Our Unique Value Propositions</h1>
            <p>Discover what sets neweb.ai apart in the digital realm.</p>
            <ul>
                <li>Personalized User Journeys</li>
                <li>Robust E-Commerce Integration</li>
                <li>SEO-Optimized Solutions</li>
            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>