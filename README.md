# IT Student Portfolio

A modern, responsive portfolio website built with HTML, CSS, and JavaScript. Features dark/light mode, smooth animations, and a clean design perfect for IT professionals.

## Features

- ✨ Modern and clean design
- 🌓 Dark/Light mode toggle
- 📱 Fully responsive (mobile, tablet, desktop)
- 🎨 Smooth animations and transitions
- 📧 Contact form
- 🚀 Fast and lightweight
- 🎯 SEO friendly
- 💼 Professional layout for IT students

## Sections

1. **Home/Hero** - Introduction with profile image and social links
2. **About** - Personal information and key strengths
3. **Skills** - Technical skills organized by category
4. **Projects** - Showcase of featured projects with images
5. **Experience** - Work experience timeline
6. **Education** - Academic background and certifications
7. **Contact** - Contact form and information

## Technologies Used

- HTML5
- CSS3 (with CSS Variables for theming)
- Vanilla JavaScript
- Font Awesome Icons

## Deployment on Vercel

### Option 1: Deploy via Vercel CLI

1. Install Vercel CLI:
   ```bash
   npm install -g vercel
   ```

2. Navigate to your project directory:
   ```bash
   cd your-portfolio-folder
   ```

3. Deploy:
   ```bash
   vercel
   ```

4. Follow the prompts and your site will be live!

### Option 2: Deploy via Vercel Dashboard

1. Go to [vercel.com](https://vercel.com)
2. Sign up or log in
3. Click "Add New Project"
4. Import your Git repository (GitHub, GitLab, or Bitbucket)
5. Vercel will automatically detect the settings
6. Click "Deploy"

### Option 3: Deploy via GitHub

1. Push your code to a GitHub repository
2. Go to [vercel.com](https://vercel.com) and sign in with GitHub
3. Click "Import Project"
4. Select your repository
5. Click "Deploy"

## Customization

### Update Personal Information

1. **index.html**:
   - Replace "Your Name" with your actual name
   - Update social media links (GitHub, LinkedIn, Twitter, Email)
   - Modify project descriptions and links
   - Update experience and education details
   - Change contact information

2. **styles.css**:
   - Modify color scheme by changing CSS variables in `:root`
   - Adjust spacing, fonts, or animations as needed

3. **script.js**:
   - Customize form handling
   - Add or remove interactive features

### Add Your Resume

Create a folder named `assets` and add your resume PDF:
```
assets/
  └── resume.pdf
```

### Add Project Images

Replace the Unsplash placeholder images with your own project screenshots:
```html
<img src="path/to/your/image.jpg" alt="Project Name">
```

## Color Scheme

The portfolio uses a blue and purple gradient theme:
- Primary: `#3b82f6` (Blue)
- Secondary: `#8b5cf6` (Purple)

You can customize these in the CSS variables section of `styles.css`.

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Performance

- Lightweight (no heavy frameworks)
- Fast loading times
- Optimized images
- Minimal dependencies

## License

Feel free to use this template for your own portfolio. No attribution required.

## Contact

For questions or suggestions, feel free to reach out!

---

**Built with ❤️ using HTML, CSS & JavaScript**
