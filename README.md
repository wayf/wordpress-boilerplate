# WordPress Boilerplate

A clean and modern starter template for WordPress development using the official **wp-env** tool.

## About the Project

This is a ready-to-use boilerplate for fast and comfortable WordPress theme, plugin, or full website development. It is powered by `wp-env`, which runs a complete isolated WordPress environment with Docker (WordPress + MySQL + WP-CLI).

### Key Features

- One-command development environment with wp-env
- Modern frontend tooling with **Vite**
- Fully isolated Docker setup (WordPress + MySQL + WP-CLI)
- Easy database export/import
- Persistent `wp-content` folder
- Prettier code formatting with PHP support

## Requirements

- [Node.js](https://nodejs.org/) (LTS version recommended)
- [Docker Desktop](https://www.docker.com/products/docker-desktop/)
- npm or yarn

## Quick Start

```bash
# 1. Clone the repository
git clone https://github.com/wayf/wordpress-boilerplate.git
cd wordpress-boilerplate

# 2. Install dependencies
npm install

# 3. Start the environment
npm run start
```

Site will be available at:  
**http://localhost**

**Admin Dashboard:**  
**http://localhost/wp-admin**

**Default credentials:**  
**Login:** `admin`  
**Password:** `password`

## Available Commands

```bash
npm run start      # Start the environment
npm run stop       # Stop the environment
npm run restart    # Restart the environment
npm run status     # Show running Docker containers
npm run logs       # Show container logs

npm run cleanup    # Clean environment (keeps volumes)
npm run destroy    # Completely destroy the environment

npm run console    # Open bash in WordPress container
npm run cli        # Open bash in CLI container (WP-CLI)

npm run db:export  # Export database to ./wordpress/database/dump.sql
npm run db:import  # Import database from ./wordpress/database/dump.sql

# Vite
npm run build      # Build assets for production
npm run watch      # Watch mode (recommended for development)
```

## Database Management

The project includes convenient commands for working with the database.

### Commands

```bash
npm run db:export   # Export current database to ./database/dump.sql
npm run db:import   # Import ./database/dump.sql into the database
```

### Why keep the database dump in Git?

- **Consistent starting point** — every developer gets the same database state after `npm run start`
- **Version control** of your site configuration (settings, pages, posts, plugins activation, etc.)
- **Easy onboarding** — new team members can start working instantly
- **Reproducible environment** — you can always restore a known good state
- **Safe sharing** of test data and configurations

## Frontend Development (Vite)

This boilerplate comes with **Vite** pre-configured for fast frontend development.

- Use `npm run watch` during active development
- Use `npm run build` to create optimized production assets

## Code Formatting

This project includes **Prettier** with support for PHP.

### Features

- Automatic formatting on save
- Consistent code style for JavaScript, CSS, JSON, Markdown and **PHP**
- Uses `@prettier/plugin-php`

### How to enable in VS Code

Install these extension:

- [Prettier - Code formatter](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)

## Useful Tips

- All files inside `wp-content` are persisted.
- Customize WordPress version, PHP version, or ports in `.wp-env.json`.
- Run `npm run db:export` after first setup to create a clean database backup.

## Stop the Project

```bash
npm run stop
```

## Complete Reset

```bash
npm run destroy
```

## License

This project is open-sourced under the [MIT License](LICENSE.md).

---

**Ready to build something great?**  
Run `npm run start` and start coding! 🚀

Made with ❤️ by [wayf](https://github.com/wayf)
