<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<title>Edit Rak - Pakasam</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
<div class="section-header">
            <h1>Edit Rak</h1>
            <div class="section-header-button">
                <a href="<?=site_url('rak')?>" class="btn btn-primary">Kembali</a>
            </div>
          </div>
          <div class="section-body">

            <div class="card">
              <div class="card-header">
                Edit Rak
              </div>
                  <div class="card-body col-md-6">
                  <?php $validation =  \Config\Services::validation(); ?>
                      <form action="<?=site_url('rak/update/'. $rak->id_rak)?>" method="post"  autocomplete="off">
                      <input type="hidden" name="_method" value="PUT">
                          <div class="form-group">
                              <label>Rak</label>
                              <input type="text" name="rak" value="<?=$rak->rak?>" class="form-control <?=$validation->hasError('rak') ? 'is-invalid' : null ?>">
                              <div class="invalid-feedback">
                                  <?=$validation->getError('rak')?>
                              </div>
                          </div>
                          <div>
                              <button type="submit" class="btn btn-success">Simpan</button>
                              <button type="reset" class="btn btn-secondary">Reset</button>
                          </div>
                      </form>
                  </div>
            </div>
          </div>
</section>
<?= $this->endSection() ?>