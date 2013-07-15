<div id="content" class="span11">
<div class="row-fluid sortable">		
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon hdd"></i><span class="break"></span>
			<i class="halflings-icon plus-sign"></i><a href="<?php echo base_url(); ?>dashboard/bahan_baku/tambah">Tambah Data</a><span class="break"></span>
			Bahan Baku</h2>
		</div>
		<div class="box-content">
			<?php echo form_open("dashboard/bahan_baku/simpan",'class="form-horizontal"'); ?>
			  <fieldset>
			  
				<div class="control-group">
				  <label class="control-label">Nama Bahan</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" value="<?php echo $nama_bahan; ?>" name="nama_bahan" required />
				  </div>
				</div>
			  
				<div class="control-group">
				  <label class="control-label">Stok</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" value="<?php echo $stok; ?>" name="stok" required />
				  </div>
				</div>
			  
				<div class="control-group">
				  <label class="control-label">Jenis Satuan</label>
				  <div class="controls">
					<select name="id_jenis_satuan" required>
					<?php
						foreach($satuan->result_array() as $s)
						{
							if($s['id_jenis_satuan']==$id_jenis_satuan)
							{
					?>
							<option value="<?php echo $s['id_jenis_satuan']; ?>" selected="selected"><?php echo $s['satuan']; ?></option>
					<?php	
							}
							else
							{
					?>
							<option value="<?php echo $s['id_jenis_satuan']; ?>"><?php echo $s['satuan']; ?></option>
					<?php
							}
						}
					?>
					</select>
				  </div>
				</div>
								
				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Save changes</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			  <input type="hidden" name="id_param" value="<?php echo $id_param; ?>" />
			  <input type="hidden" name="st" value="<?php echo $st; ?>" />
			<?php echo form_close(); ?> 
		</div>
	</div>

</div>
</div>
</div>