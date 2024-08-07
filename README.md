# SitePackageOne Distribution

SitePackageOne is a TYPO3 extension designed to provide a comprehensive one-page
website template. It includes pre-configured templates, TypoScript setup, and
custom content elements tailored for a modern, responsive one-page site.

## Requirements

- TYPO3 v13
- PHP 8.2 or higher

## Installation

### 1. Clone the Repository

```sh
git clone git@github.com:hojalatheef/sitepackageone-distribution.git
```

### 2. Install Dependencies

If the extension has any PHP dependencies, install them using Composer:

```sh
cd sitepackageone
composer install
```

### 3. Activate the Extension

Log in to the TYPO3 backend and activate the `sitepackageone` extension:

- Go to "Admin Tools" > "Extensions".
- Find `sitepackageone` in the list and activate it.

### 4. Include TypoScript Template

1. **Go to Template Module**:
    - Navigate to "WEB" > "Template".

2. **Select Root Page**:
    - Select your root page.

3. **Edit Template Record**:
    - Click on "Info/Modify" and then "Edit the whole template record".

4. **Include Static TypoScript**:
    - In the "Includes" tab, add `sitepackageone` to the "Include static (from
      extensions)" field.

### 5. Set Up Root Page

Ensure you have a root page created in the "WEB" > "Page" module.

- Set the root page as the site root by right-clicking on the page and
  selecting "Edit".
- In the "Behavior" tab, check the "Use as Root Page" option.

### 6. Customize Your One-Page Template

#### Create Content Elements

- Go to "WEB" > "Page".
- Create and configure content elements on your root page using the provided
  templates.

#### Edit HTML Templates

- The HTML templates are located
  in `EXT:sitepackageone/Resources/Private/Templates`.
- Customize these templates to fit your design needs.

### 7. Add Custom Styles and Scripts

#### CSS and JS Files

- Add your custom CSS files
  to `EXT:sitepackageone/Resources/Public/CSS`.
- Add your custom JavaScript files
  to `EXT:sitepackageone/Resources/Public/JavaScript`.

#### Include Custom Styles and Scripts in TypoScript

Open the TypoScript setup file located
at `EXT:sitepackageone/Configuration/TypoScript/setup.typoscript` and
include your custom styles and scripts as needed:

```typoscript
page.includeCSS {
    file1 = EXT:sitepackageone/Resources/Public/CSS/styles.css
}

page.includeJSFooter {
    file1 = EXT:sitepackageone/Resources/Public/JavaScript/scripts.js
}
```

## Development

### Local Development with DDEV

1. **Start DDEV Environment**:
   Ensure you have [DDEV](https://ddev.readthedocs.io/en/stable/) installed on
   your system.

   ```sh
   ddev start
   ```

2. **Access TYPO3 Backend**:
   Navigate
   to [http://sitepackageone.ddev.site/typo3](http://sitepackageone.ddev.site/typo3)
   and log in with your admin credentials.

## Contributing

We welcome contributions to improve SitePackageOne. Please submit issues and
pull requests on
the [GitHub repository](https://github.com/hojalatheef/sitepackageone-distribution.git).

## License

SitePackageOne is released under the MIT License. See the [LICENSE](LICENSE)
file for more details.

---

With SitePackageOne, you can quickly set up a beautiful one-page website using
TYPO3. Enjoy!

```

### Key Points:

- The `README.md` covers the installation requirements and steps for setting up the `sitepackageone` extension within a TYPO3 project.
- It includes detailed instructions for cloning the repository, installing dependencies, and activating the extension.
- It provides guidance on including TypoScript, setting up the root page, and customizing templates.
- It includes instructions for local development with DDEV, as well as sections for contributing and licensing.

Adjust the repository URL and other specific details to match your project's setup.
