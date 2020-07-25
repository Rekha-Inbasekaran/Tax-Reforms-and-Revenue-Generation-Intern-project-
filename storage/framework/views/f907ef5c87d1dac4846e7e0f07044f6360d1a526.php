<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Demand</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/create')); ?>">
                        <?php echo e(csrf_field()); ?>



                        <div class="form-group<?php echo e($errors->has('report') ? ' has-error' : ''); ?>">
                            <label for="report" class="col-md-4 control-label">Enter Report Type</label>

                            <div class="col-md-6">

                            <select class="form-control" id="report" name="report">
                                    <option selected disabled>Select your type</option>
                                    <option>Demand of previous Year</option>
                                     <option>Collection of previous Year</option>
                                     <option>Demand of current Year</option>
                                    <option>Demand of current Year</option>
                            </select>

                                <?php if($errors->has('report')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('report')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

 

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Enter
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