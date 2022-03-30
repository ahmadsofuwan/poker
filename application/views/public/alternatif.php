<div class="container py-5 my-5">
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-4 py-2"><a href="<?php echo base_url() ?>"><img src="<?php echo base_url('uploads/' . $situs['logoimg']) ?>" class="img-fluid" alt="Logo"></a></div>
                <div class="col-sm-4 py-2"><a href="<?php echo $situs['loginlink'] ?>" class="btn btn-block text-white" style="background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);">Login</a></div>
                <div class="col-sm-4 py-2"><a href="<?php echo $situs['registerlink'] ?>" class="btn btn-block text-white" style="background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);text-decoration: blink">Daftar</a></div>
            </div>
            <div class="row py-2">
                <div class="col-sm-12 border border-warning text-center rounded"><b>SELAMAT DATANG DI LINK ALTERNATIF <?php echo strtoupper($situs['name']) ?></b></div>
                <div class="col-sm-4 py-3">
                    <div class="row">
                        <div class="mt-3 col-sm-12 border border-warning rounded text-white" style="font-size: 30px;"><a href="<?php echo $situs['registerlink'] ?>"><img src="<?php echo base_url('uploads/' . $situs['registerimg']) ?>" class="img-fluid" alt="Logo" style="max-width: 70px;"> Daftar</a></div>
                        <div class="mt-3 col-sm-12 border border-warning rounded text-white" style="font-size: 30px;"><a href="<?php echo $situs['bonuslink'] ?>"><img src="<?php echo base_url('uploads/' . $situs['bonusimg']) ?>" class="img-fluid" alt="Logo" style="max-width: 70px;"> Bonus</a></div>
                        <div class="mt-3 col-sm-12 border border-warning rounded text-white" style="font-size: 30px;"><a href="<?php echo $situs['promolink'] ?>"><img src="<?php echo base_url('uploads/' . $situs['promoimg']) ?>" class="img-fluid" alt="Logo" style="max-width: 70px;"> Promosi</a></div>
                    </div>
                </div>
                <div class="col-sm-4 py-4"><img src="<?php echo base_url('uploads/' . $situs['bannerimg']) ?>" class="img-fluid w-100" alt="Logo"></div>
                <div class="col-sm-4 mt-4 border border-warning">
                    <div class="row mr-2 ml-2">
                        <div class="col-sm-12 border-success border-bottom mt-1">Nama:<?php echo $situs['name'] ?></div>
                        <div class="col-sm-12 border-success border-bottom mt-1">Negara:<?php echo $situs['country'] ?></div>
                        <div class="col-sm-12 border-success border-bottom mt-1">Minimal Deposit:<?php echo $situs['deposit'] ?></div>
                        <div class="col-sm-12 border-success border-bottom mt-1">Deposit Via:<?php echo $situs['viadeposit'] ?></div>
                        <div class="col-sm-12 border-success border-bottom mt-1">Platform:<?php echo $situs['platform'] ?></div>
                        <div class="col-sm-12 border-success border-bottom mt-1">Url:<?php echo base_url('Alternatif/' . $situs['name']) ?></div>
                    </div>
                </div>
                <div class="col-sm-12 mt-5">
                    <div class="container border border-danger rounded">
                        <?php echo $situs['content'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
<div class="container">
    <div class="row">
        <?php foreach ($ads as $adsKey => $adsValue) { ?>
            <div class="col-sm-6">
                <a href="<?php echo $adsValue['link'] ?>" target="_blank"><img src="<?php echo base_url('uploads/' . $adsValue['img']) ?>" class="img-thumbnail" alt="Ads"></a>
            </div>
        <?php } ?>
    </div>
</div>
<div class="my-5"></div>

<div class="footer row">
    <div class="col-sm-12 my-2">Powe By <?php echo $situs['name'] ?></div>
</div>