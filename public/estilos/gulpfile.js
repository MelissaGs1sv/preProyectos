// Settings

const scssInput = ["scss/style.scss"],
  scssOutput = "css";

// Libaries

const { src, dest, series, watch } = require("gulp");
const sass = require("gulp-dart-sass");
const autoprefixer = require("gulp-autoprefixer");
const sourcemaps = require("gulp-sourcemaps");
const browserSync = require("browser-sync");

// Tasks

let compileSCSS = () => {
  return src(scssInput)
    .pipe(sourcemaps.init())
    .pipe(
      sass({
        outputStyle: `expanded`,
        precision: 10,
      }).on(`error`, sass.logError)
    )
    .pipe(autoprefixer())
    .pipe(sourcemaps.write())
    .pipe(dest(scssOutput))
    .pipe(browserSync.stream());
};

let compileSCSSProd = () => {
  return src(scssInput)
    .pipe(
      sass({
        outputStyle: `compressed`,
        precision: 10,
      }).on(`error`, sass.logError)
    )
    .pipe(autoprefixer())
    .pipe(dest(scssOutput));
};

let serve = () => {
  browserSync({
    notify: true,
    reloadDelay: 50,
    server: {},
    open: false,
  });

  watch(`scss/**/*.scss`, series(compileSCSS));
  watch(`*.html`).on(`change`, browserSync.reload);
};

exports.watch = series(compileSCSS, serve);
exports.prod = series(compileSCSSProd);
