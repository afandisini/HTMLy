    <main id="content" role="main" class="main md-flex flex-wrap items-start">
        <section class="commerce-blog-wrapper col-12 md-col-8 px2 pt2 pb3 md-px4 md-pt1 md-pb3">
            <div>
                <ul class="list-reset flex jrk flex-wrap">
                    <li><a href="<?php echo site_url();?>" class="h6">Home</a> ›› </li>
                    <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><span itemprop="item" class="h6"><?php echo $p->category; ?></span><meta itemprop="position" content="1" /> ››</li>
                    <li><span class="caps" itemprop="item name"><?php echo $p->title; ?></span></li>
                </ul>
            </div>
            <article>
                <?php if (!empty($p->audio)):?>
                <div class="featured-image">
                    <iframe style="position:absolute;" width="100%" height="100%" class="embed-responsive-item" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $p->audio;?>&amp;auto_play=false&amp;visual=true"></iframe>
                </div>
                <?php endif; ?>
                <?php if (!empty($p->video)):?>
                <div class="featured-image">
                    <iframe style="position:absolute;" width="100%" height="100%" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $p->video; ?>" frameborder="0" allowfullscreen></iframe>
                </div>
                <?php endif; ?>
                <?php if (!empty($p->quote)):?>
                <div class="featured-quote">
                    <blockquote class="quote"><i class="fa fa-quote-left"></i> <?php echo $p->quote ?> <i class="fa fa-quote-right"></i></blockquote>
                </div>
                <?php endif; ?>
                <?php if (!empty($p->link)):?>
                <div class="featured-link">
                     <i class="fa fa-external-link"></i> <a target="_blank" href="<?php echo $p->link ?>"><?php echo $p->link ?></a> 
                </div>
                <?php endif; ?>
                    <div class="m2">
                        <amp-img src="https://lh3.googleusercontent.com/-I-3pQz0nVaE/AAAAAAAAAAI/AAAAAAAAAAA/AMZuucnnPygiJKLXQ8Fc4kCeS55_7m3gGA/photo.jpg?sz=40" class="circle left mr2" width="40" height="40" layout="flex-item" title="<?php echo $p->author;?>"></amp-img>
                        <time datetime="<?php echo date('F, Y', $p->date) ?>">
                            <ul class="fa-ul mr2">
                                <li><?php echo config('fullname');?></li>
                                <li><?php echo date('F, Y', $p->date) ?></li>
                            </ul>
                        </time>
                    </div>
                            <?php if (!empty($p->image)):?>
                            <div class="parallax-image-window">
                              <amp-img amp-fx="fly-in-bottom"
                                width="1280"
                                height="720"
                                layout="responsive"
                                src="<?php echo $p->image; ?>" title="<?php echo $p->title; ?>" alt="<?php echo $p->title; ?>"></amp-img>
                            </div>
                            <?php endif; ?>
                            
                            <h1 class="h3 mt2"><?php echo $p->title; ?></h1>
                            <?php echo $p->body; ?>
                            <div class="col-12 mt3 md-mt4">
                                <h3 class="h3 md-h4"><?php echo config('related'); ?></h3>
                                <amp-carousel height="170" layout="fixed-height" type="carousel" class="px4">
                                    <ul class="list-reset">
                                        <?php $related= get_related($p->related, true);?>
                                        <?php $char = 50;?>
                                        <?php foreach ($related as $r):?>
                                        <?php if (strlen(strip_tags($r->title)) > $char) { $relatedTitle = shorten($r->title, $char) . '...';} else {$relatedTitle = $r->title;}?>
                                        <li class="commerce-related-product inline-block mr2">
                                            <a href="<?php echo $r->url;?>" class="text-decoration-none">
                                                <amp-img class="mb2" src="<?php echo $r->image; ?>" width="1" height="1" layout="responsive" title="<?php echo $r->title; ?>" alt="<?php echo $r->title; ?>" noloading="">
                                                <div placeholder="" class="commerce-loader"></div></amp-img>
                                                <h2 class="commerce-related-product-name h6 mt1"><?php echo $relatedTitle;?></h2>
                                            </a> <!-- <p><?php echo shorten($r->body, 80); ?>...</p> -->
                                        </li>
                                        <?php endforeach;?>
                                    </ul>    
                                </amp-carousel>
                            </div>                           
                    <div class="col-12 self-start mb4 commerce-product-btn-wrapper mt3">
                      <button class="ampstart-btn ampstart-btn-secondary caps"><a href="<?php echo site_url();?>" class="ap-a-btn -oz"><i class="fa fa-arrow-left"></i> Kembali</a></button>
                    </div>
            </article>
                <div class="mr2 mt2"><?php if (login()) { echo tab($p); } ?></div>
                    
                    <div class="excerpt-comments">
                        <?php if (disqus_count()) { ?> 
                            <p><span><i class="fa fa-comments"></i> <a href="<?php echo $p->url ?>#disqus_thread"> comments</a></span></p>
                        <?php } elseif (facebook()) { ?> 
                            <p><i class="fa fa-comments"></i> <a href="<?php echo $p->url ?>#comments"><span><fb:comments-count href=<?php echo $p->url ?>></fb:comments-count> comments</span></a></p>
                        <?php } ?>
                    </div>
            
            <?php if (disqus()): ?>
                <?php echo disqus($p->title, $p->url) ?>
            <?php endif; ?>
            <?php if (disqus_count()): ?>
                <?php echo disqus_count() ?>
            <?php endif; ?>
            <?php if (facebook() || disqus()): ?>
            <section class="comments" id="comments">
                <div class="comments-number">
                    <h3>Comments</h3>
                </div>
                <?php if (facebook()): ?>
                    <div class="fb-comments" data-href="<?php echo $p->url ?>" data-numposts="<?php echo config('fb.num') ?>" data-colorscheme="<?php echo config('fb.color') ?>"></div>
                <?php endif; ?>
                <?php if (disqus()): ?>
                    <div id="disqus_thread"></div>
                <?php endif; ?>
            </section>
            <?php endif; ?>
        </section> 
    <!-- Start aside -->
    <?php require('aside_websitekita.php'); ?> 
    </main>