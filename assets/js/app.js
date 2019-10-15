/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)

//Ancienne version
require('../css/app.scss');

//Nouvelle version
//import '../css/app.scss';

// loads the jquery package from node_modules
var $ = require('jquery');
require('bootstrap');

//new version
//import $ from 'jquery';
//import 'bootstrap';

// import the function from greet.js (the .js extension is optional)
// ./ (or ../) means to look for a local file
//var greet = require('./greet');

//old
//var commentaire = require('./comment.js');

//new version
//import comment from './comment.js';
//import {description, avis} from './comment.js';


// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// var $ = require('jquery');

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');

//$(document).ready(function() {
    //$('body').prepend('<h1>' + greet('john') + '</h1>'); 
   
    //$('body').prepend('<h2>' + commentaire('great') + '</h2>');
    
    //$('body').prepend('<h2>' + avis() + '</h2>');
    //$('body').prepend('<h2>' + description() + '</h2>');
//});

/*
$(document).ready(function() {
    $('[data-toggle="popover"]').popover();
});
*/
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });
});