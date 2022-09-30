@extends('back.layout.masterback')
@section('title','Quản lý mã giảm giá')
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
					<div class="panel-heading">Danh sách mã giảm giá</div>
					<div class="panel-body">
                        @include('error.note')
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('/admin/add-coupon')}}" class="btn btn-primary">Thêm mã giảm giá</a>
								<table class="table table-bordered" style="margin-top:20px;">
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Tên mã giảm giá</th>
											<th>Mã giảm giá</th>
											<th>Số lượng mã</th>
											<th>Tính năng</th>
                                            <th>Lượng giảm(%/VND)</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
                                        @foreach($coupon as $cou)
                                            <tr>
                                                <td>{{$cou->coupon_id}}</td>
                                                <td>{{$cou->coupon_name}}</td>
                                                <td>{{$cou->coupon_code}}</td>
                                                <td>{{$cou->coupon_time}}</td>
                                                <td>
                                                    @if($cou->coupon_condition == '1')
                                                        Giảm theo %
                                                    @else
                                                        Giảm theo số tiền
                                                    @endif
                                                </td>
                                                <td>{{$cou->coupon_number}}</td>
                                                <td style="text-align: center">
                                                    <a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')" href="/admin/delete-coupon/{{$cou->coupon_id}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                                </td>
                                            </tr>
                                        @endforeach
									</tbody>
								</table>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection
