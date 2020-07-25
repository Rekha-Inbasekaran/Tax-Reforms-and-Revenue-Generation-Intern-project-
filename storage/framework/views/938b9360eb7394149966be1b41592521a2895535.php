<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                <div class="text-center btntax"> 
                <a href=""> <button type="button" class="btn-primary btn-lg taxd">Tax Details</button></a>
                </div>
                <div class="text-left btntax"> 
                <a href="taxcollection"><button type="button" class="btn-primary btn-lg taxcd">Tax Collection</button></a>
                <button style=" visibility: hidden;" type="button" class="btn-primary btn-lg taxcd"></button>
                <a href="demand"> <button type="button" class="btn-primary btn-lg taxcd">Tax Demand</button></a>
                </div>           
                <div class="text-center btntax "> 
                <a href="viewreport"><button type="button" class="btn-primary btn-lg taxd">View Report</button></a>
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>