# IT Student Portfolio (PHP Version)

A modern, responsive portfolio website built with HTML, CSS, JavaScript, and PHP. Features dark/light mode, smooth animations, and a working contact form.

## Features

- ✨ Modern and clean design
- 🌓 Dark/Light mode toggle
- 📱 Fully responsive (mobile, tablet, desktop)
- 🎨 Smooth animations and transitions
- 📧 Working contact form with PHP backend
- 🚀 Fast and lightweight
- 🎯 SEO friendly
- 💼 Professional layout for IT students

## Requirements

- PHP 7.4 or higher
- Web server (Apache, Nginx, or PHP built-in server)
- Mail server configured (for contact form)

## Installation

### Local Development

1. **Install PHP** (if not already installed)
   - Download from [php.net](https://www.php.net/downloads)
   - Or use XAMPP/WAMP/MAMP

2. **Navigate to project folder:**
   ```bash
   cd path/to/Sijey-Portfolio
   ```

3. **Start PHP development server:**
   ```bash
   php -S localhost:8000
   ```

4. **Open in browser:**
   ```
   http://localhost:8000
   ```

### Using XAMPP/WAMP

1. Copy the `Sijey-Portfolio` folder to `htdocs` (XAMPP) or `www` (WAMP)
2. Start Apache server
3. Visit: `http://localhost/Sijey-Portfolio`

## Deployment Options

### 1. InfinityFree (Free PHP Hosting)
- Go to [infinityfree.net](https://infinityfree.net)
- Sign up for free
- Upload files via FTP or File Manager
- Free subdomain included

### 2. 000webhost (Free PHP Hosting)
- Go to [000webhost.com](https://www.000webhost.com)
- Create free account
- Upload files
- Free hosting with PHP support

### 3. Heroku (Free with PHP buildpack)
- Create `composer.json` file
- Deploy via Git
- Free tier available

### 4. Traditional PHP Hosting
- Any shared hosting with PHP support
- Upload via FTP
- Configure email settings

## Contact Form Configuration

Edit `contact-handler.php` and change this line:
```php
$to = "your.email@example.com"; // Change to your email
```

### Email Configuration

The contact form uses PHP's `mail()` function. For it to work:

1. **On shared hosting:** Usually works out of the box
2. **On localhost:** You need to configure SMTP in `php.ini`
3. **Alternative:** Use PHPMailer or SendGrid for better reliability

## File Structure

```
Sijey-Portfolio/
├── index.php              # Main portfolio page
├── contact-handler.php    # Contact form backend
├── styles.css            # All styles
├── script.js             # JavaScript functionality
├── .htaccess            # Apache configuration
├── assets/              # Images and files
│   └── profile.jpg      # Your profile picture
└── README-PHP.md        # This file
```

## Customization

### Update Personal Information

1. **index.php**:
   - Replace "Your Name" with your actual name
   - Update social media links
   - Modify project descriptions
   - Update experience and education

2. **contact-handler.php**:
   - Change the recipient email address

3. **styles.css**:
   - Modify colors in CSS variables
   - Adjust spacing and fonts

## Testing Contact Form Locally

If testing on localhost, the email might not send. To test:

1. Use a service like [Mailtrap](https://mailtrap.io) for testing
2. Or modify `contact-handler.php` to save to a file instead
3. Or use XAMPP with Mercury Mail

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## License

Feel free to use this template for your own portfolio!

## Support

For issues or questions, contact: mabbayad.christianjay.gazzingan@gmail.com

---

**Built with ❤️ using HTML, CSS, JavaScript & PHP**
