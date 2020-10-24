import axios from 'axios';
import toastr from 'toastr'
window.axios = axios;
window.toastr = toastr

window.toast =  function (e) {
    e.preventDefault()
    window.toastr.success(e.target.getAttribute('data-toast'));
}
document.addEventListener('DOMContentLoaded', function () {
    // Get all "navbar-burger" elements
    const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
    
    // Check if there are any navbar burgers
    if ($navbarBurgers.length > 0) {
        
        // Add a click event on each of them
        $navbarBurgers.forEach(function ($el) {
            $el.addEventListener('click', function () {
                
                // Get the target from the "data-target" attribute
                let target = $el.dataset.target;
                let $target = document.getElementById(target);
                
                // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                $el.classList.toggle('is-active');
                $target.classList.toggle('is-active');
                
            });
        });
    }



    if (document.getElementById('login-tabs')) {
    document.getElementById('login-tabs').onclick = function(e) {
        document.querySelectorAll('[data-login]').forEach(function (el) {
            el.parentNode.classList.remove('is-active');
        });

        e.target.parentNode.classList.add("is-active");

        document.getElementById('login-as').value = e.target.getAttribute('data-login')
    };
    }

    toastr.options = {
        "positionClass": "toast-bottom-right",
        "newestOnTop": true,
        "progressBar": true,
        "tapToDismiss": false,
    }

    if (window.NCFU.toastr) {
console.log(123)
        toastr.success(window.NCFU.toastr.message)
    }

});


let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}
