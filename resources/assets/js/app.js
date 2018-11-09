
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
	$(this).remove();
    });
}, 4000);

window.togglePasswordField = function () {
    var button = document.getElementById("button-showhide-addon");
    var input = document.getElementById("secretKey");
    
    if(input.type == 'password') {
	button.innerHTML = 'Hide';
	input.type = 'text';
    }else{
	button.innerHTML = 'Show';
	input.type = 'password';
    }
}


