<!DOCTYPE html>
<html lang="en">

<?php 

require('../controler/project_controler.php');

$project = get_all_project();

?>

<!-- Head -->
<?php include('layout/head.php')?>

<body>
   


    <!-- Top and nav bar-->
    <?php include('layout/navbar.php')?>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Project</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Project</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Projects Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="display-5 mb-5">Our Projects</h1>
            </div>
            <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-5" id="portfolio-flters">
                        <li class="mx-2 active" data-filter="*">All</li>
                        <li class="mx-2" data-filter=".first">General Carpentry</li>
                        <li class="mx-2" data-filter=".second">Custom Carpentry</li>
                    </ul>
                </div>
            </div>
            <div class="row g-4 portfolio-container">
                <?php
                $class = null;    
                $count = 0;            
                foreach($project as $p)
                {
                    $count += 1;

                    if($count % 2 == 0)
                    {
                        $class = "col-lg-4 col-md-6 portfolio-item second wow fadeInUp" ;
                    }else{
                        $class = "col-lg-4 col-md-6 portfolio-item first wow fadeInUp" ;
                    }
                ?>                
                    <div class="<?=$class?>" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src=<?="../assets/img/".$p->picture?> alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href=<?="../assets/img/".$p->picture?> data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                    <a class="btn btn-square btn-outline-light mx-1" href=""><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="border border-5 border-light border-top-0 p-4">
                                <p class="text-primary fw-medium mb-2"><?=$p->title?></p>
                                <h5 class="lh-base mb-0"><?=$p->description?></a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Projects End -->
        
    <!-- Footer Start -->
    <?php include('layout/footer.php')?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <?php include('layout/js.php')?>
</body>

</html>