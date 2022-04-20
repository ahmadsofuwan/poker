<div class="container py-5 my-5">
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-4 py-2"><a href="<?php echo base_url('Alt/' . $situs['name']) ?>"><img src="<?php echo base_url('uploads/' . $situs['logoimg']) ?>" class="img-fluid" alt="Logo"></a></div>
                <div class="col-sm-4 py-2"><a href="<?php echo $situs['loginlink'] ?>" class="btn btn-block text-white blink " style="background: radial-gradient(circle, rgba(63,94,251,1) 0%, rgba(252,70,107,1) 100%);font-weight: 900" target="_blank">Login</a></div>
                <div class="col-sm-4 py-2"><a href="<?php echo $situs['registerlink'] ?>" class="btn btn-block text-white blink" style="background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);text-decoration: blink;font-weight: 900" target="_blank">Daftar</a></div>
            </div>
            <div class="row py-2">
                <div class="col-sm-12 border border-warning text-center rounded"><b>SELAMAT DATANG DI LINK ALTERNATIF <?php echo strtoupper($situs['name']) ?></b></div>
                <div class="col-sm-4 py-3">
                    <div class="row">
                        <div class="mt-3 col-sm-12 border border-warning rounded text-white" style="font-size: 30px;"><a href="<?php echo $situs['registerlink'] ?>" target="_blank"><img src="<?php echo base_url('uploads/' . $situs['registerimg']) ?>" class="img-fluid mr-3" alt="Logo" style="max-width: 70px;"> Daftar</a></div>
                        <div class="mt-3 col-sm-12 border border-warning rounded text-white" style="font-size: 30px;"><a href="<?php echo $situs['bonuslink'] ?>" target="_blank"><img src="<?php echo base_url('uploads/' . $situs['bonusimg']) ?>" class="img-fluid mr-3" alt="Logo" style="max-width: 70px;"> Bonus</a></div>
                        <div class="mt-3 col-sm-12 border border-warning rounded text-white" style="font-size: 30px;"><a href="<?php echo $situs['promolink'] ?>" target="_blank"><img src="<?php echo base_url('uploads/' . $situs['promoimg']) ?>" class="img-fluid mr-3" alt="Logo" style="max-width: 70px;"> Promosi</a></div>
                    </div>
                </div>
                <div class="col-sm-4 py-4"><img src="<?php echo base_url('uploads/' . $situs['bannerimg']) ?>" class="img-fluid w-100" alt="Logo"></div>
                <div class="col-sm-4 mt-4 border border-warning">
                    <div class="row mr-2 ml-2">
                        <div class="col-sm-12 border-success border-bottom mt-1">
                            <table>
                                <tr>
                                    <td>Nama</td>
                                    <td style="width: 10px;">:</td>
                                    <td><?php echo $situs['name'] ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-12 border-success border-bottom mt-1">
                            <table>
                                <tr>
                                    <td>Negara</td>
                                    <td style="width: 10px;">:</td>
                                    <td><?php echo $situs['country'] ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-12 border-success border-bottom mt-1">
                            <table>
                                <tr>
                                    <td>Minimal Deposit</td>
                                    <td style="width: 10px;">:</td>
                                    <td><?php echo number_format($situs['deposit']) ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-12 border-success border-bottom mt-1">
                            <table>
                                <tr>
                                    <td>Deposit Via</td>
                                    <td style="width: 10px;">:</td>
                                    <td><?php echo $situs['viadeposit'] ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-12 border-success border-bottom mt-1">
                            <table>
                                <tr>
                                    <td>Platform</td>
                                    <td style="width: 10px;">:</td>
                                    <td><?php echo $situs['platform'] ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-12 border-success border-bottom mt-1">
                            <table>
                                <tr>
                                    <td>Url</td>
                                    <td style="width: 10px;">:</td>
                                    <td><?php echo base_url('Alt/' . $situs['name']) ?></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-sm-12 border-success border-bottom mt-1">
                            <table>
                                <tr>
                                    <td>RTP</td>
                                    <td style="width: 10px;">:</td>
                                    <td><?php echo $situs['rtp'] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 mt-4">
                    <a href="<?php echo base_url() ?>"><button class="btn btn-block" style="height: 50px;font-weight: 900;background-color: yellow;color: black;"><i class="fas fa-home"></i> Home</button></a>
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
            <div class="col-sm-6 py-1">
                <a href="<?php echo $adsValue['link'] ?>" target="_blank"><img src="<?php echo base_url('uploads/' . $adsValue['img']) ?>" alt="Ads" style="width: 100%;border-radius: 10px;border-style: solid;border-color:yellow"></a>
            </div>
        <?php } ?>
    </div>
</div>
<div class="my-5"></div>

<div class="footer row">
    <div class="col-sm-12 my-2"><a href="<?php echo base_url() ?>" class="text-light">Power By Slot Gacor</a></div>
</div>