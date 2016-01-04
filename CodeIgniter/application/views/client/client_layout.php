<!Doctype html>
<html>
    <head>
        <title><?php echo $title ?></title>
        <link href="<?php echo base_url('resource/css/bootstrap.min.css') ?>" rel="stylesheet">
        <style type="text/css">
            @media (max-width:768px){ .footer{position:absolute;width:100%;} }
            @media (min-width:768px){ .footer{position:absolute;bottom:0;height:60px;width:100%;}}
            .footer {
                position: absolute;
                bottom: 0;
                width: 100%;
                /* Set the fixed height of the footer here */
                height: 60px;
                background-color: #222;
                color: white;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">WebSiteName</a>
                </div>
                <div>
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#">Page 1</a></li>
                        <li><a href="#">Page 2</a></li>
                        <li><a href="#">Page 3</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php
                                if ($this->session->userdata('identity') !== NULL) {
                                    echo $this->session->userdata('identity');
                                }
                                ?><b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('client/profile'); ?>">Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url('auth/logout'); ?>">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="page-header">
                <h1>My Page</h1>
            </div>
            <?php $this->load->view($content); ?>
        </div>
        <div class="footer">
            <div class="container">
                <p>CopyRigh 2015</p>
            </div>
        </div>
        <script src="<?php echo base_url('resource/js/jquery-1.11.3.min.js') ?>"></script>
        <script src="<?php echo base_url('resource/js/bootstrap.min.js') ?>"></script>
    </body>
</html>