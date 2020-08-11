var gulp        = require('gulp'),
    sass        = require('gulp-sass');


/**
 * @task sass
 * Compile files from scss
 */
gulp.task('sass', function () {
  return gulp.src('scss/style.scss')
  .pipe(sass())
  .pipe(gulp.dest('css'))
});


/**
 * @task watch
 * Watch scss files for changes & recompile
 * Clear cache when Drupal related files are changed
 */
gulp.task('watch', function () {
  gulp.watch('scss/style.scss', gulp.series('sass'));
});

/**
 * Default task, running just `gulp` will 
 * compile Sass files, launch BrowserSync, watch files.
 */
gulp.task('default', gulp.series('watch'));