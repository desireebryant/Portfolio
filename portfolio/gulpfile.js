const gulp = require('gulp');
const concat = require('gulp-concat');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer')
const cleanCSS = require('gulp-clean-css');

const sassFiles = "_sass/**/*.scss"
const cssFiles = "_css/**/*.css"

gulp.task('sass', () => {
  gulp.src(sassFiles)
      .pipe(sass({ style: 'expanded' }))
      .pipe(gulp.dest('_css'))
});

gulp.task('autoprefixer', () => {
  return gulp.src(cssFiles)
             .pipe(autoprefixer({
                 browsers: ['last 2 versions'],
                cascade: false
             }))
             .pipe(gulp.dest('_css'))
});

gulp.task('minify-css', () => {
  return gulp.src(cssFiles)
             .pipe(gulp.dest('_site/assets'));
});

//gulp.task('watch', () => {
//  gulp.watch(cssFiles, ['css']);
//});

gulp.task('default', ['sass', 'minify-css']);
