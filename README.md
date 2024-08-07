# TYPO3 Extension `sitepackageone`
[![Packagist][packagist-logo-stable]][extension-packagist-url]
[![Latest Stable Version][extension-build-shield]][extension-ter-url]
[![Total Downloads][extension-downloads-badge]][extension-packagist-url]
[![Monthly Downloads][extension-monthly-downloads]][extension-packagist-url]
[![TYPO3 13.2][TYPO3-shield]][TYPO3-13-url]

![Build Status](https://github.com/hojalatheef/sitepackageone/actions/workflows/ci.yml/badge.svg)

SitePackageOne is a TYPO3 extension designed to provide a comprehensive one-page
website template. It includes pre-configured templates, TypoScript setup, and
custom content elements tailored for a modern, responsive one-page site.

## Requirements

- TYPO3 v13
- PHP 8.2 or higher

## Installation

```sh
composer req hojalatheef/sitepackageone
```

### 2. Include TypoScript Template

1. **Go to Template Module**:
    - Navigate to "WEB" > "Template".

2. **Select Root Page**:
    - Select your root page.

3. **Edit Template Record**:
    - Click on "Info/Modify" and then "Edit the whole template record".

4. **Include Static TypoScript**:
    - In the "Includes" tab, add `sitepackageone` to the "Include static (from
      extensions)" field.

### 3. Set Up Root Page

Ensure you have a root page created in the "WEB" > "Page" module.

- Set the root page as the site root by right-clicking on the page and
  selecting "Edit".
- In the "Behavior" tab, check the "Use as Root Page" option.

### 4. Customize Your One-Page Template

#### Create Content Elements

- Go to "WEB" > "Page".
- Create and configure content elements on your root page using the provided
  templates.

#### Edit HTML Templates

- The HTML templates are located
  in `EXT:sitepackageone/Resources/Private/Templates`.
- Customize these templates to fit your design needs.

### 5. Add Custom Styles and Scripts

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

## License

SitePackageOne is released under the MIT License. See the [LICENSE](LICENSE)
file for more details.

<!-- MARKDOWN LINKS & IMAGES -->

[extension-build-shield]: https://poser.pugx.org/hojalatheef/sitepackageone/v/stable.svg?style=for-the-badge

[extension-downloads-badge]: https://poser.pugx.org/hojalatheef/sitepackageone/d/total.svg?style=for-the-badge

[extension-monthly-downloads]: https://poser.pugx.org/hojalatheef/sitepackageone/d/monthly?style=for-the-badge

[extension-ter-url]: https://extensions.typo3.org/extension/sitepackageone/

[extension-packagist-url]: https://packagist.org/packages/hojalatheef/sitepackageone/

[packagist-logo-stable]: https://img.shields.io/badge/--grey.svg?style=for-the-badge&logo=packagist&logoColor=white

[TYPO3-13-url]: https://get.typo3.org/version/13

[TYPO3-shield]: https://img.shields.io/badge/TYPO3-13.2-green.svg?style=for-the-badge&logo=typo3
