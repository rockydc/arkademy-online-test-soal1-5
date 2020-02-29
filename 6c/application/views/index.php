<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>arkademi</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="height: 109px;margin-bottom: 122px;box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.25);">
        <div class="container"><a class="navbar-brand" href="#"><img src="assets/img/1_7ugSMISUo8vYf9ILG6VmuQ.png" width="150" height="106"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav"></ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group" style="width: 765px;height: 58px;border-radius: 10px;"><label for="search-field"></label><input class="form-control search-field" type="search" id="search-field" name="search" placeholder="Search" minlength="5" maxlength="8" style="width: 100%;background-color: #CECECE;border-radius: 10px;height: 60px;"></div>
                </form><a class="btn btn-light action-button" role="button" style="width: 140px;background-color: #FADC9C;border-radius: 6px;box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.25);" data-toggle="modal" data-target="#myModalAdd">ADD</a>
            </div>
        </div>
    </nav>
    <div class="table-responsive" style="padding-left: 104px;padding-right: 104px;font-size: 20px;">
        <table class="table">
            <thead style="background-color: #FADC9C;color: rgb(255,255,255);">
                <tr>
                    <th>no</th>
                    <th>Cashier</th>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr style="border-radius: 0px 0px 20px 20px;">
                    <td>Cell 1</td>
                    <td>Cell 2</td>
                    <td>Cell 1</td>
                    <td>Cell 2</td>
                    <td>Cell 1</td>
                    <td>
                        <div><img style="width: 40px;height: 40px;" src="assets/img/edit%20(2)%201.png"><img style="width: 40px;height: 40px;margin-left: 23px;" src="assets/img/bin%201.png"></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="myModalAdd">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header d-xl-flex">
                    <h4 class="modal-title">ADD</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body" style="padding: 0px;padding-right: 0px;padding-left: 0px;">
                    <div class="d-xl-flex" style="width: 100%;padding-right: 120px;padding-left: 120px;padding-top: 20px;"><select class="border-left-0 border-right-0 border-top-0" style="background-color: rgb(255,255,255);width: 600px;margin-right: 0px;margin-left: 0px;height: 60px;color: rgb(117,117,117);">
                            <optgroup label="This is a group">
                                <option value="12" selected="">This is item 1</option>
                                <option value="13">This is item 2</option>
                                <option value="14">This is item 3</option>
                            </optgroup>
                        </select></div>
                    <div class="d-xl-flex" style="width: 100%;padding-right: 120px;padding-left: 120px;padding-top: 20px;"><select class="border-left-0 border-right-0 border-top-0" style="background-color: rgb(255,255,255);width: 600px;margin-right: 0px;margin-left: 0px;height: 60px;color: rgb(117,117,117);">
                            <optgroup label="This is a group">
                                <option value="12" selected="">This is item 1</option>
                                <option value="13">This is item 2</option>
                                <option value="14">This is item 3</option>
                            </optgroup>
                        </select></div>
                    <div class="d-xl-flex" style="width: 100%;padding-right: 120px;padding-left: 120px;padding-top: 20px;"><input type="text" class="border-left-0 border-right-0 border-top-0" style="width: 600px;height: 60px;" placeholder="Icea Tea" name="name"></div>
                    <div class="d-xl-flex" style="width: 100%;padding-right: 120px;padding-left: 120px;padding-top: 20px;"><input type="text" class="border-left-0 border-right-0 border-top-0" style="width: 600px;height: 60px;" placeholder="10.000" name="name"></div>
                </div>
                <div class="modal-footer" style="margin-top: 62px;"><button class="btn btn-light" type="button" data-dismiss="modal"></button><button class="btn btn-primary" type="button" style="background-color: #FADC9C;">Save</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body" style="margin-top: 50px;">
                    <div class="container text-center">
                        <h5 style="font-size: 40px;margin-bottom: 39px;">Data raisa ID&nbsp;<span style="color: #FADC9C;">#1</span></h5><img src="assets/img/checked%20(3)%201.png">
                        <h5 style="font-size: 40px;margin-top: 39px;">Berhasil Dihapus!</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>