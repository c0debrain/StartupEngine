<section class="{{ $section->getStyle() }}" id="section-{{ $count }}">

    <!-- Overlay/Opacity: [class*="bg-"] > .background.dark or .light -->
    <span id="particles-js" class="background dark" style="<?php if($page->getFeaturedImage() !== null) { ?>background-image:url('<?php echo $page->getFeaturedImage()->getFile()->getUrl();  ?>');<?php } ?>"></span>
    <!--.wrap = container width: 90% -->
    <div class="wrap zoomIn" align="center" style="pointer-events:none !important;padding:75px 10%;min-width:300px;">
        <h1 style="margin-bottom:15px;">
            <strong><?php echo $section->getTitle(); ?></strong>
        </h1>
        <?php if($section->getSubtitle() !== NULL && $section->getSubtitle() !== '') { ?><div class="text-subtitle"><?php echo @markdown($section->getSubtitle()) ?></div><?php } ?>
        <p>
            <?php $headerCTA = $section->getButtonText(); if($headerCTA == NULL) { $headerCTA = 'Read Article'; } ?>
            <a href="#section-{{ $count + 1 }}" style="pointer-events:all !important;" class="button radius <?php if(\Request::capture()->getRequestUri() == '/') { echo "ghost"; } ?>  ga-track" data-ga-category="{{ $analyticsCategory }}" data-ga-action="button" data-ga-label="<?php if($page->getCampaign() !== null) { echo $page->getCampaign()->getSlug(); } else { echo $headerCTA;  } ?>" data-ga-text="{{ $headerCTA }}" title="{{ $headerCTA }}">
                {{ $headerCTA }}
            </a>
        </p>
    </div>
    <!-- .end .wrap -->
</section>