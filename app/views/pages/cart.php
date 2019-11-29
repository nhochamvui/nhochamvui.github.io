<link rel="stylesheet" href="public/css/home.css?version=1.1">
 <title>Home</title>
 </head>

 <body>
    <div>
        <?php require 'app/views/components/header.php'; ?>
        <div class="tab-content">
             <div class="row">
             </div>
                <div class="row">
                    <div class="col tab-content">
                        <div class="title">
                            <h1>Sản phẩm của chúng tôi</h1>
                        </div>
                        <div class="list-items">
                            <div class="tab-pane">
                                <div class="row" id="row-items">
                                    <div class="img-responsive col-md-3">
                                        <div class="item">
                                            <img src="https://kfcvietnam.com.vn/uploads/combo/842b5042d4c05a368dba0738fe3de876.png" class = "img-responsive center-block">
                                        </div>
                                    </div>
                                    <div class="img-responsive col-md-3">
                                        <div class="item">
                                            <img src="https://kfcvietnam.com.vn/uploads/combo/842b5042d4c05a368dba0738fe3de876.png" class = "img-responsive center-block">
                                        </div>
                                    </div>
                                    <div class="img-responsive col-md-3">
                                        <div class="item">
                                            <img src="https://kfcvietnam.com.vn/uploads/combo/842b5042d4c05a368dba0738fe3de876.png" class = "img-responsive center-block">
                                        </div>
                                    </div>
                                    <div class="img-responsive col-md-3">
                                        <div class="item">
                                            <img src="https://kfcvietnam.com.vn/uploads/combo/842b5042d4c05a368dba0738fe3de876.png" class = "img-responsive center-block">
                                        </div>
                                    </div>
                                    </div>   
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
        <div>
         <?php require 'app/views/components/footer.php'; ?>
    </div>
    
    <script>
        var data = <?php echo json_encode($data) ?>;
        var sizeOfItems = <?php echo count(json_decode($data, true))?>;
        data = jQuery.parseJSON(data);
        data.forEach(function(data, index) {
            // console.log(data,index);
            console.log(data['name']);
        }); 
        var block = '<div class="col-sm-4 col-xs-6"><div class="item"><img src="https://kfcvietnam.com.vn/uploads/combo/842b5042d4c05a368dba0738fe3de876.png" class="img-responsive center-block"></div></div>';
        for (i = 0; i < sizeOfItems; i++) {
            // $("#row-items").append(block);
        }
    </script>
     <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
     <script src="public/js/authentication.js" type="text/javascript"></script>