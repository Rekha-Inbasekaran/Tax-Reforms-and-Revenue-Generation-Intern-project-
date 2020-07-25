<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tax Collection</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="GET" action="<?php echo e(url('/insertcoll')); ?>">
                        <?php echo e(csrf_field()); ?>



                        <div class="form-group<?php echo e($errors->has('mcode') ? ' has-error' : ''); ?>">
                            <label for="date" class="col-md-4 control-label">Date</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" value="<?php echo e(old('data')); ?>">

                                <?php if($errors->has('date')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('date')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>



                        <div class="form-group<?php echo e($errors->has('mcode') ? ' has-error' : ''); ?>">
                            <label for="mcode" class="col-md-4 control-label">Municipality Code</label>

                            <div class="col-md-6">
                                <input id="mcode" type="text" class="form-control" name="mcode" value="<?php echo e(old('mcode')); ?>">

                                <?php if($errors->has('mcode')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('mcode')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>



        

                        <div class="form-group<?php echo e($errors->has('tcode') ? ' has-error' : ''); ?>">
                            <label for="tcode" class="col-md-4 control-label">Tax Code</label>

                            <div class="col-md-6">
                                <input id="tcode" type="text" class="form-control" name="tcode">

                                <?php if($errors->has('tcode')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('tcode')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>



                        <div class="form-group<?php echo e($errors->has('colamt') ? ' has-error' : ''); ?>">
                            <label for="colamt" class="col-md-4 control-label">Collection Amount</label>

                            <div class="col-md-6">
                                <input id="colamt" type="text" class="form-control" name="colamt">

                                <?php if($errors->has('colamt')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('colamt')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('arramt') ? ' has-error' : ''); ?>">
                            <label for="arramt" class="col-md-4 control-label">Arrear Amount</label>

                            <div class="col-md-6">
                                <input id="arramt" type="text" class="form-control" name="arramt">

                                <?php if($errors->has('arramt')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('arramt')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>