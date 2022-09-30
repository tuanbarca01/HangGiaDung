@extends('back.layout.masterback')
@section('title','Quản lý người dùng')
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Người dùng</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Danh sách người dùng</div>
					<div class="panel-body">
                        @include('error.note')
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{asset('admin/user/add')}}" class="btn btn-primary">Thêm người dùng</a>
								<table class="table table-bordered" style="margin-top:20px;">
									<thead>
										<tr class="bg-primary">
											<th>ID</th>
											<th>Tên</th>
											<th>Email</th>
											<th width="20%">Password</th>
											<th>Level</th>
											<th>Tùy chọn</th>
										</tr>
									</thead>
									<tbody>
                                    @foreach($userlist as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>{{$user->email}}</td>
                                                <td>{{$user->password}}</td>
                                                <td>{{$user->level}}</td>
                                                <td>
                                                    <a href="{{asset('admin/user/edit/')}}/{{$user->id}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
                                                    <a onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này không?')" href="{{asset('admin/user/delete/')}}/{{$user->id}}" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
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
