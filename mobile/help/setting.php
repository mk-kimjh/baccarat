<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
<link href="/mobile/css/help.css" rel="stylesheet">
</head>
<body class="help">
    <div id="wrapper">
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
        <main id="content" class="customer-manage">
            <div class="container">
                <div class="path">
                    <ol class="breadcrumb">
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">서비스</a></li>
                        <li class="active">FAQ</li>
                    </ol>
                </div>
                <div class="filter">
                    <div class="btn-group">
                        <button type="button" class="btn btn-block btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            고객관리 및 정보제공 <span class="caret"></span>
                        </button>
                        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/help/_menu.php'); ?>
                    </div>
                </div>
                <div class="details">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">주얼리</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="home" role="tab" data-toggle="tab">바 및 식기</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="home" role="tab" data-toggle="tab">장식품</a></li>
                        <li role="presentation"><a href="#profile" aria-controls="home" role="tab" data-toggle="tab">조명</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="home">1</div>
                        <div role="tabpanel" class="tab-pane" id="profile">2</div>
                        <div role="tabpanel" class="tab-pane" id="messages">3</div>
                        <div role="tabpanel" class="tab-pane" id="settings">4</div>
                    </div>
                </div>
                <div class="notify">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="ask">
                                <h5>문의</h5>
                                <hr>
                                <p>제품 및 <a href="">개인 정보</a> 문의</p>
                                <p>연락처</p>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="cs">
                                <h5>바카라 고객서비스</h5>
                                <hr>
                                <p>월요일 - 금요일</p>
                                <p>10am - 6pm</p>
                                <p>Tel. 02.3438.3778</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    </div>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>