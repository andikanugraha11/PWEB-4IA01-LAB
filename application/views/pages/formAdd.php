<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
        <br/>
			<div class="jumbotron">
				<h2 class="text-center">Masukan Jadwal</h2>
				<hr>
				<form class="form-group" method="post" action="<?=base_url('home/save')?>">
					<div class="form-group">
						<label>Hari : </label>
						<input type="text" class="form-control" placeholder="Masukan Hari" name="hari">
					</div>
					
					<div class="form-group">
						<label>Mata Kuliah : </label>
						<input type="text" class="form-control" placeholder="Masukan Mata Kuliah" name="matkul">
                    </div>
                    <div class="form-group">
						<label>Dosen : </label>
						<input type="text" class="form-control" placeholder="Masukan Namam Dosen" name="dosen">
                    </div>
                    <div class="form-group">
						<label>Ruang Kelas : </label>
						<input type="text" class="form-control" placeholder="Masukan Ruangan" name="ruang">
					</div>
                    <label>Jam Masuk dan keluar: </label>
					<div class="form-group form-inline">
						
                        <div class="input-group col-md-5">
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" name="masuk" placeholder="Masukan Jam Masuk"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                        </div>
                        -
                        <div class="input-group col-md-5">
                            <div class='input-group date' id='datetimepicker2'>
                                <input type='text' class="form-control" name="keluar" placeholder="Masukan Jam Keluar"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                        </div>
					</div>

					<button type="submit" class="btn btn-primary btn-block btn-lg">Simpan</button>
					<a class="btn btn-warning btn-block btn-lg" href="<?=base_url('home')?>"> Kembali</a>
				</form>
			</div>
		</div>
	</div>
    
</div>
