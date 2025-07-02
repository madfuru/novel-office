# Custom WordPress Theme – Round 2 Assignment

## 📦 Installation Instructions

1. Upload the `custom-theme` folder to the `wp-content/themes/` directory.
2. Log in to your WordPress admin panel.
3. Go to **Appearance → Themes** and activate the **Custom Theme**.

---

## 🧩 Custom Post Types Used

### 🎤 Testimonials
- A custom post type called **`testimonial`** was created to manage client testimonials.
- Integrated in `functions.php` using `register_post_type()`.
- Displayed on the homepage using `WP_Query` inside `front-page.php`.

---

## 🚀 Performance Optimizations Implemented

1. **Lazy Loading:**
   - Images use the `loading="lazy"` attribute.
   - Backgrounds are optimized with `background-size: cover;` to minimize load cost.

2. **Image Compression:**
   - Banner images optimized before upload using TinyPNG.

3. **CSS/JS Enqueueing:**
   - Scripts and styles are properly enqueued via `functions.php` (no inline or direct HTML linking).

4. **Responsive Layout:**
   - Fully mobile-first, using `flexbox` and `media queries`.

5. **No Page Builders:**
   - Built entirely using WordPress template files and Block Editor compatibility.

---

## 👨‍💻 Developer Notes

- Theme developed from scratch.
- Clean code, semantic HTML, and proper WordPress template structure.
