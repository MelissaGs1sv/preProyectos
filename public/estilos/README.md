# GS1 Web Refresh

This project compiles CSS which is meant to serve as a foundation for a GS1 brand standards-compliant website. It contains type, spacing, and color styles.

---

## Development

`gulp watch`

## Building for Production

`gulp prod`

---

## Typical Usage

Take the ready-to-use css file `/css/style.css` for use as the basis of your site's theme.

## Advanced Usage

Want deeper integration into your workflow? All the Node.js and Gulp task runner support files are included which will let you compile the SCSS code yourself.

This is a **Node.js** project using the **Gulp** task runner to compile the SCSS down to CSS using **Dart Sass** and **AutoPrefixer**.

Note: the SCSS was written using Sass' relatively new module system. According to Sass, the legacy `@import` feature will be deprecated by 2021 and fully removed in 2022.

The "watch" task outputs expanded CSS with sourcemaps and start a **Browsersync** instance that will auto-inject style changes.

The "prod" task outputs production-ready compressed CSS without sourcemaps.

Example usage run from the project root:

```
# Assuming that the gulp-cli package isn't already installed
npm install -g gulp-cli

npm install
# ...

# Start the task watcher for development
gulp watch

# Build for production
gulp prod
```

---

## What comes in the package?

### Main style file

| File Name      | Description                                                                                                                                                                                                                                                  |
| -------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| /css/style.css | Located in the /css/ directory this is the main file. It is a ready-to-use CSS file which can be used as a starting point for a brand-compliant website. If all you're looking for is a file to grab so you can start on your site's theme, this is the one. |

### Source files

| File Name                     | Description                                                                                       |
| ----------------------------- | ------------------------------------------------------------------------------------------------- |
| /scss/style.scss              | This is the main SCSS file which combines the output from the modules.                            |
| /scss/\_variables.scss        | Contains most of the variable declarations including the RFS settings, type metrics, and spacing. |
| ../node_modules/rfs/scss      | Responsive Font Sizing (RFS) library. (https://github.com/twbs/rfs)                               |
| /scss/\_normalize-custom.scss | Normalize.css stylesheet customized for this project. (https://necolas.github.io/normalize.css/)  |
| /scss/\_colors.scss           | Color SCSS variables are declared here. Custom properties and override classes are rendered here. |
| /scss/\_type.scss             | Type and type spacing styles.                                                                     |
| /scss/\_utilities.scss        | Spacer custom properties and override classes.                                                    |

### Project files

| Name                            | Description                                 |
| ------------------------------- | ------------------------------------------- |
| .browserslistrc                 | Target browser config used by Autoprefixer. |
| .prettierrc                     | Prettier formatter config.                  |
| gulpfile.js                     | Gulp.js task-runner config.                 |
| index.html                      | Demo HTML.                                  |
| package.json, package-lock.json | NPM manifest files.                         |
| readme.md                       | Markdown readme file.                       |

---

## Responsive Font Sizing and you

Many of the type styles dynamically change size based on the users' viewport and root font size. This is to keep the type accessible and easy to read regardless of viewport size.

The foundation of this is setting the root `font-size` to `100%` on `HTML`. This style exists as an example of how the root font size should be set. **Setting fixed font sizes (e.g. using `px`) is _strongly discouraged_ as it can override users' font size preferences and becomes an accessibility issue.**

The project uses Bootstrap's RFS library ([https://github.com/twbs/rfs](https://github.com/twbs/rfs)). This will dynamically resize type larger than `0.9rem` using a scaling factor of `7`.
