<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank"; ?>
<?php require 'head.php'; ?>
<body>
    <?php require 'header.php'; ?>

    <div class="container cont">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-xs-6 mb-5" style="width: 60%">
                
            </div>

            <div class="col-lg-9">
            <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">A+</div>
                    <div class="card-body">
						<ul>
							<li>You can give blood to A+ and AB+.</li> 
							<li>You can receive blood from A+, A-, O+ and O-</li>
						</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">A-</div>
                    <div class="card-body">
					<ul>
                        <li>You can give blood to A-, A+, AB- and AB+.</li> 
						<li>You can receive blood from A- and O-.</li>
					</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">B+</div>
                    <div class="card-body">
						<ul>
							<li>You can give blood to B+ and AB+.</li> 
							<li>You can receive blood from B+, B-, O+ and O-.</li>
						 </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">B-</div>
                    <div class="card-body">
						<ul>
							<li>You can give blood to B-, B+, AB+ and AB-.</li>
							<li>You can receive blood from B- and O-.</li>
						</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">AB+</div>
                    <div class="card-body">
					<ul>
                         <li>People with AB+ can donate only to AB+ blood type.</li> 
						 <li>AB+ are <b>universal red cell recipients</b> because they can receive red cells from all types.</li>
					</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">AB-</div>
                    <div class="card-body">
						<ul>
							<li>You can give blood to both AB- and AB+ blood types.</li>
							<li>Donors with AB+ and AB- blood are <b>universal plasma donors</b>. They can donate blood to all negative blood types.</li>
						</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">O+</div>
                    <div class="card-body">
					<ul>
                        <li>You can donate to A+, B+, AB+ and O+ Blood types.</li>
                        <li>You can receive blood from O+ and O-.</li>
					</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">O-</div>
                    <div class="card-body">
					<ul>
                        <li>Donors with type O- blood are <b>universal red cell donors</b> whose donations can be given to people of all blood types</li>
                        <li>People with O- blood can only receive red cell donations from O- donors.</li>
					</ul>
                    </div>
                </div>
            </div>
           
            </div>

        </div>

        

    <?php require 'footer.php'; ?>

</body>
</html>