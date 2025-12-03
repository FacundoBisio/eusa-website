# EUSA Venture Studio – Landing Website

**Live Website:** [https://eusa-partners.com/](https://eusa-partners.com/)

This repository contains the source code for the official landing page of **EUSA Venture Studio**. It is a high-performance, responsive single-page website designed to connect Founders and Investors with the venture studio ecosystem.

The project is built with **HTML5**, **Bootstrap 5**, and **Vanilla JavaScript**, featuring a custom PHP backend for handling distinct application flows (Founders vs. Investors) via AJAX without page reloads.

---

## ✨ Key Features

* **⚡ Fully Responsive Design:** Mobile-first approach using Bootstrap 5 grid and custom media queries to ensure compatibility across all devices.
* **🔄 Dynamic Form System:**
    * **Dual-Track Application:** Dedicated, tab-based flows for Founders and Investors to streamline the application process.
    * **AJAX Submission:** Forms are submitted asynchronously using JavaScript `fetch` API, providing instant user feedback (Success/Error alerts) without refreshing the page.
    * **Smart Navigation:** "Apply" buttons throughout the site automatically open the correct tab (Founder or Investor) and scroll smoothly to the respective form section.
* **🎨 Modern UI/UX:**
    * **Parallax Backgrounds:** Fixed backgrounds with overlay effects for a premium visual feel.
    * **Material Design Tabs:** Custom-styled tabs and cards with glassmorphism influences.
    * **Smooth Animations:** Elements fade in and slide up on scroll, powered by the Intersection Observer API.
    * **Infinite Ticker:** A smooth, continuous animation showcasing key value propositions.
* **📧 PHP Mailer Backend:** Lightweight, secure PHP scripts to handle email delivery specifically for each stakeholder type.

---

## 🚀 Tech Stack

* **Frontend:** HTML5, CSS3, JavaScript (ES6+).
* **Framework:** Bootstrap 5.3 (CDN).
* **Icons:** Bootstrap Icons.
* **Backend:** PHP (Native `mail()` function for form processing).
* **Deployment:** Shared Hosting environment (Apache/Nginx with PHP support).

---

## 📁 Project Structure

```text
/
├── index.html                # Main application file (Single Page)
├── send-mail.php             # Backend logic for FOUNDER applications
├── send-mail-investor.php    # Backend logic for INVESTOR applications
├── LICENSE                   # MIT License
├── README.md                 # Project documentation
└── assets/
    ├── css/
    │   └── styles.css        # Custom overrides, animations, and responsive rules
    └── img/                  # Optimized assets (WebP/PNG/JPG)