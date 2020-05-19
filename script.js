function readFile(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            var htmlPreview =
                '<img width="200" src="' + e.target.result + '" />' +
                '<p>' + input.files[0].name + '</p>';
            var wrapperZone = $(input).parent();
            var previewZone = $(input).parent().parent().find('.preview-zone');
            var boxZone = $(input).parent().parent().find('.preview-zone').find('.box').find('.box-body');

            $('#alert').remove();

            wrapperZone.removeClass('dragover');
            previewZone.removeClass('hidden');
            boxZone.empty();
            boxZone.append(htmlPreview);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

function reset(e) {
    e.wrap('<form>').closest('form').get(0).reset();
    e.unwrap();
    $('#alert').remove();
}

$(".dropzone").change(function () {
    readFile(this);
});

$('.dropzone-wrapper').on('dragover', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).addClass('dragover');
});

$('.dropzone-wrapper').on('dragleave', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).removeClass('dragover');
});

$('.remove-preview').on('click', function () {
    var boxZone = $(this).parents('.preview-zone').find('.box-body');
    var previewZone = $(this).parents('.preview-zone');
    var dropzone = $(this).parents('.form-group').find('.dropzone');
    boxZone.empty();
    previewZone.addClass('hidden');
    reset(dropzone);
});

// script.js

// function to show/hide password
function showPassword() {
    const passwordField = document.querySelector('#password')
    const showPassword = document.querySelector('#showPassword')
    if (showPassword.innerText == 'Show Password') {
        showPassword.innerText = 'Hide Password'
        passwordField.type = 'text'
    } else if (showPassword.innerText === 'Hide Password') {
        passwordField.type = 'password'
        showPassword.innerText = 'Show Password'
    }
}

// is the user logged in or not?
fetch('helper/is_logged_in.php')
    .then(res => res.json())
    .then(function (res) {
        const login = document.querySelector('#login')
        const logout = document.querySelector('#logout')
        const registerbtn = document.querySelector('#registerbtn')
        const homebtn = document.querySelector('#homebtn')
        const mygallery = document.querySelector('#mygallery')
        if (res.status == 'yes') {
            login.style.display = 'none'
            logout.style.display = 'inline-block'
            registerbtn.style.display = 'none'
            logout.addEventListener('click', function (e) {
                e.preventDefault()
                fetch('helper/logout_ajax.php')
                    .then(res => res.json())
                    .then(function (res) {
                        if (res.status == 'success') {
                            login.style.display = 'inline-block'
                            logout.style.display = 'none'
                            // document.querySelector('#message').innerHTML = '<p>You have been logged out</p>'
                            // document.querySelector('h1').innerText = 'Welecome to our Site!'
                            window.location.href = "login.php"
                        }
                    })
            })
        } else {
            //remove links
            login.style.display = 'inline-block'
            logout.style.display = 'none'
            registerbtn.style.display = 'inline-block'
            mygallery.style.display = 'none'
        }
    })