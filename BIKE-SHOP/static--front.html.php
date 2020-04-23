    <main id="content" role="main" class="main commerce-landing">
        <section class="commerce-hero-content-wrapper center overflow-hidden">
            <amp-img  layout="responsive" title="<?php echo $p->title; ?>" alt="<?php echo $p->title; ?>" class="mb3" src="https://blog.websitekita.web.id/content/header/header_websitekita.jpg" srcset="https://blog.websitekita.web.id/content/header/header_websitekita.jpg 500‬w,https://blog.websitekita.web.id/content/header/header_websitekita.jpg 1219w" width="1219" height="640" noloading=""></amp-img>
              <div class="commerce-hero-content commerce-hero-content-theme-secondary flex justify-center flex-column md-mx-auto md-p0">
                <div class="commerce-hero-align md-mx-auto">
                  <h3 class="commerce-hero-content-title h3 md-h1 md-mb2 md-pl4">website<span class="kotak">K</span>it<span class="it">a</span></h3>
                  <p class="commerce-hero-content-body">Layanan Jasa Pembuatan Website, Toko Online, dan Software Retail Sesuai Kebutuhan Anda.<br><small>Konsultasikan Project Anda kepada Kami GRATIS!! Kami Akan Berikan Solusi & Project Istimewa</small></p>
                    <div class="ampstart-btn ampstart-btn-secondary caps md-ml4 h1"><a href="<?php echo site_url();?>"><i class="fa fa-whatsapp"></i> Hubungi Kami</a></div>
                </div>
              </div>
        </section>
        <section class="list-reset flex flex-wrap my0 md-pl4 md-pr4 md-mxn4">
            <?php $htmly= get_category('htmly', 1, 4);?>
                <?php foreach($htmly as $h):?>
                // the div etc. goes here.
                <div class="content">
                    <div class="title"><?php echo $h->title; ?></div>
                    //etc....
                </div>
                <?php endforeach;?>
        </section>
        <section class="list-reset flex flex-wrap my0 md-pl4 md-pr4 md-mxn4">
            <div role="tabpanel" class="tab-pane active" id="recent-posts">
                <h2 class="hide">Recent Posts</h2>
                <?php $lists = recent_posts(true);?>
                <?php $char = 60;?>
                <?php foreach ($lists as $l):?>
                    <?php if (strlen(strip_tags($l->title)) > $char) { $recentTitle = shorten($l->title, $char) . '...';} else {$recentTitle = $l->title;}?>
                    <div class="item">
                        <h3 class="title"><a href="<?php echo $l->url;?>"><?php echo $recentTitle;?></a></h3>
                        <div class="content">
                        <p><?php echo shorten($l->body, 75); ?>...</p>
                        <a class="more-link" href="<?php echo $l->url;?>"><i class="fa fa-link"></i> Read more</a>
                        </div><!--//content-->
                    </div>
                <?php endforeach;?>
            </div>
        </section>
        <section class="list-reset flex flex-wrap my0 md-pl4 md-pr4 md-mxn4"><h2 class="widget-title">Popular Tags</h2>
            <?php $i = 1; $tags = tag_cloud(true); arsort($tags); ?>
            <ul>
            <?php foreach ($tags as $tag => $count):?>
                <li><a class="more-link" href="<?php echo site_url();?>tag/<?php echo $tag;?>"><?php echo tag_i18n($tag);?> (<?php echo $count;?>)</a></li>
            <?php if ($i++ >= 5) break;?>
            <?php endforeach;?>
            </ul>
        </section >
        
    </main>