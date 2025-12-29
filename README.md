# Docnest - Multidisciplinary Consultancy Firm

## Overview

Docnest is a professional consultancy firm website built with PHP, HTML, CSS, and JavaScript. The platform offers comprehensive consulting services across multiple industries including Human Resources, Information Technology, Construction, and Tourism.

## Features

### 🏢 Core Pages
- **Home Page** (`home.php`) - Landing page with service highlights, team showcase, and contact form
- **About Page** (`about.php`) - Company information, vision & mission, team profiles, and client reviews
- **Services Page** (`services.php`) - Overview of all 12 consulting services
- **Projects Page** (`project.php`) - Showcase of completed projects
- **Blogs Page** (`blogs.php`) - Industry insights and expert articles
- **Contact Page** (`contact.php`) - Contact information and inquiry form

### 📋 12 Professional Services

Each service has its own dedicated page with detailed descriptions, features, and benefits:

1. **Smart Payroll Management** - Automated salary processing and compliance management
2. **Recruitment & Onboarding** - Talent acquisition and employee integration
3. **CIDA Fast Track** - Accelerated certification programs
4. **Building Projects** - Construction project management
5. **HR Management** - Comprehensive human resource solutions
6. **Information Technology** - Custom software and digital transformation
7. **Tourism Consulting** - Destination marketing and tourism development
8. **Legal Advisory** - Contract and regulatory guidance
9. **Marketing Strategy** - Brand development and campaign management
10. **Financial Planning** - Investment and wealth management
11. **Employee Training** - Professional development programs
12. **Compliance & Audit** - Internal controls and regulatory audits

### 🎨 Design Features
- Responsive design for desktop, tablet, and mobile devices
- Interactive sliders using Swiper.js
- Smooth hover effects and transitions
- Professional color scheme with consistent branding
- Font Awesome icons for visual enhancement

### 🔗 Navigation & Linking
- Clickable service boxes on home page link to individual service pages
- Team member "More" buttons navigate to the team section on about page
- Comprehensive dropdown menu for all services
- Internal navigation maintained across all pages

## Project Structure

```
docnest/
├── home.php                 # Main landing page
├── about.php               # About company & team
├── services.php            # Services overview
├── project.php             # Project portfolio
├── blogs.php               # Blog articles
├── contact.php             # Contact & inquiry form
├── script.js               # JavaScript functionality
├── submit_touch.php        # Form submission handler
│
├── services/               # Individual service pages
│   ├── payroll.php
│   ├── recruitment.php
│   ├── cida.php
│   ├── building.php
│   ├── hr.php
│   ├── it.php
│   ├── tourism.php
│   ├── legal.php
│   ├── marketing.php
│   ├── finance.php
│   ├── training.php
│   └── audit.php
│
├── css/
│   └── style.css          # Main stylesheet
│
├── images/                # Image assets
│   ├── docnest.png
│   ├── money.PNG
│   ├── work.PNG
│   ├── blocks.PNG
│   ├── build.PNG
│   ├── user.PNG
│   ├── computer.PNG
│   ├── blog.jpg
│   ├── contact.jpg
│   └── [other images]
│
└── js/
    └── script.js          # Additional scripts
```

## Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP
- **Database**: MySQL (for form submissions)
- **Libraries**: 
  - Swiper.js (image sliders and reviews carousel)
  - Font Awesome 5.15.4 (icons)
  - Google Fonts (Poppins typeface)

## Installation & Setup

### Prerequisites
- XAMPP or similar PHP/MySQL server
- Modern web browser

### Steps

1. **Clone/Extract Project**
   ```
   Extract the docnest folder to your XAMPP htdocs directory
   ```

2. **Start XAMPP Services**
   ```
   Start Apache and MySQL from XAMPP Control Panel
   ```

3. **Access the Website**
   ```
   Open browser and navigate to: http://localhost/docnest/home.php
   ```

4. **Database Setup (Optional - for contact forms)**
   ```
   Create a MySQL database named 'docnest'
   Import table structure if provided
   Update database credentials in submission scripts
   ```

## Key Features Explained

### Service Pages
Each service page (`services/*.php`) includes:
- Service title and background image
- Detailed description
- Key features with checkmarks
- Benefits list
- Call-to-action button linking to contact form

### Home Page Interactions
- **Service Boxes**: Click any service box to go to its dedicated page
- **Team Cards**: Click "More" button to jump to team section on about page
- **Testimonials Slider**: Navigate reviews using prev/next buttons or pagination
- **Contact Form**: Submit contact information for inquiries

### Responsive Design
- **Desktop**: Full layout with all features visible
- **Tablet (≤768px)**: Stacked layouts, optimized spacing
- **Mobile**: Single column layout, touch-friendly buttons

## Styling & Branding

### Color Scheme
- **Primary Color**: `#00b7eb` (Cyan/Light Blue)
- **Black**: `#000000`
- **White**: `#ffffff`
- **Light Gray**: `#eeeeee`

### Typography
- **Font Family**: Poppins (from Google Fonts)
- **Base Font Size**: 62.5% of viewport (10px)
- **Responsive**: Adjusts for different screen sizes

## Contact Information

**Address**: 123 Business Park, Colombo 04, Sri Lanka

**Phone**: 
- +94 (0) 11 223 4567
- +94 (0) 76 123 4567

**Email**: 
- info@docnest.lk
- support@docnest.lk

**Social Media**:
- Facebook
- Twitter
- Instagram
- LinkedIn

## Form Handling

### Contact Form Fields
- Name
- Email
- Subject
- Message

### "Touch With Us" Form (Home Page)
- Name
- Email
- Contact Number

Forms submit to the database for record keeping and can be configured to send email notifications.

## Browser Compatibility

- Chrome (Latest)
- Firefox (Latest)
- Safari (Latest)
- Edge (Latest)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Performance Optimization

- Optimized image sizes
- CSS minification ready
- JavaScript loaded at end of body
- Smooth scrolling and animations
- Lazy loading compatible structure

## Future Enhancements

- Email notification system for form submissions
- Blog article detail pages
- Project case studies
- Team member detail pages
- Client testimonial management system
- Service comparison tool
- Online appointment booking

## License

This project is proprietary to Docnest. All rights reserved.

## Support & Maintenance

For issues, updates, or feature requests, contact the development team.

---

**Last Updated**: December 29, 2025  
**Version**: 1.0
