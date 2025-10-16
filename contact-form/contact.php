<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Building Engineer & Architect</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <main style="padding-top: 5rem;">
        <section id="contact" class="contact-section">
            <h2>Request a Quote or Send a Message</h2>

            <?php
            if (isset($_GET['success']) && $_GET['success'] == 1) {
                echo '<p style="color:green;font-weight:bold;">✅ Your message has been sent successfully!</p>';
            }
            if (isset($_GET['error']) && $_GET['error'] == 1) {
                echo '<p style="color:red;font-weight:bold;">❌ There was an error sending your message. Try again later.</p>';
            }
            ?>

            <form action="send_email.php" method="POST" class="contact-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="firstName">First Name *</label>
                        <input type="text" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                        <label for="lastName">Last Name *</label>
                        <input type="text" id="lastName" name="lastName" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>
                </div>

                <div class="form-group">
                    <label for="projectType">Project Type</label>
                    <select id="projectType" name="projectType">
                        <option value="">Select a project type</option>
                        <option value="Residential">Residential</option>
                        <option value="Commercial">Commercial</option>
                        <option value="Industrial">Industrial</option>
                        <option value="Renovation">Renovation</option>
                        <option value="Consultation">Consultation</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="budget">Budget Range</label>
                    <select id="budget" name="budget">
                        <option value="">Select a budget range</option>
                        <option value="Under $100K">Under $100K</option>
                        <option value="$100K - $500K">$100K - $500K</option>
                        <option value="$500K - $1M">$500K - $1M</option>
                        <option value="$1M - $5M">$1M - $5M</option>
                        <option value="Over $5M">Over $5M</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Project Description *</label>
                    <textarea id="message" name="message" rows="5" required placeholder="Please describe your project..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-lg">
                    Send Message
                </button>
            </form>
        </section>
    </main>
     <script src="./script.js"></script>
    
    <style>
        .contact-hero {
            padding: 5rem 0;
            background: var(--gradient-subtle);
            text-align: center;
        }
        
        .contact-content {
            padding: 5rem 0;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 4rem;
            align-items: start;
        }
        
        .form-title, .info-title {
            font-size: 2rem;
            font-weight: 700;
            color: var(--foreground);
            margin-bottom: 1rem;
        }
        
        .form-subtitle {
            color: var(--muted-foreground);
            margin-bottom: 2rem;
        }
        
        .contact-form {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 2rem;
            box-shadow: var(--shadow-card);
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1rem;
        }
        
        .form-group {
            margin-bottom: 1.5rem;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--foreground);
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid var(--border);
            border-radius: calc(var(--radius) - 2px);
            background: var(--background);
            color: var(--foreground);
            font-size: 1rem;
            transition: border-color 0.2s ease;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--ring);
            box-shadow: 0 0 0 2px hsl(var(--ring), 0.2);
        }
        
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        .contact-info-section {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 2rem;
            box-shadow: var(--shadow-card);
            height: fit-content;
        }
        
        .contact-methods {
            margin-bottom: 2rem;
        }
        
        .contact-method {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            margin-bottom: 1.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid var(--border);
        }
        
        .contact-method:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .method-icon {
            width: 3rem;
            height: 3rem;
            background: var(--accent-soft);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent);
            flex-shrink: 0;
        }
        
        .method-content h3 {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--foreground);
            margin-bottom: 0.25rem;
        }
        
        .method-content p {
            color: var(--foreground);
            margin-bottom: 0.25rem;
        }
        
        .method-content a {
            color: var(--accent);
            text-decoration: none;
        }
        
        .method-content a:hover {
            text-decoration: underline;
        }
        
        .method-content span {
            color: var(--muted-foreground);
            font-size: 0.875rem;
        }
        
        .consultation-cta {
            background: var(--gradient-subtle);
            padding: 1.5rem;
            border-radius: var(--radius);
            text-align: center;
        }
        
        .consultation-cta h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--foreground);
            margin-bottom: 0.5rem;
        }
        
        .consultation-cta p {
            color: var(--muted-foreground);
            margin-bottom: 1rem;
            font-size: 0.875rem;
            line-height: 1.5;
        }
        
        .faq-section {
            padding: 5rem 0;
            background: var(--gradient-subtle);
        }
        
        .faq-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        
        .faq-item {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 1.5rem;
            box-shadow: var(--shadow-card);
        }
        
        .faq-question {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--foreground);
            margin-bottom: 0.75rem;
        }
        
        .faq-answer {
            color: var(--muted-foreground);
            line-height: 1.6;
            margin: 0;
        }
        
        @media (max-width: 768px) {
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .form-row {
                grid-template-columns: 1fr;
            }
            
            .contact-form,
            .contact-info-section {
                padding: 1.5rem;
            }
        }
    </style>
</body>
</html>
