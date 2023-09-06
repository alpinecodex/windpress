# Windpress Tailwind and WordPress Starter Theme

Welcome to Windpress, a lightweight, modern, and performance-centric WordPress theme. It has been crafted using the utility-first CSS framework, TailwindCSS, and draws inspiration from [CoyWolf's Starter Theme](https://coywolf.pro/webdev/wordpress-starter-theme/). This theme is perfect for those who want a sleek and modern design, combined with the flexibility and power of WordPress.

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
    - Find "Windpress" (or your chosen name) and activate it.

4. **Build the CSS**:
    With the theme activated, and while still inside the theme's directory, build the CSS to see the changes:

    ```bash
    npm run css
    ```

    > After this step, the theme should display with its intended TailwindCSS styling. Anytime you make changes to the theme's CSS, you'll need to run this command to rebuild and see those changes.

## 🤝 Contributors

A huge thanks to the creative minds behind Windpress:

- [Alpine Codex](https://alpinecodex.com)
- [Bridger Tower](https://bridger.cc)
- [Cameron Youngblood](https://cameronyoungblood.com)

## 📝 License

This project is open source and available under the [MIT License](LICENSE.md).
