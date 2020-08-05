        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('s02_thaj/create'),'Create', 'class="btn btn-primary"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
                <form action="<?php echo site_url('s02_thaj/index'); ?>" class="form-inline" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                        <span class="input-group-btn">
                            <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a href="<?php echo site_url('s02_thaj'); ?>" class="btn btn-default">Reset</a>
                                    <?php
                                }
                            ?>
                          <button class="btn btn-primary" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>TahunAjaran</th>
		<th>SaldoAwal</th>
		<th>Action</th>
            </tr><?php
            foreach ($s02_thaj_data as $s02_thaj)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $s02_thaj->TahunAjaran ?></td>
			<td><?php echo $s02_thaj->SaldoAwal ?></td>
			<td style="text-align:center" width="200px">
				<?php
				echo anchor(site_url('s02_thaj/read/'.$s02_thaj->idthaj),'Read');
				echo ' | ';
				echo anchor(site_url('s02_thaj/update/'.$s02_thaj->idthaj),'Update');
				echo ' | ';
				echo anchor(site_url('s02_thaj/delete/'.$s02_thaj->idthaj),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
		<?php echo anchor(site_url('s02_thaj/excel'), 'Excel', 'class="btn btn-primary"'); ?>
		<?php echo anchor(site_url('s02_thaj/word'), 'Word', 'class="btn btn-primary"'); ?>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div>
