<?php
//Template Name: home

echo "This is template-home.php file";




?>



<style>       
    .main-container {
        background-color: transparent;
        overflow: hidden;
        padding: 30px;
    }
    
    .accordion-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    
    .accordion-content ul {
        list-style: outside;
        padding-left: 15px;
    }
    @media (max-width: 768px) {
        .accordion-container {
            grid-template-columns: 1fr;
        }
    }
    
    .accordion {
        width: 100%;
    }
    
    .accordion-item {
        margin-bottom: 12px;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.08);
        border: 1px solid #eaeaea;
    }
    
    .accordion-header {
        padding: 18px 20px;
        background-color: rgba(242,239,231,1);
        color: #2c3e50;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s ease;
        position: relative;
        font-family: 'Cardo';
        font-size: 22px;
    }
    
    .fqa_sct_ttl {
        font-family: 'Cardo';
        font-size: 30px;
        text-align: center;
        margin-bottom: 20px;
    }
    .accordion-header::before {
        content: '';
        width: 15px;
        height: 15px;
        position: absolute;
        right: 10px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 640'%3E%3C!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--%3E%3Cpath d='M352 128C352 110.3 337.7 96 320 96C302.3 96 288 110.3 288 128L288 288L128 288C110.3 288 96 302.3 96 320C96 337.7 110.3 352 128 352L288 352L288 512C288 529.7 302.3 544 320 544C337.7 544 352 529.7 352 512L352 352L512 352C529.7 352 544 337.7 544 320C544 302.3 529.7 288 512 288L352 288L352 128z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
    }

    .accordion-header.active::before {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 640 640'%3E%3C!--!Font Awesome Free v7.1.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--%3E%3Cpath d='M96 320C96 302.3 110.3 288 128 288L512 288C529.7 288 544 302.3 544 320C544 337.7 529.7 352 512 352L128 352C110.3 352 96 337.7 96 320z'/%3E%3C/svg%3E");
    }

    .accordion-header:hover {
        background-color: rgba(196,199,201,1);
    }
    
    .accordion-header.active {
        background-color: rgba(79,101,109,1);
        color: white;
    }
    
    .accordion-header i {
        transition: transform 0.3s ease;
    }
    
    .accordion-header.active i {
        transform: rotate(180deg);
    }
    
    .accordion-content {
        max-height: 0;
        overflow: hidden;
        padding: 0 20px;
        background-color: white;
        transition: max-height 0.3s ease, padding 0.3s ease;
    }
    
    .accordion-content.active {
        max-height: 500px;
        padding: 20px;
    }
    
    .accordion-content p ,.accordion-content ul li {
        color: rgba(0, 0, 0, 1);
        line-height: 1.8;
        letter-spacing: 0em;
        font-family: 'Acumin Pro Light';
        font-size: 16px;
    }
    @media (max-width: 768px) {
        .main-container {
            padding: 20px;
        }
        .accordion-header {
            padding: 15px 18px;
        }
        
    }
    
    @media (max-width: 480px) {
    }
</style>

<div class="main-container">  
    <h2 class="fqa_sct_ttl">Frequently Asked Questions</h2> 
    <div class="accordion-container">
        <!-- Left Column -->
        <div class="accordion">
            <!-- Accordion Item 1 -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Who is JL Signature Designs?</span>
                </div>
                <div class="accordion-content">
                    <p><a href="https://jlsignaturedesigns.com/about" style="color: #2e97c2;">JL Signature Designs</a> is a full-service interior design studio that partners with homeowners to create beautiful, functional spaces. We specialize in New Build, Renovations, and Furnishings &amp; Styling, offering concierge-level service from initial concepts and renderings to contractor coordination and white-glove installation.</p>
                </div>
            </div>
            
            <!-- Accordion Item 2 -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>What design services do you offer?</span>
                </div>
                <div class="accordion-content">
                    <p> We provide a full scope of <a href="https://jlsignaturedesigns.com/design-services" style="color: #2e97c2;">design services:</a></p>
                    <ul>
                        <li>New Build</li>
                        <li>Renovations</li>
                        <li>Furnishings &amp; Styling</li>
                    </ul>
                </div>
            </div>
            
            <!-- Accordion Item 3 -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>How do I get started / request a consultation?</span>
                </div>
                <div class="accordion-content">
                    <p> Click the <a href="https://jlsignaturedesigns.com/inquire" style="color: #2e97c2;"> Inquire </a> button on our site or access the Client Portal if you’re already a client.</p>
                </div>
            </div>

             <!-- Accordion Item 4 -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>What does <a href="https://jlsignaturedesigns.com/design-services" style="color: #2e97c2;">New Build </a> include?</span>
                </div>
                <div class="accordion-content">
                    <p>Our New Build service includes working alongside your architect or builder, creating renderings, selecting materials &amp; finishes, and providing design oversight from start to finish.</p>
                </div>
            </div>
            
            <!-- Accordion Item 5 -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>What does <a href="https://jlsignaturedesigns.com/design-services" style="color: #2e97c2;">Renovations</a> include?</span>
                </div>
                <div class="accordion-content">
                    <p>The Renovations service transforms existing spaces with renderings, materials selection, interior finishes, and design management in collaboration with your contractor.</p>
                </div>
            </div>
        </div>
        
        <!-- Right Column -->
        <div class="accordion">
            
            <!-- Accordion Item 6 -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>What does <a href="https://jlsignaturedesigns.com/design-services" style="color: #2e97c2;">Furnishings &amp; Styling</a> include?</span>
                </div>
                <div class="accordion-content">
                    <p>Our Furnishings &amp; Styling service covers space planning, custom layouts, furniture selections, renderings, and white-glove delivery &amp; installation.</p>
                </div>
            </div>

            <!-- Accordion Item 7 -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Do you coordinate with architects and contractors?</span>
                </div>
                <div class="accordion-content">
                    <p> Yes — we liaise directly with your architect, builder, and contractor as part of the New Build and Renovations services.</p>
                </div>
            </div>

            <!-- Accordion Item 8 -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Do you provide renderings and help select materials?</span>
                </div>
                <div class="accordion-content">
                    <p>Yes — renderings and materials selection are core deliverables in our design services.</p>
                </div>
            </div>

            <!-- Accordion Item 9 -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Do you offer <a href="https://jlsignaturedesigns.com/window-treatments" style="color: #2e97c2;">window-treatment</a> or specialty services??</span>
                </div>
                <div class="accordion-content">
                    <p> Yes — we also offer custom window treatments that can be integrated into your design project</p>
                </div>
            </div>

            <!-- Accordion Item 10 -->
            <div class="accordion-item">
                <div class="accordion-header">
                    <span>Where can I see your <a href="https://jlsignaturedesigns.com/portfolio#/" style="color: #2e97c2;">portfolio</a>?</span>
                </div>
                <div class="accordion-content">
                    <p> You can explore our Portfolio to view past projects, including new builds, renovations, and furnishings. It’s a great way to see the design quality, style, and attention to detail we bring to every project.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
jQuery(document).ready(function($) {

    const headers = $('.accordion-header');

    headers.on('click', function () {

        let header = $(this);
        let content = header.next('.accordion-content');
        let isActive = header.hasClass('active');

        // Close all
        headers.removeClass('active');
        $('.accordion-content').removeClass('active');

        // Toggle clicked one
        if (!isActive) {
            header.addClass('active');
            content.addClass('active');
        }
    });

});

</script>