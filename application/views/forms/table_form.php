<div class="table tabel_keluar" >
    <table id="tabel_out" class="table-bordered table-striped display nowrap" >
        <thead>
            <tr>
                <th width="50px" >No</th>
                <th width="200px" class="heading-tabel" >Tanggal</th>
                <th width="550px" class="heading-tabel" >Nama Barang</th>
                <th width="300px" class="heading-tabel" >SN PN MAC</th>
                <th width="150px" class="heading-tabel" >Jumlah</th>
                <th width="150px" class="heading-tabel" >Satuan</th>
                <th width="250px" class="heading-tabel" >Status Barang</th>
                <!-- kondisi di cek -->
                <th width="300px" class="heading-tabel" >Lokasi Pengunaan</th>
                <!-- jika perangkat keluar -->
                <!-- Kondisi untuk proyek -->
                <th width="400px" class="heading-tabel">Proyek</th>
                <th width="550px" class="heading-tabel">Keterangan</th>
                <th width="150px" class="heading-tabel">Requester</th>
                <th class="heading-tabel">Simpan</th> 
                <th class="heading-tabel">Hapus</th> 
            </tr>
        </thead>
        <tbody>
            <tr>
            <!-- id untuk primary key nantinya -->
            <input type="hidden" name="id_temp[]" class="id_temp" value="24">
            <!-- loop di mulai -->
            <?php
                $no = 1;
                foreach ($item_temp as $data) { ?>
            
            <!-- Nomor Urut -->
                <td><?php echo $no++; ?></td>
            <!--  Input Tanggal-->
                <td><input type="text" id="" name="tanggal-keluar[]" id="" class="form-control tanggal-keluar" value="<?php echo $data['tanggal']; ?>"></input></td>
            <!-- Nama Perangkat -->
                <td><input type="text" name="nama_perangkat[]" class="form-control" value="<?php echo $data['nama']; ?>" readonly></td>
            <!-- Serial Number Item sn pn mac-->
                <td><input type="text" class="form-control" name="sn[]" value="<?php echo $data['sn']; ?>" readonly></td>
            <!-- untuk kondisi untuk form barang kembali -->
                                <!-- Jumlah Unit -->
                <td>
                        <input name="jumlah_ambil[]" type="text" class="form-control" value="<?php echo $data['jumlah']; ?>" readonly>
                        <input name="satuan[]" type="hidden" class="form-control" value="<?php echo $data['satuan']; ?>" readonly >
                </td>
                <!-- Satuan -->
                <td>
                        <input type="text" value="Unit" class="form-control" readonly="">
                </td>
                    <!-- Status Perangkat (Rusak/2nd/Stock MDF/Baru) -->
                <td>
                    <!-- jika dia stock maka stock, jika di rusak maka FA rusak , jika dia second maka FA second -->
                    <input name="" class="form-control" value="Stock Baru" readonly >    
                </td>
                <!--
                //  Ada beberapa aturan di sini
                // jika RF tampilkan Form input keterangan Barang Kembali
                // jika rsk Tampilkan form input keterangan
                // 
                -->
                <td>
                    <!--  -->
                    <input type="hidden" class="form-control" readonly value="DI16102207105960">
                    <!-- <input type="hidden" name ="satuan[]" class="form-control" readonly value=""> -->
                    <input type="hidden" name ="kode_transaksi[]" class="form-control" readonly value="IN17010512014727">
                    <input type="hidden" name ="kode_bm[]" class="form-control" readonly value="DI16102207105960">
                    <!-- jika dia barang kembali -->
                                        <!-- khusus untuk keterangan barang keluar -->
                    <input name="lokasi_out[]" id="" class="form-control lokasi_pasang" placeholder="Lokasi Barang Keluar" height="" value = ""></input>
                </td>
                <!-- Data Proyek -->
                <td>
                    <div class="col-md-6">
                    <!-- untuk Proyek -->
                    <select name="kode_proyek[]" id="" class="kode_proyek form-control" id="form-projek">
                        <option id="" value="BBT/PA/332992/2017" selected ="selected">BBT-Conform-FTTH</option>    
                            <option id="" value="BBT/PA/332992/2017">BBT-Conform-FTTH</option>
                            <option id="" value="BBT/PA/27815454/2017">None Project</option>    
                            <option id="" value="BBT/PA/32997635/2017">Hotel Atmajaya</option>    
                            <option id="" value="BBT/PA/31094101/2017">FTTH Mandari Blue</option>    
                            <option id="" value="BBT/PA/35662583/2017">Backhaul Batu 9</option>    
                            <option id="" value="BBT/PA/1839068/2017">Backhaul Nirwana Garden</option>    
                            <option id="" value="BBT/PA/40211267/2017">FTTH Nirwana Garden</option>    
                            <option id="" value="BBT/PA/29884976/2017"></option>    
                            <option id="" value="BBT/PA/38592502/2017">FFTH Kelong Indah</option>    
                    </select>
                        <small><i><a href="" data-toggle="modal" data-target="#myModal3121">Add More Project Here</a></i></small>
                    </div>
                </td>
                <td>
                    <textarea name="Keterangan[]" id="" class="keterangan form-control" placeholder="Keterangan Barang Keluar" height="" cols="50"></textarea>
                </td>
                <td>
                <select name="pic[]" id="" class="pic form-control">
                    <option value="Ranzil" selected="selected">Ranzil</option>
                    <option value="Ranzil">Ranzil</option>
                    <option value="Tino">Tino</option>
                    <option value="Hadi Brata">Hadi Brata</option>
                    <option value="Lukman">Lukman</option>
                </select>
                </td>
                <td><label><button type="button" class="update_temp btn btn-info glyphicon glyphicon-save" id="" ></button></td>
                <td><label><button type="button" class="btn btn-danger glyphicon glyphicon-trash" id="data-kemodal" data-toggle="modal" data-target="#myModal312" data-kemodal="18A6F72BA1E2" data-kemodal2="Access Point TPLINK TLWA841ND" ></i></button></td>
            </tr>
            <!-- id untuk primary key nantinya -->
            <input type="hidden" name="id_temp[]" class="id_temp" value="25">
            <?php } ?>
            <?php //var_export($item_temp); ?>