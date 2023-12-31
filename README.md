# WindPress Tailwind and WordPress Starter Theme

Welcome to Windpress, a lightweight, modern, and performance-centric WordPress theme. It has been crafted using the utility-first CSS framework, TailwindCSS, and is built on [Coywolf's Starter Theme](https://coywolf.pro/webdev/wordpress-starter-theme/). This theme is perfect for those who want a sleek and modern design, combined with the flexibility and power of WordPress.

## 🚀 Getting Started

### Prerequisites:

- Ensure you have **Node.js** and **npm** (Node Package Manager) installed on your system.
- A working local WordPress development environment, such as [Local by Flywheel](https://localwp.com/) or [MAMP](https://www.mamp.info/).

### Installation & Setup:

1. **Clone the Repository**:
    Clone this theme repository to your local system. Navigate to your WordPress installation's `wp-content/themes/` directory and run:

    ```bash
    git clone https://github.com/alpinecodex/windpress.git windpress
    ```

    > Note: The directory name `windpress` can be changed to your preferred theme name.

2. **Install Dependencies**:
    Once you have cloned the repository, navigate to the theme directory (`windpress` or your chosen name). Inside, install all the required npm dependencies:

    ```bash
    cd windpress
    npm i
    ```

3. **Start WordPress & Activate Theme**:
    - Boot up your local WordPress development server.
    - Log in to your WordPress dashboard.
    - Navigate to **Appearance** > **Themes**.
    - Find "WindPress" (or your chosen name) and activate it.

4. **Build the CSS**:
    With the theme activated, and while still inside the theme's directory, build the CSS to see the changes:

    ```bash
    npm run css
    ```

    > After this step, the theme should display with its intended TailwindCSS styling. Anytime you make changes to the theme's CSS, you'll need to run this command to rebuild and see those changes.


## 📌 Recommended plugins

For a fast and secure site, it's advisable to keep the number of plugins to a minimum. Among the few plugins I employ, **Yoast SEO** and **WP Rocket** are two I would highly recommend.

### 🚀 Yoast SEO

Yoast SEO is renowned for features like:

- Fine-grained Title and Meta Description control
- Auto-insertion of Open Graph and Twitter Card metadata
- Management of redirects (Note: This requires the Premium version)

Furthermore, Yoast injects `Schema.org` structured data. However, I lean towards manually adding my structured data as Yoast doesn't cover every aspect I aim to include. If you resonate with my approach and wish to bypass Yoast's structured data, simply edit the `functions.php` file. Uncomment the code below to execute this:

```php
   function remove_yoast_json($data){
      $data = array();
      return $data;
    }
    add_filter('wpseo_json_ld_output', 'remove_yoast_json', 10, 1);
```

### 🚀 WP Rocket

**WP Rocket** stands out as the most efficient caching and performance plugin I've integrated with WordPress. Feel free to replicate the settings I deploy on my sites. Simply download and import my WP Rocket configuration file.

## 🤝 Contributors

A huge thanks to the creative minds behind Windpress:

- [Alpine Codex](https://alpinecodex.com)
- [Bridger Tower](https://bridger.cc)
- [Cameron Youngblood](https://cameronyoungblood.com)
- [Jon Henshaw](https://coywolf.com)

## 📝 License

This project is open source and available under the [MIT License](LICENSE.md).
