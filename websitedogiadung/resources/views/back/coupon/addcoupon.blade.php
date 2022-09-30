@extends('back.layout.masterback')
@section('title','Thêm mã giảm giá')
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Mã Giảm Giá</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Thêm giảm giá</div>
					<div class="panel-body">
                        @include('error.note')
						<form method="post" action="{{URL::to('/admin/add-coupon-code')}}">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên mã giảm giá</label>
										<input type="text" name="coupon_name" class="form-control">
									</div>
									<div class="form-group" >
										<label>Mã giảm giá</label>
										<input type="text" name="coupon_code" class="form-control">
									</div>
									<div class="form-group" >
										<label>Số lượng mã</label>
										<input type="number" name="coupon_time" class="form-control">
									</div>
									<div class="form-group" >
										<label>Tính năng mã</label>
                                        <select name="coupon_condition" class="form-control">
                                            <option value="0">----Chọn----</option>
                                            <option value="1">Giảm theo %</option>
                                            <option value="2">Giảm theo tiền</option>
                                        </select>
									</div>
                                    <div class="form-group" >
                                        <label>Nhập số % hoặc số tiền giảm</label>
                                        <input type="text" name="coupon_number" class="form-control">
                                    </div>
									<input type="submit" name="add_coupon" value="Thêm" class="btn btn-primary">
									<a href="#" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
                            {{csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection
