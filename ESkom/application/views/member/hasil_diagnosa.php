<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
						<div style="background-color:white; padding:10px; width:130px;" class="logo">
							<img style="width:100px;" src="<?= base_url('assets2'); ?>/img/logoes.png" alt="Expert System Computer">
						</div>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav nav ml-auto">
          <li class="nav-item"><a href="<?= base_url('member/index'); ?>" class="nav-link"><span style="color:white;">Home</span></a></li>
          <li class="nav-item"><a href="#" class="nav-link"><span style="color:white;"><?= $user['nama_user']; ?></span></a></li>
          <li class="nav-item"><a href="<?= base_url('auth'); ?>" class="nav-link"><span style="color:white;">Logout</span></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <section style="background-color:#2146C7;" class="ftco-section ftco-no-pb goto-here" id="resume-section">
    <div class="container">
      <div class="row">
        <div class="col-lg">

          <div class="page three">
            <h2 style="color:white; font-weight:bold;">Hasil Diagnosa</h2>
            <div class="row progress-circle mb-5">

              <?php foreach ($diagnosa as $diag) : ?>
                <?php
                if ($diag['id_kerusakan'] == 1) {
                  $diag['id_kerusakan'] = 'Rusak Pada IC Power';
                } elseif ($diag['id_kerusakan'] == 2) {
                  $diag['id_kerusakan'] = 'Rusak Pada IC VGA';
                } elseif ($diag['id_kerusakan'] == 3) {
                  $diag['id_kerusakan'] = 'Rusak pada Inverter/gangguan pada fleksibel kabel';
                } elseif ($diag['id_kerusakan'] == 4) {
                  $diag['id_kerusakan'] = 'Rusak pada LCD';
                } elseif ($diag['id_kerusakan'] == 5) {
                  $diag['id_kerusakan'] = 'Rusak pada Keyboard';
                }
                ?>

                <div class="col-lg-4 mb-4">
                  <div >
                    <h2 class="h5 text-center mb-4"><?= $diag['id_kerusakan']; ?></h2>
                    <!-- Progress bar -->
                    <div class="progress mx-auto" data-value='<?= $diag['hasil_probabilitas'] * 100; ?>'>
                      <span class="progress-left">
                        <span class="progress-bar border-primary"></span>
                      </span>
                      <span class="progress-right">
                        <span class="progress-bar border-primary"></span>
                      </span>
                      <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                        <div class="h4 font-weight-bold" style="color:white;"><?= $diag['hasil_probabilitas'] * 100 ; ?><sup class="small" style="color:white;">%</sup></div>
                      </div>
                    </div>
                    <!-- END -->
                  </div>
                </div>
              <?php endforeach; ?>
            </div>



            <div class="row">
              <h5 style="color:white;">Berdasarkan Gejala-Gejala yang telah dipilih,maka komputer anda mengalami:</h5>
              <br>
              <?php foreach ($tertinggi as $tinggi) : ?>
                <?php
                if ($tinggi['id_kerusakan'] == 1) {
                  $tinggi['id_kerusakan'] = 'Rusak Pada IC Power';
                } elseif ($tinggi['id_kerusakan'] == 2) {
                  $tinggi['id_kerusakan'] = 'Rusak Pada IC VGA';
                } elseif ($tinggi['id_kerusakan'] == 3) {
                  $tinggi['id_kerusakan'] = 'Rusak pada Inverter/gangguan pada fleksibel kabel';
                } elseif ($tinggi['id_kerusakan'] == 4) {
                  $tinggi['id_kerusakan'] = 'Rusak pada LCD';
                } elseif ($tinggi['id_kerusakan'] == 5) {
                  $tinggi['id_kerusakan'] = 'Rusak pada Keyboard';
                }

                ?>
                <div class="col-md-5 animate-box">
                  
                    <h2><b style="color:white; font-size:20px;"><?= $tinggi['id_kerusakan']; ?></b></h2>
                  
                </div>
              <?php endforeach; ?>
            </div>
            <br>

            <?php foreach ($detail as $det) : ?>
              <div class="row d-flex center">
                <div class="col-md-8 d-flex ftco-animate">
                  <div class="blog-entry justify-content-end">
                    
                    <div class="text mt-3 float-right d-block">
                      <h4 style="color:white;">Solusi : </h4>
                      <p style="color:white; text-align:justify;"><?= $det['solusi']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>