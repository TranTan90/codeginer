<div class="addlist">
<div class=" container">
	<div class="main-space1"></div>
	<div class="mainlist">
		<div class="showerror"></div>
		<div class="row">
			<div class="col" >
				<div class=" form-inline">
					<div class="date form-group" style="margin-right:px;">
						<label class="col-8">Date</label>
						<input type="text"  readonly class="form-control col-8" id="mesdatetime"  value="<?php echo gmdate('d-m-Y',time()) ?>">
					</div>
					<div class="form-group" >
						<label for="sys" class="col-8">HỆ Thống</label>
					<select class="form-control col-8" id="messysname" >
						<option value="MES" > MES</option>
						<option value="EMS" > EMS</option>
					</select>
					</div>
						<div class="date form-group" >
						<label class="col-8">MÃ Lỗi</label>
						<input type="text"   class="form-control col-8" id="meserrocode"  value="">
					</div>
					
							<div class="date form-group" >
						<label class="col-8">Phân Loại</label>
						<input type="text"   class="form-control " id="mesclassify"  value="">
					</div>
							<div class="date form-group" >
						<label class="col-8">Lỗi</label>
						<textarea class="form-control" rows="3" cols="50" id="mesnameerror"></textarea>
					</div>
							<div class="date form-group" >
						<label class="col-8" style="text-align: center;" id="mescausesys">Nguyên Nhân</label>
						<textarea class="form-control"   rows="3" cols="50"></textarea>
						
					</div>
							<div class="date form-group">
						<label class="col-8">Khắc Phục</label>
						<textarea class="form-control" rows="3"  id ="mesrepairerror"cols="50"></textarea>
					</div>
		
				</div>
			</div>
		</div>
	</div>

	</div>
</div>
<div class="main-space"></div>
	<div class="btnupadte">
			<button type="button" class=" btn  btn-secondary"  onclick="cms_comback(window.location.href);"><i class="fa fa-backspace" ></i> BACK</button>
			<button type ="button" class="btn btn-primary"   onclick="cms_save_import();" style="margin:15px"><i class="fa fa-upload"></i> Update</button>
			 
</div><div class="main-space1">
</div>