    <main id="content" role="main" class="main md-flex flex-wrap items-start">
        <section class="commerce-blog-wrapper col-12 md-col-8 px2 pt2 pb3 md-px4 md-pt1 md-pb3">
            <h3 class="xs-hide sm-hide md-commerce-header h3 md-py2 md-mb4"><?php echo config('site.name'); ?></h3>
            <?php foreach ($posts as $p): ?>
            <article>
                <?php if (!empty($p->image)):?>
                    <div class="parallax-image-window imageHolder">
                        <amp-img amp-fx="fly-in-top"
                              data-repeat
                              width="1280"
                              height="720"
                              layout="responsive"
                              src="<?php echo $p->image; ?>"
                              alt="<?php echo $p->title; ?>" title="<?php echo $p->title; ?>"></amp-img>
                        <!-- <amp-img alt="<?php echo $p->title; ?>" src="<?php echo $p->image; ?>" width="300" height="169" layout="responsive" title="<?php echo $p->title; ?>" noloading=""/></amp-img> -->
                        <div class="caption">
                            <div class="m1 p1">
                                <h2><?php echo $p->title; ?></h2>
                                <time datetime="<?php echo date('F, Y', $p->date) ?>">
                                    <ul class="list-reset flex flex-wrap left">
                                        <li><i class="fa fa-calendar"></i> <?php echo date('F, Y', $p->date) ?></li>
                                        <li><i class="fa fa-at"></i> <?php echo config('penulis');?></li>
                                        <li><i class="fa fa-hashtag"></i> <?php echo $p->category; ?>, <?php echo $p->tag; ?></li>
                                    </ul>
                                </time>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
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
                        <p class="mb2">
                            <?php echo get_teaser($p->body, $p->url); ?>
                            <?php if (config('teaser.type') === 'trimmed'):?>
                        </p>
                            <a href="<?php echo $p->url;?>" class="ampstart-btn ampstart-btn-secondary commerce-blog-link inline-block h7 md-mb4">Baca <i class="fa fa-arrow-right"></i></a>
            </article>
            <br>
            <hr class="shd mb3">
            <br>
                        <?php endif;?>
                <div class="excerpt-comments">
                    <?php if (disqus_count()) { ?> 
                        <p><span><i class="fa fa-comments"></i> <a href="<?php echo $p->url ?>#disqus_thread"> comments</a></span></p>
                    <?php } elseif (facebook()) { ?> 
                        <p><i class="fa fa-comments"></i> <a href="<?php echo $p->url ?>#comments"><span><fb:comments-count href=<?php echo $p->url ?>></fb:comments-count> comments</span></a></p>
                    <?php } ?>
                </div>
            
            <?php endforeach; ?>
            <?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
            <div class="loop-pagination-container">
                <nav class="pagination loop-pagination">
                    <?php echo $pagination['html'];?>
                </nav>
            </div>
            <?php endif; ?>
            <?php if (disqus_count()): ?>
                <?php echo disqus_count() ?>
            <?php endif; ?>
        </section> 
    <!-- Start aside -->
        <aside class="commerce-blog-sidebar commerce-side-panel xs-hide sm-hide md-col-4 md-px4 md-pt6">
            <h3 class="h7 block pt3"><?php echo config('sosmed');?></h3>
        	<ul class="ampstart-social-follow list-reset flex justify-around items-center flex-wrap m0 mb4">
        		<li><a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Facebook"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="23.6" viewBox="0 0 56 55"><title>Facebook</title><path d="M47.5 43c0 1.2-.9 2.1-2.1 2.1h-10V30h5.1l.8-5.9h-5.9v-3.7c0-1.7.5-2.9 3-2.9h3.1v-5.3c-.6 0-2.4-.2-4.6-.2-4.5 0-7.5 2.7-7.5 7.8v4.3h-5.1V30h5.1v15.1H10.7c-1.2 0-2.2-.9-2.2-2.1V8.3c0-1.2 1-2.2 2.2-2.2h34.7c1.2 0 2.1 1 2.1 2.2V43" class="ampstart-icon ampstart-icon-fb"></path></svg></a></li>
        		<li><a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Instagram"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 54 54"><title>instagram</title><path d="M27.2 6.1c-5.1 0-5.8 0-7.8.1s-3.4.4-4.6.9c-1.2.5-2.3 1.1-3.3 2.2-1.1 1-1.7 2.1-2.2 3.3-.5 1.2-.8 2.6-.9 4.6-.1 2-.1 2.7-.1 7.8s0 5.8.1 7.8.4 3.4.9 4.6c.5 1.2 1.1 2.3 2.2 3.3 1 1.1 2.1 1.7 3.3 2.2 1.2.5 2.6.8 4.6.9 2 .1 2.7.1 7.8.1s5.8 0 7.8-.1 3.4-.4 4.6-.9c1.2-.5 2.3-1.1 3.3-2.2 1.1-1 1.7-2.1 2.2-3.3.5-1.2.8-2.6.9-4.6.1-2 .1-2.7.1-7.8s0-5.8-.1-7.8-.4-3.4-.9-4.6c-.5-1.2-1.1-2.3-2.2-3.3-1-1.1-2.1-1.7-3.3-2.2-1.2-.5-2.6-.8-4.6-.9-2-.1-2.7-.1-7.8-.1zm0 3.4c5 0 5.6 0 7.6.1 1.9.1 2.9.4 3.5.7.9.3 1.6.7 2.2 1.4.7.6 1.1 1.3 1.4 2.2.3.6.6 1.6.7 3.5.1 2 .1 2.6.1 7.6s0 5.6-.1 7.6c-.1 1.9-.4 2.9-.7 3.5-.3.9-.7 1.6-1.4 2.2-.7.7-1.3 1.1-2.2 1.4-.6.3-1.7.6-3.5.7-2 .1-2.6.1-7.6.1-5.1 0-5.7 0-7.7-.1-1.8-.1-2.9-.4-3.5-.7-.9-.3-1.5-.7-2.2-1.4-.7-.7-1.1-1.3-1.4-2.2-.3-.6-.6-1.7-.7-3.5 0-2-.1-2.6-.1-7.6 0-5.1.1-5.7.1-7.7.1-1.8.4-2.8.7-3.5.3-.9.7-1.5 1.4-2.2.7-.6 1.3-1.1 2.2-1.4.6-.3 1.6-.6 3.5-.7h7.7zm0 5.8c-5.4 0-9.7 4.3-9.7 9.7 0 5.4 4.3 9.7 9.7 9.7 5.4 0 9.7-4.3 9.7-9.7 0-5.4-4.3-9.7-9.7-9.7zm0 16c-3.5 0-6.3-2.8-6.3-6.3s2.8-6.3 6.3-6.3 6.3 2.8 6.3 6.3-2.8 6.3-6.3 6.3zm12.4-16.4c0 1.3-1.1 2.3-2.3 2.3-1.3 0-2.3-1-2.3-2.3 0-1.2 1-2.3 2.3-2.3 1.2 0 2.3 1.1 2.3 2.3z" class="ampstart-icon ampstart-icon-instagram"></path></svg></a></li>
        		<li><a href="#" target="_blank" class="inline-block p1" aria-label="Link to AMP HTML Twitter"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="22.2" viewBox="0 0 53 49"><title>Twitter</title><path d="M45 6.9c-1.6 1-3.3 1.6-5.2 2-1.5-1.6-3.6-2.6-5.9-2.6-4.5 0-8.2 3.7-8.2 8.3 0 .6.1 1.3.2 1.9-6.8-.4-12.8-3.7-16.8-8.7C8.4 9 8 10.5 8 12c0 2.8 1.4 5.4 3.6 6.9-1.3-.1-2.6-.5-3.7-1.1v.1c0 4 2.8 7.4 6.6 8.1-.7.2-1.5.3-2.2.3-.5 0-1 0-1.5-.1 1 3.3 4 5.7 7.6 5.7-2.8 2.2-6.3 3.6-10.2 3.6-.6 0-1.3-.1-1.9-.1 3.6 2.3 7.9 3.7 12.5 3.7 15.1 0 23.3-12.6 23.3-23.6 0-.3 0-.7-.1-1 1.6-1.2 3-2.7 4.1-4.3-1.4.6-3 1.1-4.7 1.3 1.7-1 3-2.7 3.6-4.6" class="ampstart-icon ampstart-icon-twitter"></path></svg></a></li>
        	</ul>
            <h1 class="h5 ms-pb2"><?php echo config('rpost');?></h1>
            <?php echo recent_posts() ?>
            <span class="h5 ms-pb2 ">Iklan</span>
            <div class="md-pb2 resp-img py4">
                <amp-img placeholder="" width=300 height=300 layout="responsive" src="https://blog.websitekita.web.id/content/pasang-ikan-di-websitekita.webp" srcset="https://blog.websitekita.web.id/content/pasang-ikan-di-websitekita.jpg 150w,https://blog.websitekita.web.id/content/pasang-ikan-di-websitekita.jpg 300w" width="300" height="300"></amp-img>
            </div>
        </aside>
    </main>
