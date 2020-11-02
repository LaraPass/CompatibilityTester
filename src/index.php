<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="@SpargonTech">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="LaraPass v2 is a self-hosted password manager that allows you to securely store login data and own it.">
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>LaraPass v2 - Compatibility Tester</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body style="background-color: #F5F6FA">
    <div class="container-xl wide-lg">
        <div class="wide-xs mx-auto m-4 p-4">
            <div class="text-center">
                <h2>LaraPass v2 Compatibility Tester</h2>
                <p>You can use this test page to check whether your server can run LaraPass v2 or not.</p>
            </div>
        </div>
        <div class="card card-bordered">
            <div class="row mt-4">
                <div class="col-lg-2">
                </div><!-- .col -->
                <div class="col-lg-8">
                    <div class="align-center flex-wrap flex-md-nowrap g-3">
                        <h4>Checking Requirements</h4>
                        <p>You need to meet all the requirements below in order to install LaraPass v2 and enable all the features.</p>

                        <?php $match = 1; ?>
                        <!-- PHP Version -->
                        <?php if (version_compare(PHP_VERSION, '7.3.16') >= 0) { ?>
                            <div class="alert alert-icon alert-success" role="alert">
                                <em class="icon fas fa-check-circle"></em>
                                <b>PHP Version -</b> <?php echo PHP_VERSION; ?>
                            </div>
                        <?php } else {
                            $match = 0; ?>
                            <div class="alert alert-icon alert-danger" role="alert">
                                <em class="icon fas fa-times-circle"></em>
                                <b>PHP Version -</b> Minimum <b>7.3.16</b> required. Your current version is <b><?php echo PHP_VERSION; ?></b>
                            </div>
                        <?php } ?>
                        <!-- OpenSSL PHP Extension -->
                        <?php if (extension_loaded("openssl")) { ?>
                            <div class="alert alert-icon alert-success" role="alert">
                                <em class="icon fas fa-check-circle"></em>
                                <b>OpenSSL -</b> Extension Loaded
                            </div>
                        <?php } else {
                            $match = 0; ?>
                            <div class="alert alert-icon alert-danger" role="alert">
                                <em class="icon fas fa-times-circle"></em>
                                <b>OpenSSL -</b> Extension Unavailable
                            </div>
                        <?php } ?>
                        <!-- Curl PHP Extension -->
                        <?php if (extension_loaded("curl")) { ?>
                            <div class="alert alert-icon alert-success" role="alert">
                                <em class="icon fas fa-check-circle"></em>
                                <b>Curl -</b> Extension Loaded
                            </div>
                        <?php } else {
                            $match = 0; ?>
                            <div class="alert alert-icon alert-danger" role="alert">
                                <em class="icon fas fa-times-circle"></em>
                                <b>Curl -</b> Extension Unavailable
                            </div>
                        <?php } ?>
                        <!-- Mbstring PHP Extension -->
                        <?php if (extension_loaded("mbstring")) { ?>
                            <div class="alert alert-icon alert-success" role="alert">
                                <em class="icon fas fa-check-circle"></em>
                                <b>Mbstring -</b> Extension Loaded
                            </div>
                        <?php } else {
                            $match = 0; ?>
                            <div class="alert alert-icon alert-danger" role="alert">
                                <em class="icon fas fa-times-circle"></em>
                                <b>Mbstring -</b> Extension Unavailable
                            </div>
                        <?php } ?>
                        <!-- ZIP PHP Extension -->
                        <?php if (extension_loaded("zip")) { ?>
                            <div class="alert alert-icon alert-success" role="alert">
                                <em class="icon fas fa-check-circle"></em>
                                <b>ZIP -</b> Extension Loaded
                            </div>
                        <?php } else {
                            $match = 0; ?>
                            <div class="alert alert-icon alert-danger" role="alert">
                                <em class="icon fas fa-times-circle"></em>
                                <b>ZIP -</b> Extension Unavailable
                            </div>
                        <?php } ?>
                        <!-- Tokenizer PHP Extension -->
                        <?php if (extension_loaded("tokenizer")) { ?>
                            <div class="alert alert-icon alert-success" role="alert">
                                <em class="icon fas fa-check-circle"></em>
                                <b>Tokenizer -</b> Extension Loaded
                            </div>
                        <?php } else {
                            $match = 0; ?>
                            <div class="alert alert-icon alert-danger" role="alert">
                                <em class="icon fas fa-times-circle"></em>
                                <b>Tokenizer -</b> Extension Unavailable
                            </div>
                        <?php } ?>
                        <!-- XML PHP Extension -->
                        <?php if (extension_loaded("xml")) { ?>
                            <div class="alert alert-icon alert-success" role="alert">
                                <em class="icon fas fa-check-circle"></em>
                                <b>XML -</b> Extension Loaded
                            </div>
                        <?php } else {
                            $match = 0; ?>
                            <div class="alert alert-icon alert-danger" role="alert">
                                <em class="icon fas fa-times-circle"></em>
                                <b>XML -</b> Extension Unavailable
                            </div>
                        <?php } ?>
                        <!-- CTYPE PHP Extension -->
                        <?php if (extension_loaded("ctype")) { ?>
                            <div class="alert alert-icon alert-success" role="alert">
                                <em class="icon fas fa-check-circle"></em>
                                <b>CTYPE -</b> Extension Loaded
                            </div>
                        <?php } else {
                            $match = 0; ?>
                            <div class="alert alert-icon alert-danger" role="alert">
                                <em class="icon fas fa-times-circle"></em>
                                <b>CTYPE -</b> Extension Unavailable
                            </div>
                        <?php } ?>
                        <!-- JSON PHP Extension -->
                        <?php if (extension_loaded("json")) { ?>
                            <div class="alert alert-icon alert-success" role="alert">
                                <em class="icon fas fa-check-circle"></em>
                                <b>JSON -</b> Extension Loaded
                            </div>
                        <?php } else {
                            $match = 0; ?>
                            <div class="alert alert-icon alert-danger" role="alert">
                                <em class="icon fas fa-times-circle"></em>
                                <b>JSON -</b> Extension Unavailable
                            </div>
                        <?php } ?>
                        <!-- PDO PHP Extension -->
                        <?php if (extension_loaded("pdo")) { ?>
                            <div class="alert alert-icon alert-success" role="alert">
                                <em class="icon fas fa-check-circle"></em>
                                <b>PDO -</b> Extension Loaded
                            </div>
                        <?php } else {
                            $match = 0; ?>
                            <div class="alert alert-icon alert-danger" role="alert">
                                <em class="icon fas fa-times-circle"></em>
                                <b>PDO -</b> Extension Unavailable
                            </div>
                        <?php } ?>
                        <!-- PDO PHP Extension -->
                        <?php if (extension_loaded("fileinfo")) { ?>
                            <div class="alert alert-icon alert-success" role="alert">
                                <em class="icon fas fa-check-circle"></em>
                                <b>FileInfo -</b> Extension Loaded
                            </div>
                        <?php } else {
                            $match = 0; ?>
                            <div class="alert alert-icon alert-danger" role="alert">
                                <em class="icon fas fa-times-circle"></em>
                                <b>FileInfo -</b> Extension Unavailable
                            </div>
                        <?php } ?>
                        <hr>
                        <?php if ($match) { ?>
                            <div class="alert alert-icon alert-success" role="alert">
                                <em class="icon fas fa-check-circle"></em>
                                <b>Congratulations!</b> Your server supports LaraPass v2.
                            </div>
                        <?php  } else { ?>
                            <div class="alert alert-icon alert-danger" role="alert">
                                <em class="icon fas fa-times-circle"></em>
                                <b>Sorry!</b> Your server does not support LaraPass v2. Check the above extensions and ensure all of them are loaded & available.
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-->
    <div class="m-4">
        <div class="container-xl text-center">
            <div class="row align-items-center">
                <div class="col-md-6">
                    2018-20 &copy; <a href="https://larapass.net" target="_blank">LaraPass</a> (a product of <a href="https://spargon.tech" target="_blank">Spargon Technologies</a>)
                </div>
                <div class="col-md-6 align-center">
                    <ul class="nav nav-sm">
                        <li class="nav-item"><a class="nav-link" href="https://larapass.net" target="_blank">Website</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://docs.larapass.net" target="_blank">Documentation</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://support.larapass.net" target="_blank">Support</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://purchase.larapass.net" target="_blank">Purchase Larapass v2</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
