                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-12 grid-margin">
                                <div class="row">
                                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                        <h3 class="font-weight-bold">Welcome <?php echo ucwords(session() -> username) ?></h3>
                                        <h6 class="font-weight-normal mb-0">!</h6>
                                    </div>
                                    <div class="col-12 col-xl-4">
                                        <div class="justify-content-end d-flex">
                                            <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                                <!-- <button class="btn btn-sm btn-light bg-white" type="button"> -->
                                                    <!-- <i class="icon-globe"></i> <?php $date = new DateTime('now', new DateTimeZone('Asia/Jakarta')) ?> <?php echo  $date -> format('Y-m-d'); ?> -->
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <button class="btn btn-link" data-toggle="modal" data-target="#show_create_image_modals"><i class="fas fa-image mr-2"></i>Add new images</button> -->

                          <div class="row mt-4">

                        <div class="row">
                            <div class="col-md-4 grid-margin">
                                <img src="<?= base_url('assets/images/storage') ?>/tanjiro.jpg" class="rounded mx-auto d-block" style="max-width:500px; max-height: 500px;"class="stored-img" alt="stored-img">
                                <i class="far fa-heart"></i>
                                <i class="far fa-comment ml-2"></i>
                            </div>
                            <div class="col-md-4 grid-margin">
                                <img src="<?= base_url('assets/images/storage') ?>/Tomioka.jpg" class="rounded mx-auto d-block" style="max-width:450px; max-height: 300px;" class="stored-img" alt="stored-img">
                                <i class="far fa-heart"></i>
                                <i class="far fa-comment ml-2"></i>
                            </div>
                            <div class="col-md-4 grid-margin">
                                <img src="<?= base_url('assets/images/storage') ?>/hsh.jpeg" class="rounded mx-auto d-block" style="max-width:500px; max-height: 600px;" class="stored-img" alt="stored-img">
                                <i class="far fa-heart"></i>
                                <i class="far fa-comment ml-2"></i>
                            </div>
                            <div class="col-md-4 grid-margin">
                                <img src="<?= base_url('assets/images/storage') ?>/n.jpg" class="rounded mx-auto d-block" style="max-width:500px; max-height: 600px;" class="stored-img" alt="stored-img">
                                <i class="far fa-heart"></i>
                                <i class="far fa-comment ml-2"></i>
                            </div>
                         
                      
                        </div>