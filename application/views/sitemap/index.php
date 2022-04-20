<?php
header('Content-type: application/xml; charset="ISO-8859-1"', true);
?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= base_url() ?></loc>
        <lastmod><?= date('d-m-Y H:i:s') ?></lastmod>
        <changefreq>daily</changefreq>
        <priority>0.1</priority>
    </url>
    <?php foreach ($situs as $situsKey => $situsValue) { ?>
        <url>
            <loc><?php echo  base_url('Alt/' . $situsValue['name']) ?></loc>
            <lastmod><?php echo  date("d-m-Y H:i:s", $situsValue['time']) ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.1</priority>
        </url>
    <?php } ?>
</urlset>