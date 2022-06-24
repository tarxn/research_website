<?php
    include("header.php");
?>

<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center"
    style="background-image: url('images/bannerimg.jpg');">
    <div class="content text-center">
        <h1 class="text-white">Publication</h1>
    </div>
</div>

<!-- Main Content Area -->

<div class="container my-5 d-grid gap-5">
    <!-- <div>
        <h3 style="color:blue">
        Journal Articles (SCI/Scopus/WoS Indexed)
        </h3>
    </div> -->
    <div class="p-5 border_card">
    <?php
        $connection=mysqli_connect("localhost","root","");
        $db=mysqli_select_db($connection,'personal_website');

        $query="SELECT * FROM `publication_e`";
        $query_run=mysqli_query($connection,$query);

        while($row=mysqli_fetch_array($query_run))
        {
    ?>
    <div >
    <p class="row">
        <h5><?php echo $row['authors']; ?></h5>
                <?php echo $row['abstract']; ?>
    </p>
    </div>
    <?php
        }
        ?>
    </div>

    
</div>



<?php 
        include("footer.php");
    ?>