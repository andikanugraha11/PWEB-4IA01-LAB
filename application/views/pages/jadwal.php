<div class="container">
    <br><br>
    <div class="well" align="center">
        <h1>Jadwal Perkuliahan</h1>
        <h2>4IA01</h2>
        <a class="btn btn-primary text-right" href="<?=base_url('Home/addJadwal')?>">Tambah</a><br/><br/>
        <table class="table table-striped text-center center-table">
                <tr class="info">
                    <th class="text-center" rowspan="2">No</th>
                    <th class="text-center" rowspan="2">Hari</th>
                    <th class="text-center" rowspan="2">Mata Kuliah</th>
                    <th class="text-center" colspan="2">Waktu</th>
                    <th class="text-center" rowspan="2">Ruang</th>
                    <th class="text-center" rowspan="2">Dosen</th>
                    <th class="text-center" rowspan="2">Aksi</th>
                    <tr class="info">
                        <th class="text-center">Masuk</th>
                        <th class="text-center">Keluar</th>
                    </tr>
                    
                </tr>
                <?php
                    $number = 0; 
                    foreach($jadwals as $jadwal) { 
                        $number +=1;
                ?>
                    <tr>
                        <td><?=$number?></td>
                        <td><?=$jadwal->hari?></td>
                        <td><?=$jadwal->mata_kuliah?></td>
                        <td><?=$jadwal->w_masuk?></td>
                        <td><?=$jadwal->w_keluar?></td>
                        <td><?=$jadwal->ruang?></td>
                        <td><?=$jadwal->dosen?></td>
                        <td>
                            <a href="<?=base_url('home/editJadwal/').$jadwal->id?>" class="btn btn-warning fa fa-edit"></a>
                            <a href="<?=base_url('home/deleteJadwal/').$jadwal->id?>" class="btn btn-danger fa fa-trash"></a>
                        </td>
                    </tr>
                <?php }?>
            </table>
    </div>
</div>