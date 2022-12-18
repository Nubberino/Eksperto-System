<div class="section section-features">
  <div class="container">
    <h4 class="header-text text-center" style="color:black; font-weight:bold; font-family: Arrial;">Kerusakan Komputer</h4>
    <p style="font-size:20px; font-weight:none; text-align:center;margin-bottom:30px;">Pilih masalah yang dialami oleh komputer anda: </p>
    <div class="row">
      <form action="<?= base_url('diagnosa/hasil'); ?>" method="POST">
        <div class="boxes">
          <table>
            <?php foreach ($gejala as $g) : ?>
              <tr>
                <td>
                  <input style="width:28px;height:80px; margin-right: 25px;" type="checkbox" id="<?= $g['id_gejala']; ?>" name="id_gejala[]" value="<?= $g['id_gejala']; ?>">
                </td>
                <td colspan="2" style="font-size:20px;">
                  <?= $g['kode_gejala']; ?> | Apakah <?= $g['nama_gejala']; ?> ?
                </td>
              </tr>
            <?php endforeach; ?>
          </table>
          <center>
            <button style="margin-top:40px;height:50px; width:150px; background-color: #2146C7; color:white; border:none; border-radius:20px; font-size:20px;" type="submit">Solution</button>
          </center>
        </div>
      </form>
    </div>
  </div>
</div>