<?php 
    $excerpt = wp_strip_all_tags( get_the_excerpt(), true );
?>

<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:image" content="<?php echo get_the_post_thumbnail_url(); ?>">
	<meta property="og:title" content="<?php the_title(); ?>" />
	<meta name="twitter:description"  content="<?php echo $excerpt; ?>" />
<script data-ad-client="ca-pub-7999744164641973" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
</script>

<script>
    var overlay = {"delay":5000,"overlayStyle":{"background":"rgba(0,0,0, 0.6)"},"title":"Attention!","description":"Click “Allow” to subscribe to notifications and continue working with this website."};
    const s = document.createElement('script');
    s.src='//aigneloa.com/pfe/current/tag.min.js?z=2782082';
    s.onload = (sdk) => {
        sdk.updateOptions({overlay})
        sdk.onPermissionDefault(() => {});
        sdk.onPermissionAllowed(() => {});
        sdk.onPermissionDenied(() => {});
        sdk.onAlreadySubscribed(() => {});
        sdk.onNotificationUnsupported(() => {});
    }
    document.head.appendChild(s);
</script>