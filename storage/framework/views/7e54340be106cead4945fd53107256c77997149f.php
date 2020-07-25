<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tax Details</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/checkdata')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="taxcode" class="col-md-4 control-label">Tax Code</label>

                            <div class="col-md-6">
                                <input id="taxcode" type="text" class="form-control" name="taxcode" value="<?php echo e(old('taxcode')); ?>">

                                <?php if($errors->has('taxcode')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('taxcode')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="taxname" class="col-md-4 control-label">Tax Name</label>

                            <div class="col-md-6">
                                <input id="taxname" type="text" class="form-control" name="taxname">

                                <?php if($errors->has('taxname')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('taxname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="taxdiscription" class="col-md-4 control-label">Tax Discription</label>

                            <div class="col-md-6">
                                <input id="taxdiscription" type="text" class="form-control" name="taxdiscription">

                                <?php if($errors->has('taxdiscription')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('taxdiscription')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4 taxd">
                                <button type="submit" class="btn btn-success btn-lg">
                                    <i class="fa fa-btn fa-sign-in"></i> Add
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