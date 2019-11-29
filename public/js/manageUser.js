

$(document).ready(function () {
    $('#select-manager').on('change', function () {
        var option = $(this).val();

        if (option == 2) {
            function load_data() {
                $.ajax({
                    url: "../functions/loadUser.php",
                    method: "POST",
                    success: function (data) {
                        $('#user-data').html(data);
                    }
                });
            }
            load_data();

            //add data
            $('#button-user-add').css('display', 'inline-flex');
            $('#button-user-add').on('click', function () {
                if (option == 2) {
                    console.log('option:', option);
                    $('#add-user-field').css('display', 'inline-flex');
                    $('#name-field').focus();
                    $('#user-confirm').css('display', 'inline-flex');
                    $('#user-decline').css('display', 'inline-flex');
                    console.log('hello');
                }
            });

            $('#user-decline').off('click').on('click', function () {
                $('#add-user-field').css('display', 'none');
                $('#description-field, #price-field, #img-field').html('');
            })

            $('#user-confirm').off('click').on('click', function () {
                console.log('user-confirm: clicked');
                $('#add-user-field').css('display', 'none');
                $('#user-confirm').css('display', 'none');
                // var id = $('#id-field').text();
                var name = $('#name-field').text();
                var email = $('#email-field').text();
                var password = $('#password-field').text();
                var gender = $('#gender-field').text();
                var birthday = $('#birthday-field').text();

                if (name == '' || email == '' || password == '' || gender == '' || birthday == '') {
                    alert('Data invalid!');
                }
                else {

                    $.ajax({
                        url: "../functions/insertUser.php",
                        method: "POST",
                        data: {
                            name: name,
                            email: email,
                            password: password,
                            gender: gender,
                            birthday: birthday
                        },
                        dataType: "text",
                        success: function (data) {
                            // alert(data);
                            load_data();
                        }
                    });
                }
            });

            /* edit data */

            //edit function
            function edit_data(id, name, email, password, gender, birthday) {
                console.log('data send: ');
                console.log('id:', id);
                console.log('name:', name);
                console.log('email:', email);
                console.log('password:', password);
                console.log('gender:', gender);
                console.log('birthday:', birthday);

                $.ajax({
                    url: "../functions/editUser.php",
                    method: "POST",
                    data: {
                        id: id,
                        name: name,
                        email: email,
                        password: password,
                        gender: gender,
                        birthday: birthday
                    },
                    dataType: "text",
                    success: function (data) {
                        // alert(data);
                        load_data();
                    }
                });
            }

            //enable edit data function
            $(document).on('click', '.user-edit', function () {
                console.log('edit clicked');
                $('#user-edit-confirm').css('display', 'inline-flex');
                var id = $(this).attr('data-userEdit');
                var name;
                var email;
                var password;
                var gender;
                var birthday;
                console.log(id);
                // select exact row
                $('.name, .email, .password, .gender, .birthday').each(function () {
                    if ($(this).attr('data-name') == id) {
                        $(this).attr('contenteditable', 'true');
                        $(this).focus();
                        name = $(this).text();
                        console.log('thisname', name);
                        $(this).on('blur', function () {
                            console.log('blur des: ', $(this).text());
                            name = $(this).text();
                        });
                    }
                    if ($(this).attr('data-email') == id) {
                        $(this).attr('contenteditable', 'true');
                        email = $(this).text();
                        console.log('thisemail', email);
                        $(this).on('blur', function () {
                            console.log('blur email: ', $(this).text());
                            email = $(this).text();
                        });
                    }
                    if ($(this).attr('data-password') == id) {
                        $(this).attr('contenteditable', 'true');
                        password = $(this).text();
                        console.log('thispassword', password);
                        $(this).on('blur', function () {
                            console.log('blur password: ', $(this).text());
                            password = $(this).text();
                        });
                    }
                    if ($(this).attr('data-gender') == id) {
                        $(this).attr('contenteditable', 'true');
                        gender = $(this).text();
                        console.log('thisgender', gender);
                        $(this).on('blur', function () {
                            console.log('blur gender: ', $(this).text());
                            gender = $(this).text();
                        });
                    }
                    if ($(this).attr('data-birthday') == id) {
                        $(this).attr('contenteditable', 'true');
                        birthday = $(this).text();
                        console.log('thisbirthday', birthday);
                        $(this).on('blur', function () {
                            console.log('blur birthday: ', $(this).text());
                            birthday = $(this).text();
                        });
                    }
                });

                $('#user-edit-confirm').off('click').on('click', function () {
                    edit_data(id, name, email, password, gender, birthday);
                    $(this).css('display', 'none');

                });
            });

            /* remove data */
            function remove_data(id) {
                $.ajax({
                    url: "../functions/removeUser.php",
                    method: "POST",
                    data: {
                        id: id
                    },
                    dataType: "text",
                    success: function (data) {
                        // alert(data);
                        load_data();
                    }
                });
            }

            // enable remove data function
            $(document).on('click', '.user-remove', function () {
                console.log('remove clicked');
                $('#user-edit-confirm').css('display', 'inline-flex');
                var id = $(this).attr('data-userTrash');
                $('#user-edit-confirm').off('click').on('click', function () {
                    remove_data(id);
                    $(this).css('display', 'none');
                });
            });

        } else {
            $('#user-data').html('');
            $('#button-user-add').css('display', 'none');
        }
    });

});