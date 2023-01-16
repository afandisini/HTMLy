<div class="map-title mbr-col-sm-12 mbr-col-md-8 mbr-col-lg-8 align-rigth"></div>
<div class="card mbr-col-sm-12 mbr-col-md-12 mbr-col-lg-12">
    <div class="card-header">
        <div class="card-box">
            <a class="text-black" href="<?= $p->url;?>"><h4 class="card-title mbr-fonts-style align-left mbr-light display-5"><?php echo $name ?></h4></a>
            <p class="mbr-text mbr-fonts-style align-left display-4">
            <?php echo $about; ?> 
                    <h2 class="post-index">Posts by this author</h2>
                    <?php if (!empty($posts)) { ?>
                        <ul class="post-list">
                            <?php $i = 0; $len = count($posts); ?>
                            <?php foreach ($posts as $p): ?>
                                <?php if ($i == 0) {
                                    $class = 'item first';
                                } elseif ($i == $len - 1) {
                                    $class = 'item last';
                                } else {
                                    $class = 'item';
                                }
                                $i++; ?>
                                <li class="<?php echo $class; ?>">
                                    <span><a href="<?php echo $p->url ?>"><?php echo $p->title ?></a></span> on
                                    <span><?php echo date('d F Y', $p->date) ?></span> - Posted in <span><?php echo $p->tag ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php } else {
                        echo 'No posts found!';
                    } ?>     
            </p>
            <?php if (!empty($posts)) { ?>
            <?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
            <div class="loop-pagination-container">
                <nav class="pagination loop-pagination">
                    <?php echo $pagination['html'];?>
                </nav>
            </div>
            <?php endif; ?>
            <?php } ?>
        </div>
    </div>
</div>