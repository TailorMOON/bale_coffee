$(document).ready(function() {

    function signInWithGoogle() {
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId());
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail());

        }

        gapi.load('auth2', function () {
            gapi.auth2.init({
                client_id: 'YOUR_CLIENT_ID',
            }).then(function () {
                gapi.auth2.getAuthInstance().signIn().then(onSignIn);
            });
        });
    }

    var accountLink = document.getElementById('navbarDropdownAccount');
    accountLink.addEventListener('click', function() {
        window.location.href = '/account';
    });

    var timeoutOrder;
    $('.nav-item.dropdown-order').mouseenter(function () {
        clearTimeout(timeoutOrder);
        $(this).addClass('show');
        $(this).find('.dropdown-menu').addClass('show');
    }).mouseleave(function () {
        var $this = $(this);
        timeoutOrder = setTimeout(function () {
            $this.removeClass('show');
            $this.find('.dropdown-menu').removeClass('show');
        }, 50);
    });

    $('.nav-item.dropdown-order').hover(
        function() {
            $(this).find('.nav-link').addClass('hovered');
        },
        function() {
            $(this).find('.nav-link').removeClass('hovered');
        }
    );

    var timeoutAccount;
    $('.nav-item.dropdown-account').mouseenter(function () {
        clearTimeout(timeoutAccount);
        $(this).addClass('show');
        $(this).find('.dropdown-menu').addClass('show');
    }).mouseleave(function () {
        var $this = $(this);
        timeoutAccount = setTimeout(function () {
            $this.removeClass('show');
            $this.find('.dropdown-menu').removeClass('show');
        }, 50);
    });

    $('.nav-item.dropdown-account').hover(
        function() {
            $(this).find('.nav-link').addClass('hovered');
        },
        function() {
            $(this).find('.nav-link').removeClass('hovered');
        }
    );

    $('#loginModal .btn-primary').click(function () {
        if (validateLoginForm()) {
            $('#loginModal').modal('hide');
        }
    });

    function validateLoginForm() {
        var email = $('#loginEmail').val();
        var password = $('#loginPassword').val();

        if (!email || !password) {
            alert('Please fill in all fields.');
            return false;
        }

        return true;
    }

    function validateRegisterForm() {
        var fullName = $('#registertName').val();
        var email = $('#registerEmail').val();
        var phoneNumber = $('#registerNumber').val();
        var password = $('#registerPassword').val();
        var confirmPassword = $('#registerConfirmPassword').val();
        var checkBox = $('#checkBox').prop('checked');

        if (!fullName || !email || !phoneNumber || !password || !confirmPassword || !checkBox) {
            alert('Please fill in all fields and agree to the terms and conditions.');
            return false;
        }

        return true;
    }

    $('#registerModal #registerButton').click(function () {
        if (validateRegisterForm()) {
            $('#registerModal').modal('hide');
        }
    });
    
    $(document).on('mousedown', '#login-show-password', function (e) {
        togglePasswordVisibility('loginPassword', 'login-password-hide-show-icon');
    }).on('mouseup', function () {
        resetIconAndInput('loginPassword', 'login-password-hide-show-icon');
    });

    $(document).on('mousedown', '#register-show-password', function (e) {
        togglePasswordVisibility('registerPassword', 'register-password-hide-show-icon');
    }).on('mouseup', function () {
        resetIconAndInput('registerPassword', 'register-password-hide-show-icon');
    });

    $(document).on('mousedown', '#register-show-confirm-password', function (e) {
        togglePasswordVisibility('registerConfirmPassword', 'register-confirm-password-hide-show-icon');
    }).on('mouseup', function () {
        resetIconAndInput('registerConfirmPassword', 'register-confirm-password-hide-show-icon');
    });

    function togglePasswordVisibility(inputId, iconId) {
        var icon = $("#" + iconId);
        var input = $("#" + inputId);

        icon.toggleClass('fa-eye fa-eye-slash');
        input.attr("type", input.attr("type") === "password" ? "text" : "password");
    }

    function resetIconAndInput(inputId, iconId) {
        $("#" + iconId).removeClass('fa-eye').addClass('fa-eye-slash');
        $("#" + inputId).attr("type", "password");
    }

    $('#loginModal').on('hidden.bs.modal', function () {
        clearLoginForm();
    });

    $('#registerModal').on('hidden.bs.modal', function () {
        clearRegisterForm();
    });

    function clearLoginForm() {
        $('#loginEmail').val('');
        $('#loginPassword').val('');
    }

    function clearRegisterForm() {
        $('#registertName').val('');
        $('#registerEmail').val('');
        $('#registerNumber').val('');
        $('#registerPassword').val('');
        $('#registerConfirmPassword').val('');    
        $('#checkBox').prop('checked', false);
    }

    $('#registerButton').click(function() {
        var password = $('#registerPassword').val();
        var confirmPassword = $('#registerConfirmPassword').val();
    
        if (password !== confirmPassword) {
            alert('Password and Confirm Password must match!');
            return;
        }

        clearRegisterForm();
    });

    $('#termsLink').click(function() {
        $('#termsModal').modal('show');
    });

    $('#instagramIcon').click(function() {
        window.open('{{$site_instagram}}', '_blank');
    });

    $('#whatsappIcon').click(function() {
        window.open('{{$site_whatsapp}}', '_blank');
    });

    function updateTotalPrice(productContainer, quantity) {
        var productPrice = parseFloat(productContainer.find('.product-price').text().replace('$', ''));

        var totalPrice = productPrice * quantity;

        productContainer.find('.total-price').text('Total: $' + totalPrice.toFixed(2));
    }
    
    $('.quantity-input').on('input', function() {
        var quantity = parseInt($(this).val());
        if (quantity < 0) {
            $(this).val(0);
        }
    });

    $('.order-btn').click(function() {
        var orderDetails = [];
        var totalOrderPrice = 0;

        $('.product-item-container').each(function(index) {
            var productName = $(this).find('h1').text();
            var productPrice = parseFloat($(this).find('.product-price').text().replace('Rp', '').replace(',', ''));
            var quantity = parseInt($(this).find('.quantity-input').val());

            if (quantity > 0) {
                var totalPrice = productPrice * quantity;
                totalOrderPrice += totalPrice;

                orderDetails.push({
                    itemName: productName,
                    itemPrice: productPrice,
                    itemQuantity: quantity,
                    totalPrice: totalPrice
                });
            }
        });

        updateOrderModal(orderDetails, totalOrderPrice);
    });

    function updateOrderModal(orderDetails, totalOrderPrice) {
        $('#orderDetails').empty();

        if (orderDetails.length > 0) {
            for (var i = 0; i < orderDetails.length; i++) {
                var item = orderDetails[i];
                var itemDetailsHtml = `
                    <div class="item-details">
                        <p>Product    : <span>${item.itemName}</span></p>
                        <p>Price      : Rp <span>${numberWithCommas(item.itemPrice.toFixed(2))}</span></p>
                        <p>Quantity   : <span>${item.itemQuantity}</span></p>
                        <p>Total Price : Rp <span>${numberWithCommas(item.totalPrice.toFixed(2))}</span></p>
                    </div>
                    <hr>
                `;
                $('#orderDetails').append(itemDetailsHtml);
            }

            $('#modalTotalHargaKeseluruhan').text('Rp ' + numberWithCommas(totalOrderPrice.toFixed(2)));

            $('#orderModal').modal('show');
        } else {
            alert('Please select items to order.');
        }
    }

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
    }
});