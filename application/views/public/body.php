<div class="container py-3">
    <div class="row">
        <?php foreach ($ads as $adsKey => $adsValue) { ?>
            <div class="col-sm-6">
                <a href="<?php echo $adsValue['link'] ?>" target="_blank"><img src="<?php echo base_url('uploads/' . $adsValue['img']) ?>" class="img-thumbnail" alt="Ads"></a>
            </div>
        <?php } ?>
    </div>
</div>


<div class="container mt-5">
    <?php echo $content['content'] ?>
</div>
<div class="container py-5 rounded" style="background: linear-gradient(90deg, rgba(5,60,78,1) 0%, rgba(8,0,36,1) 50%, rgba(5,60,78,1) 100%);">
    <div class="row">
        <div class="col-sm-12 text-center" style="color: #6f0000;font-weight: 1000;font-size: 50px;">GACOR+</div>
        <div class="col-sm-12 text-center">
            <h2 class="py-3">SITUS JUDI POKER SLOT ONLINE PLAY PILIHAN TERBAIK</h2>
        </div>
        <div class="col-sm-12">
            <div class="row">
                <?php foreach ($situs as $situsKey => $situsValue) { ?>
                    <?php if ($situsValue['populerstatus'] == '1') { ?>
                        <div class="col-sm-3">
                            <div class="row">
                                <div class="col-sm-12"><img src="<?php echo base_url('uploads/' . $situsValue['populerimg']) ?>" class="rounded mx-auto d-block" alt="IMG" style="max-width: 300px;"></div>
                                <div class="col-sm-12 text-center py-3"><b>⭐<?php echo $situsValue['name'] ?>⭐</b></div>
                                <div class="col-sm-12 text-center"><a href="<?php echo base_url('Alternatif/' . $situsValue['name']) ?>" class="btn text-center text-dark blink" style="background-color: yellow;">Login & Daftar</a></div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>

        </div>
    </div>
</div>
<div class="py-3"></div>
<div class="container py-5" style="background: linear-gradient(90deg, rgba(8,0,36,1) 0%, rgba(5,60,78,1) 50%, rgba(8,0,36,1) 100%);">
    <div class="col-sm-12 text-center py-5">
        <h1 style="font-family: sans-serif;">KUMPULAN SITUS GACOR+ ONLINE TERPERCAYA</h1>
    </div>
    <div class="row">
        <?php foreach ($situs as $situsKey => $situsValue) { ?>
            <?php $blink = '';
            if ($situsValue['populerstatus'] == '1')  $blink = 'blink' ?>
            <div class="col-sm-2 py-3"><a href="<?php echo base_url('Alternatif/' . $situsValue['name']) ?>" class="btn btn-block text-center text-dark <?php echo $blink ?>" style="background-color: yellow;">⭐<?php echo $situsValue['name'] ?>⭐</a></div>
        <?php } ?>
    </div>

</div>
<div class="py-3"></div>
<div class="container py-5 rounded" style="background: linear-gradient(90deg, rgba(5,60,78,1) 0%, rgba(8,0,36,1) 50%, rgba(5,60,78,1) 100%);">
    <div class="col-sm-12 text-center py-5">
        <h1 style="font-family: sans-serif;" id="privacy">KEBIJAKAN DAN PRIVASI</h1>
    </div>
    <div class="col-sm-12 container"><?php echo $content['privacy'] ?></div>
    <div class="col-sm-12 text-center py-5">
        <h1 style="font-family: sans-serif;" id="about">TENTANG KAMI</h1>
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
<div class="footer row">
    <div class="col-sm-12 my-2">Power By Gacor+</div>
</div>