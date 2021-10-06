<div class="container-fluid messys">
	<div class="text-name">
		<div class="row">
			<div class="col-5">
				<h3 style="margin: 10px auto  auto 20px;">Danh sách Lỗi(List Error)</h3>
			</div>
			<div class="col-7 clearfix" >
				<button type="button" class="btn btn-primary btnadd" style="float: right; margin: 10px 20px 10px auto;"  onclick="cms_vsell_import();"><i class="fa fa-plus">
				</i> ADD</button>
			</div>
			</div>
			</div>
	<div class="main-space"></div>
	<div class="seachname">
				<div class="row">
					<div class="col-5"><input type="text" class="form-control" placeholder="Enter Name Error" ></div>	
					<div class="col-7 form-inline">
						<div class="" ><select class="form-control">
							<option value="0">ĐÃ Xử Lý</option>
							<option value="1">Chưa Xử Lý</option>
						</select></div>	
						<div class="col-md-2" style="margin-right: 10px;"><select class="form-control">
							<option value="0">MES </option>
							<option value="1">EMS</option>
						</select></div>
						<div><input type="text" readonly name="" placeholder="Ngay" class="form-control"></div>
						<div class="col btnseach" ><input type="button" name="Seach" value="Seach" class="btn btn-primary" style="float: right;"></div>
					</div>
				</div>
	</div>
	<div class="main-space"></div>
	<div class="row">
		<table class="table table-bordered table-hover table-striped" style="overflow: scroll;">
			<tr style="background-color:#0000FF	 ; color: white; text-align: center;overflow: scroll;">
				<td width="10px"> TT</td>
				<td width="110px"> Ngày</td>
				<td width="60px">Hệ Thống</td>
				<td width="100px">Mã Lỗi</td>
				<td width="100px">Phân loại</td>
				<td width="450px">Lỗi</td>
				<td width="450px">Nguyên Nhân</td>
				<td width="350px">Khắc Phục</td>
				<td width="">Image</td>
			</tr>
				<?php
					if(isset($data)? $data : null):
				  foreach($data['_list_mes'] as $key=>$item):
				  	?>
			<tr>
				<td><?php echo $key +'1'; ?> </td>
				<td><?php echo $item['mes_date']  ?></td>
				<td><?php echo (!empty($item['hana_sys']) ? $item['hana_sys'] : '') ?></td>
				<td><?php echo $item['mes_errorcode'] ?></td>
				<td><?php echo $item['mes_classify'] ?></td>
				<td><?php echo $item['mes_nameerror'] ?></td>
				<td><?php echo $item['mes_cause'] ?></td>
				<td><?php echo $item['mes_repair'] ?></td>
				<td><?php echo $item['mes_image'] ?></td>
			</tr>
			<?php 
				endforeach;
  ?>
  <?php endif; ?>
		</table>
	</div>

</div>
