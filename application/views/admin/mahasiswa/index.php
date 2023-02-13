<!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-xs-12">
        	<table class="table table-bordered table-responsive">
        		<thead>
        			<th>No</th>
        			<th>Nama Lengkap</th>
        			<th>Jenis Kelamin</th>
        			<th>Email</th>
        			<th>Alamat</th>

        		</thead>
        		<tbody>
        			<?php $i = 1;
        			foreach($mahasiswa as $row){ ?>
        			<tr>
        				<td><?php echo $i++; ?></td>
        				<td><?php echo $row->nama_kepanjangan; ?></td>
        				<td><?php echo $row->jk; ?></td>
        				<td><?php echo $row->email; ?></td>
        				<td><?php echo $row->alamat; ?></td>
        			</tr>
        		<?php } ?>
        		</tbody>
        	</table>
        </div>
      </div>
    </section>