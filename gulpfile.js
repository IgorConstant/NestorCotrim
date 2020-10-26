const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');


/** Função para Compilar Arquivos .scss **/
function compilarSass() {
    return gulp
        .src('styles/main.scss')
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(autoprefixer({
            Browserlist: ['last 2 versions'],
            cascade: false
        }))
        .pipe(gulp.dest('assets/css'))
        .pipe(browserSync.stream());
}

gulp.task('sass', compilarSass);



/** Função para Compilar Arquivos .js **/
function gulpJS() {
    return gulp.src([
            'scripts/jquery.min.js',
            'scripts/popper.min.js',
            'node_modules/bootstrap/dist/js/bootstrap.js',
            'scripts/owl-function.js',
            'scripts/owl.carousel.min.js',
            'scripts/menu-shrink.js',
            'scripts/smooth.js',
            'scripts/close-on-scroll.js',
            'scripts/anime.js'
        ])

        .pipe(concat('main.js'))
        .pipe(uglify('main.js'))
        .pipe(gulp.dest('assets/js'))
        .pipe(browserSync.stream());
}


gulp.task('mainjs', gulpJS);


/** Função para Espionar Alterações no Projeto **/
function watchproject() {
    gulp.watch('styles/*.scss', compilarSass);
    gulp.watch('scripts/*.js', gulpJS);
}

gulp.task('watch', watchproject);


/** Criação da Tarefa =) That's All Folks! **/
gulp.task('default', gulp.parallel('watch', 'sass', 'mainjs'))