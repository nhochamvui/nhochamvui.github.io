$(document).ready(function () {
    $('#select-manager').on('change', function () {
        var option = $(this).val();

        if (option == 1) {
            function load_data() {
                $.ajax({
                    url: "../functions/loadMenu.php",
                    method: "POST",
                    success: function (data) {
                        $('#menu-data').html(data);
                        // alert(data);
                    }
                });
            }
            load_data();

            //add data
            $('#button-menu-add').css('display', 'inline-flex');
            $(document).on('click', '#button-menu-add', function () {
                console.log('option: ', option);
                $('#add-menu-field').css('display', 'inline-flex');
                $('#description-field').focus();
                $('#menu-confirm').css('display', 'inline-flex');
                $('#menu-decline').css('display', 'inline-flex');
                console.log('hello');
            });

            $(document).on('click', '#menu-decline', function () {
                $('#add-menu-field').css('display', 'none');
                $('#description-field, #price-field, #img-field').html('');
            })

            $(document).on('click', '#menu-confirm', function () {
                $('#add-menu-field').css('display', 'none');
                $('#menu-confirm').css('display', 'none');
                // var id = $('#id-field').text();
                var description = $('#description-field').text();
                var price = $('#price-field').text();
                var img = $('#img-field').text();

                if (description == '' || price == '' || img == '') {
                    alert('Data invalid!');
                }
                else {
                    $.ajax({
                        url: "../functions/insertMenu.php",
                        method: "POST",
                        data: {
                            description: description,
                            price: price,
                            img: img
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
            function edit_data(id, description, price, img) {
                console.log('data send: ');
                console.log('id:', id);
                console.log('des:', description);
                console.log('price:', price);
                console.log('img:', img);
                $.ajax({
                    url: encodeURI("../functions/editMenu.php"),
                    method: "POST",
                    data: {
                        id: id,
                        description: description,
                        price: price,
                        img: img,
                    },
                    dataType: "text",
                    success: function (data) {
                        // alert(data);
                        load_data();
                    }
                });
            }

            //enable edit data function
            $(document).on('click', '.menu-edit', function () {
                console.log('edit clicked');
                $('#menu-edit-confirm').css('display', 'inline-flex');
                var id = $(this).attr('data-menuEdit');
                var description;
                var price;
                var img;
                console.log(id);
                // select exact row
                $('.description, .price, .img-src').each(function () {
                    if ($(this).attr('data-description') == id) {
                        $(this).attr('contenteditable', 'true');
                        $(this).focus();
                        description = $(this).text();
                        console.log('thisDescription', description);
                        $(this).on('blur', function () {
                            console.log('blur des: ', $(this).text());
                            description = $(this).text();
                        });
                    }
                    if ($(this).attr('data-price') == id) {
                        $(this).attr('contenteditable', 'true');
                        price = $(this).text();
                        console.log('thisprice', price);
                        $(this).on('blur', function () {
                            console.log('blur price: ', $(this).text());
                            price = $(this).text();
                        });
                    }
                    if ($(this).attr('data-img') == id) {
                        $(this).attr('contenteditable', 'true');
                        img = $(this).text();
                        console.log('thisimg', img);
                        $(this).on('blur', function () {
                            console.log('blur img: ', $(this).text());
                            img = $(this).text();
                        });
                    }
                });

                $('#menu-edit-confirm').off('click').on('click', function () {
                    console.log('confirm clicked');
                    edit_data(id, description, price, img);
                    $(this).css('display', 'none');
                })
            });

            /* remove data */
            function remove_data(id) {
                $.ajax({
                    url: "../functions/removeMenu.php",
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
            $(document).on('click', '.menu-remove', function () {
                console.log('remove clicked');
                $('#menu-edit-confirm').css('display', 'inline-flex');
                var id = $(this).attr('data-menuTrash');
                $('#menu-edit-confirm').off('click').on('click', function () {
                    remove_data(id);
                    $(this).css('display', 'none');
                });
            });
        } else {
            $('#menu-data').html('');
            $('#button-menu-add').css('display', 'none');
        }
    });

});