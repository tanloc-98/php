<?php 
    require_once 'index.php';
?>

<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="row align-items-stretch col-mb-50 mb-0">
                <!-- Contact Form -->
                <div class="col-lg-6">
                    <div class="fancy-title title-border">
                        <h3>Gửi tin nhắn cho chúng tôi</h3>
                    </div>
                    <?php 
                        echo $errors; 
                        echo $message;
                    ?>
                    <div class="">
                        <form class="mb-0" action="" method="post">
                            <div class="row">
                                <div class="col-12 form-group">
                                    <label for="name">Họ tên <small>*</small></label>
                                    <input type="text" id="name" name="name" value="<?= $result['name'] ?>" class="sm-form-control" />
                                </div>
                                <div class="col-12 form-group">
                                    <label for="email">Email <small>*</small></label>
                                    <input type="email" id="email" name="email" value="<?= $result['email'] ?>"
                                        class="email sm-form-control" />
                                </div>
                                <div class="col-12 form-group">
                                    <label for="title">Tiêu đề <small>*</small></label>
                                    <input type="text" id="title" name="title" value="<?= $result['title'] ?>"
                                        class="sm-form-control" />
                                </div>
                                <div class="col-12 form-group">
                                    <label for="message">Nội dung <small>*</small></label>
                                    <textarea class="sm-form-control" id="message" name="message" rows="6"
                                        cols="30"><?= $result['message'] ?></textarea>
                                </div>
                                <div class="col-12 form-group">
                                    <button type="submit" tabindex="5" class="button button-3d m-0">Gửi tin
                                        nhắn</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
                <!-- Contact Form End -->

                <!-- Google Map -->
                <div class="col-lg-6 min-vh-50">
                    
                </div><!-- Google Map End -->
            </div>

            <!-- Contact Info -->
            <div class="row col-mb-50">
                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-map-marker2"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Địa chỉ<span class="subtitle">Tầng 5, Tòa nhà Songdo, 62A Phạm Ngọc Thạch,
                                    Phường 6, Quận 3, HCM</span></h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-phone3"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Hotline<span class="subtitle">090 5744 470 <br /> 0383 308 983</span></h3>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="feature-box fbox-center fbox-bg fbox-plain">
                        <div class="fbox-icon">
                            <a href="#"><i class="icon-email"></i></a>
                        </div>
                        <div class="fbox-content">
                            <h3>Email<span class="subtitle">training@zend.vn</span></h3>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Info End -->

        </div>
    </div>
</section>