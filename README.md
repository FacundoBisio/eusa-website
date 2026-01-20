# EUSA Venture Studio

**EUSA Venture Studio** is an international venture studio helping founders raise capital, build traction, and launch into the US and EU markets. This project represents a complete web solution designed to connect European founders with US capital markets.

**Live Domain:** [eusa-partners.com](https://eusa-partners.com)

## 🚀 Project Overview

The platform serves as the digital headquarters for EUSA, facilitating two main operational flows:

1.  **Founder Applications**: A streamlined process for startups to apply for funding and co-building support.
2.  **Investor Networking**: A dedicated channel for VCs and Angels to access pre-vetted deal flow.

This project was developed for a **client based in Spain**, requiring close collaboration to translate complex business logic into a seamless digital experience that bridges European innovation with American capital.

## 🛠️ Technical Architecture

The project leverages a robust, performance-oriented stack to ensure speed, reliability, and ease of maintenance.

### Frontend

- **Core**: HTML5, Vanilla JavaScript.
- **Styling**: **TailwindCSS v4**, utilizing the new `@theme` and `@plugin` directives for a highly customized design system.
- **Advanced UI/UX**:
  - **Spotlight Effects**: Custom implementation using CSS variables (`--mouse-x`, `--mouse-y`) tracked via JS `mousemove` events to create high-end, dynamic lighting effects on cards and sections without heavy libraries.
  - **Glassmorphism**: Extensive use of `backdrop-blur` and semi-transparent backgrounds to create depth and a modern, premium aesthetic.
  - **Optimistic UI**: Form submissions provide immediate "Success" feedback (via Toast notifications) while processing asynchronously, handling potential network latency gracefully.

### Backend & Security

- **Language**: PHP.
- **API Endpoints**: Lightweight `send-founder.php` and `send-investor.php` scripts to handle data securely.
- **Security Measures**:
  - **Input Sanitization**: rigorous use of `strip_tags` and `filter_var` to prevent XSS and injection attacks.
  - **CORS**: Strict `Access-Control-Allow-Origin` headers to prevent unauthorized API usage.
  - **Error Handling**: Silent error logging protects server paths while maintaining a seamless user experience.

## 🔍 SEO & Domain Strategy

Strategies implemented to establish a strong organic presence for `eusa-partners.com`:

- **Semantic HTML**: Proper nesting of `<section>`, `<nav>`, and `<header>` for accessibility and crawler efficiency.
- **Rich Meta Tags**: Full Open Graph (OG) configuration ensures links look professional when shared on LinkedIn and Twitter.
- **Structured Data**: `JSON-LD` schemas for "Organization" to enhance search engine understanding.
- **Performance**: `fetchpriority="high"` on hero images and WebP formats to minimize Largest Contentful Paint (LCP).

## ⚡ Soft Skills & Professional Experience

### Proactivity & Problem Solving

- **Optimistic UI Validation**: Anticipating potential network latency, I implemented an "optimistic" feedback loop. This ensures users feel the app is instant, even if the server takes a moment to respond.
- **Visual Excellence**: The client requested a "premium feel." I proactively researched and implemented a custom spotlight effect typically found in high-end SaaS marketing sites (like Linear or Vercel), exceeding their visual expectations.

### Communication & Ownership

- **Client Management**: Successfully managed the project for a Spanish client, effectively handling all communication regarding requirements, design feedback, and deployment schedules to ensure improved time-to-market.
- **Full Lifecycle Ownership**: Took the project from empty repository to live production.
- **FTP & DNS Deployment**: Manually handled file uploads via FTP and configured DNS records (A Records, MX Records) to launch **eusa-partners.com** successfully.

---

## 📬 Contact

**Facundo Bisio**
_Full Stack Developer_

📧 Email: [facubisio433@gmail.com](mailto:facubisio433@gmail.com)
🔗 LinkedIn: [linkedin.com/in/facundobisio](https://www.linkedin.com/in/facundobisio)
