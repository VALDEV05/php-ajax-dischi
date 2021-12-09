 <div class="container-fluid">
                <div class="row gx-5 my-5 d-flex justify-content-center">
                    <?php foreach ($disks as $disk) :?>
                        <div class="col-md-2 text-center my-3">
                            <div class="card rounded-0 p-2">
                                <img src="<?php echo $disk['poster'] ?>" alt="<?php echo $disk['author'] ?>" class="img-fluid" />
                                <h3 class="title mt-3"><?php echo $disk['title'] ?></h3>
                                <div class="text mt-2">
                                    <p><?php echo $disk['author'] ?></p>
                                    <p><?php echo $disk['year'] ?></p>
                                </div>
                            </div>
                        </div>
                    
                    <?php endforeach; ?>
                </div>
</div>