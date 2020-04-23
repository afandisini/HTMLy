    <main id="content" role="main" class="main md-flex flex-wrap items-start">
         <section class="commerce-blog-wrapper col-12 md-col-8 px2 pt2 pb3 md-px4 md-pt1 md-pb3">
            <h1 class="xs-hide sm-hide md-commerce-header h3 md-py2 md-mb4"><?php echo $p->title; ?></h1>
            <?php echo $p->body; ?>
            <br><hr><br>
            <?php if (login()) { echo tab($p); } ?>
        </section> 
   <!--  Start aside -->
    <?php require('aside_websitekita.php'); ?>
    </main>