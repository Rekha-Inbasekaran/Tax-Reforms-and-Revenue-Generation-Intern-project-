<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Municipality</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/create')); ?>">
                        <?php echo e(csrf_field()); ?>



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



                        <div class="form-group<?php echo e($errors->has('mname') ? ' has-error' : ''); ?>">
                            <label for="mname" class="col-md-4 control-label">Municipality Name</label>

                            <div class="col-md-6">
                                <input id="mname" type="text" class="form-control" name="mname" value="<?php echo e(old('mname')); ?>">

                                <?php if($errors->has('mname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('mname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('adname') ? ' has-error' : ''); ?>">
                            <label for="adname" class="col-md-4 control-label">Admin Name</label>

                            <div class="col-md-6">
                                <input id="adname" type="text" class="form-control" name="adname" value="<?php echo e(old('adname')); ?>">

                                <?php if($errors->has('adname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('adname')); ?></strong>
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



                        <div class="form-group<?php echo e($errors->has('prcode') ? ' has-error' : ''); ?>">
                            <label for="prcode" class="col-md-4 control-label">Profile Code</label>

                            <div class="col-md-6">
                                <input id="prcode" type="text" class="form-control" name="prcode">

                                <?php if($errors->has('prcode')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('prcode')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('ofph') ? ' has-error' : ''); ?>">
                            <label for="ofph" class="col-md-4 control-label">Office PH.No</label>

                            <div class="col-md-6">
                                <input id="ofph" type="text" class="form-control" name="ofph">

                                <?php if($errors->has('ofph')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('ofph')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>




                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">Office Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>">

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
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