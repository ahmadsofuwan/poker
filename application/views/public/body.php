<div class="container py-3">
    <div class="row">
        <?php foreach ($ads as $adsKey => $adsValue) { ?>
            <div class="col-sm-6 py-1">
                <a href="<?php echo $adsValue['link'] ?>" target="_blank"><img src="<?php echo base_url('uploads/' . $adsValue['img']) ?>" class="" alt="Ads" style="width: 100%;border-radius: 10px;border-style: solid;border-color:yellow"></a>
            </div>
        <?php } ?>
    </div>
</div>




<div class="container py-5 rounded" style="background: linear-gradient(90deg, rgba(5,60,78,1) 0%, rgba(8,0,36,1) 50%, rgba(5,60,78,1) 100%);">
    <div class="row">
        <div class="col-sm-12 text-center" style="color: red;font-weight: 1000;font-size: 50px;">SLOT GACOR</div>
        <div class="col-sm-12 text-center">
            <h2 class="py-3"><b>KUMPULAN SITUS PILIHAN TERPERCAYA DAN TERBAIK DARI KAMI</b> </h2>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <?php
                $mod = fmod(count($situsPopuler), 3);
                $col = '';
                echo is_infinite($mod);
                if ($mod > 0)
                    $col = 12 / $mod;
                ?>


                <?php for ($i = 0; $i < count($situsPopuler); $i++) { ?>
                    <?php
                    $colSm = 4;
                    if (!is_infinite($mod)) {
                        if ($i >= count($situsPopuler) - $mod)
                            $colSm = $col;
                    }
                    ?>

                    <div class="col-sm-<?php echo  $colSm ?> py-5">
                        <div class="row">
                            <div class="col-sm-12"> <a href="<?php echo base_url('Alt/' . $situsPopuler[$i]['name']) ?>"><img src="<?php echo base_url('uploads/' . $situsPopuler[$i]['populerimg']) ?>" class="rounded mx-auto d-block" alt="IMG" style="max-width: 300px;"></a></div>
                            <div class="col-sm-12 text-center py-3">⭐<?php echo $situsPopuler[$i]['name'] ?>⭐</b></div>
                            <div class="col-sm-12 text-center"><a href="<?php echo base_url('Alt/' . $situsPopuler[$i]['name']) ?>" class="btn text-center text-dark blink" style="background-color: yellow;font-weight: 900">Login & Daftar</a></div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
</div>
<div class="py-3"></div>
<div class="container py-5" style="background: linear-gradient(90deg, rgba(8,0,36,1) 0%, rgba(5,60,78,1) 50%, rgba(8,0,36,1) 100%);">
    <div class="col-sm-12 text-center py-5">
        <h1 style="font-family: sans-serif;"><b>KUMPULAN SLOT GACOR ONLINE TERPERCAYA</b></h1>
    </div>
    <div class="row">
        <?php
        $mod = fmod(count($situsPopuler), 3);
        $col = '';
        echo is_infinite($mod);
        if ($mod > 0)
            $col = 12 / $mod;
        ?>

        <?php for ($i = 0; $i < count($situs); $i++) { ?>
            <?php $blink = '';
            if ($situs[$i]['populerstatus'] == '1')  $blink = 'blink'; ?>

            <div class="col-sm-3 py-3"><a href="<?php echo base_url('Alt/' . $situs[$i]['name']) ?>" class="btn btn-block text-center text-dark <?php echo $blink ?>" style="background-color: yellow;font-weight: 900">⭐<?php echo $situs[$i]['name'] ?>⭐</a></div>
        <?php } ?>
    </div>

</div>
<div class="container mt-5">
    <?php echo $content['content'] ?>
</div>
<div class="py-3"></div>
<div class="container py-5 rounded" style="background: linear-gradient(90deg, rgba(5,60,78,1) 0%, rgba(8,0,36,1) 50%, rgba(5,60,78,1) 100%);">
    <div class="col-sm-12 text-center py-5">
        <h1 style="font-family: Fantasy;" id="privacy" class="text-warning">KEBIJAKAN DAN PRIVASI</h1>
    </div>
    <div class="col-sm-12 container"><?php echo $content['privacy'] ?></div>
    <div class="col-sm-12 text-center py-5">
        <h1 style="font-family: Fantasy;" id="about" class="text-warning">TENTANG KAMI</h1>
    </div>
    <div class="col-sm-12 container"><?php echo $content['about'] ?></div>
</div>
<div class="py-5"></div>

<style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background: linear-gradient(90deg, rgba(68, 2, 28, 1) 0%, rgba(36, 0, 3, 1) 0%, rgba(5, 17, 78, 1) 100%);
        color: white;
        text-align: center;
    }
</style>
<div class="row" style="position: fixed;bottom: 50px;margin-left: 10%;margin-right: 10%;" id="sticky-ad">
    <button class="text-light close-ads" aria-label="Close this ad" style="position: absolute; width: 28px; height: 28px; top: -28px; right: 0; border: none; border-radius: 12px 0 0 0;background: none;">X</button>
    <?php for ($i = 0; $i <= 3; $i++) { ?>
        <?php if (!empty($ads[$i])) { ?>
            <div class="col-sm-6 py-1">
                <a href="<?php echo $ads[$i]['link'] ?>" target="_blank"><img src="<?php echo base_url('uploads/' . $ads[$i]['img']) ?>" class="" alt="Ads" style="width: 100%;border-radius: 10px;border-style: solid;border-color:yellow"></a>
            </div>
        <?php } ?>
    <?php } ?>
</div>
<div class="footer row">
    <div class="col-sm-12 my-2">Power By Slot Gacor</div>
</div>
<script>
    $('.close-ads').click(function() {
        $('#sticky-ad').remove();
    })
</script>