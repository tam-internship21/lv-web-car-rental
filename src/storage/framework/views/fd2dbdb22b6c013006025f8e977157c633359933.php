
<?php $__env->startSection('content'); ?>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row mt-4">

               <?php echo $__env->make('partials.filter-list-cars', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- list cars -->
                <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(isset($car)): ?>
                        <?php
                            $photo = explode(',', $car->photo);
                            $encode = encrypt($car->id);
                        ?>

                        <div class="col-md-4">
                            <div class="car-wrap rounded ftco-animate">
                                <div class="img rounded d-flex align-items-end"
                                    style="background-image: url('<?= $photo[0] ?>');">
                                </div>
                                <div class="text">
                                    <h2 class="mb-0"><a
                                            href="<?php echo e(route('car.detail', $encode)); ?>"><?php echo e($car->name); ?></a></h2>
                                    <div class="d-flex mb-3">
                                        <span class="cat"><?php echo e($car->render->manu_name); ?></span>
                                        <p class="price ml-auto">
                                            <?= number_format($car->price, 0, ',', '.') . ' VNĐ' ?><span>/day</span></p>
                                    </div>
                                    <!-- Tính tổng rate trung bình  -->
                                    <?php
                                        $numberRate = DB::table('reviews')
                                            ->where('cars_id', $car->id)
                                            ->count();
                                        $sumRating = DB::table('reviews')
                                            ->where('cars_id', $car->id)
                                            ->sum('rate');
                                        $itemAge = 0;
                                        if ($numberRate != 0) {
                                            $itemAge = round($sumRating / $numberRate, 2);
                                        }
                                    ?>
                                    <div class="wrapper">
                                        <?php for($i = 1; $i <= 5; $i++): ?>
                                            <i class="ion-ios-star <?php echo e($i <= $itemAge ? 'active' : ''); ?>">
                                            </i>
                                        <?php endfor; ?>

                                    </div>
                                    <!-- Số chuyến đi -->
                                    <?php
                                        $icheck = false;
                                        
                                        $count = DB::table('bookings')
                                            ->where('status', 'active')
                                            ->where('cars_id', $car->id)
                                            ->count();
                                    ?>


                                    <span class="add-wapper">

                                        <?= str_pad($count, 2, '0', STR_PAD_LEFT) ?> trip

                                    </span>

                                    <!-- địa chỉ -->
                                    <div class="location">
                                        <div class=located>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <?php echo e($car->city_title); ?>, <?php echo e($car->region_title); ?>

                                        </div>
                                    </div>
                                    <p class="d-flex mb-0 d-block"><a href="<?php echo e(route('car.booking', $encode)); ?>"
                                            class="btn btn-orange py-2 mr-1">Rent
                                            now</a> <a href="<?php echo e(route('car.detail', $encode)); ?>"
                                            class="btn btn-gray py-2 ml-1">Details</a></p>
                                    <div class="regis-partner-car" style="margin-top: 10px;padding-bottom: 10px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <?php echo e($cars->links()); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
   <section class="ftco-section ftco-intro partner mb-2" style="background: url(public/ui/images/bg_2.jpg) center;">
    <div class="overlays"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 heading-section heading-section-white ftco-animate">
                <h3 class="mb-3 text-white" data-i18n="home.content.partnerRegis.content"></h3>
                <a href="<?php echo e(route('partner.registration')); ?>" class="btn btn-secondary btn-lg" data-i18n="home.content.partnerRegis.btnRegis"></a>
            </div>
        </div>
    </div>
</section>
<section class="ftco-counter ftco-section img bg-light" id="section-counter">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="60">0</strong>
                        <span><span data-i18n="home.content.total.one.top"> </span><span data-i18n="home.content.total.one.bottom"></span></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="1090">0</strong>
                        <span><span data-i18n="home.content.total.two.top"> </span><span data-i18n="home.content.total.two.bottom"></span></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="2590">0</strong>
                        <span><span data-i18n="home.content.total.three.top"> </span><span data-i18n="home.content.total.three.bottom"></span></span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text d-flex align-items-center">
                        <strong class="number" data-number="67">0</strong>
                        <span><span data-i18n="home.content.total.four.top"> </span><span data-i18n="home.content.total.four.bottom"></span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <style>
        .ftco-intro.partner .overlays {
            position: absolute;
            top: -120px;
            left: -100px;
            right: 0;
            bottom: -120px;
            width: 40%;
            content: '';
            opacity: 1;
            background: #e85626;
            -ms-transform: rotate(18deg);
            -webkit-transform: rotate(18deg);
            transform: rotate(18deg);
        }

    </style>
    <style>
        .located {
            position: relative;
            font-size: .8125rem;
            top: -12px;
            bottom: 0;
            left: 0;
            right: 0;
        }

        .located i {
            width: 20px;
            height: 20px;
            border: 1px solid;
            text-align: center;
            padding: 3px;
            margin-left: 1px;
            border-radius: 50px;
        }

        .located i:before {
            color: #E85626;
        }

        /* tổng rate */
        .add-wapper {
            position: relative;
            top: -16px;
            left: 100px;
            font-size: 14px;
            bottom: 0;
            right: 0;

        }

        .wrapper .active {
            color: #E85626 !important;
            position: relative;
        }

        .wrapper {
            position: relative;
            bottom: 15px;
            left: 0;
            right: 0;
            display: inline-block;
            border: none;
            font-size: 20px;
            padding-top: -74px;
            margin-left: -2px;
        }

    </style>

    <!-- Footer -->

    <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
        //Xóa style:display:none; trong select;
        $('.pagination').remove();
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Yotrip\resources\views/pages/car.blade.php ENDPATH**/ ?>