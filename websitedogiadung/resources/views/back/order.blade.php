@extends('back.layout.masterback')
@section('title','Quản lý đơn hàng')
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Đơn Hàng</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách đơn hàng</div>
					<div class="panel-body">
                        @include('error.note')
						<div class="bootstrap-table">
							<div class="table-responsive">

                                <table class="table table-bordered" style="margin-top:20px;">
									<thead>
										<tr class="bg-primary">
											<th>Order-ID</th>
											<th>Ngày tạo</th>
                                            <th width="20%">Họ và tên khác hàng</th>
                                            <th>Email</th>
                                            <th>Số lượng</th>
											<th>Tổng đơn</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
                                    @foreach($ordercus as $cus)
                                        @foreach($orderlist as $order)
                                                <tr>
                                                    <td>{{$order->order_id}}</td>
                                                    <td>{{$order->created_at}}</td>

                                                    <td>{{$cus->first_name}} {{$cus->last_name}}</td>
                                                    <td>{{$cus->email}}</td>
                                                    <td>{{$order->qty}}</td>
                                                    <td>{{number_format($order->total,0,',','.')}} VND</td>
                                                    <td>
                                                        <a onclick="return confirm('Bạn có chắc muốn xóa đơn hàng này không?')" href="{{asset('admin/order/delete/')}}/{{$order->order_id}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
                                                    </td>
                                                </tr>
                                        @endforeach
                                        @break
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
