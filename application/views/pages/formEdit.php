<div class="container">
	<div class="row">
		<div class="col-md-offset-3 col-md-6">
        <br/>
			<div class="jumbotron">
				<h2 class="text-center">Edit Jadwal</h2>
				<hr>
				<form class="form-group" method="post" action="<?=base_url('home/save/').$jadwal->id?>">
					<div class="form-group">
						<label>Hari : </label>
						<input type="text" class="form-control" name="hari" value="<?=$jadwal->hari?>">
					</div>
					
					<div class="form-group">
						<label>Mata Kuliah : </label>
						<input type="text" class="form-control" name="matkul" value="<?=$jadwal->mata_kuliah?>">
                    </div>
                    <div class="form-group">
						<label>Dosen : </label>
						<input type="text" class="form-control" name="dosen" value="<?=$jadwal->dosen?>">
                    </div>
                    <div class="form-group">
						<label>Ruang Kelas : </label>
						<input type="text" class="form-control" name="ruang" value="<?=$jadwal->ruang?>">
					</div>
                    <label>Jam Masuk dan keluar: </label>
					<div class="form-group form-inline">
						
                        <div class="input-group col-md-5">
                            <div class='input-group date' id='datetimepicker1'>
                                <input type='text' class="form-control" name="masuk" value="<?=$jadwal->w_masuk?>"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-time"></span>
                                </span>
                            </div>
                        </div>
                        -
                        <div class="input-group col-md-5">
                            <div class='input-group date' id='datetimepicker2'>
                                <input type='text' class="form-control" name="keluar" value="<?=$jadwal->w_keluar?>"/>
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
