<?php require_once('assets/components/header.php') ?>
<link rel="stylesheet" href="assets/css/index.css">


    <div id="indexContainer">
        <h1>Quentin De Andrade <br><span id="typed"></span></h1>
        <div class="buttonContainer">
            <div class="box-1">
                <a href="work.php" class="btn btn-one">
                    <span><?php echo (langEN()) ? "My Work" : "Voir mes travaux"; ?></span>
                </a>
            </div>

            <div class="box-1">
                <a href="contact.php" class="btn btn-one">
                    <span><?php echo (langEN()) ? "Contact Me" : "Me Contacter"; ?></span>
                </a>
            </div>
            
            <div class="box-1">
                <a href="#" class="btn btn-one">
                    <span><?php echo (langEN()) ? "Download My Resume" : "Télécharger mon CV"; ?></span>
                </a>
            </div>
            
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="assets/js/typed.js"></script>
<?php require_once('assets/components/footer.php') ?>