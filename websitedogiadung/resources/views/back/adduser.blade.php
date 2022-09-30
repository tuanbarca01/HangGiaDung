@extends('back.layout.masterback')
@section('title','Thêm người dùng')
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Thêm người dùng</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Thêm người dùng</div>
					<div class="panel-body">
                        @include('error.note')
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên người dùng</label>
										<input required type="text" name="name" class="form-control">
									</div>
									<div class="form-group" >
										<label>email</label>
										<input required type="email" name="email" class="form-control">
									</div>
									<div class="form-group" >
										<label>Avatar</label>
										<input id="img" type="file" name="img" class="form-control" onchange="changeImg(this)">
									</div>
									<div class="form-group" >
										<label>Password</label>
										<input required type="text" name="password" class="form-control">
									</div>
                                    <div class="form-group" >
                                        <label>Level</label>
                                        <input required type="number" name="level" class="form-control">
                                    </div>
									<div class="form-group" >
										<label>Miêu tả</label>
										<textarea class="ckeditor" required name="description"></textarea>
									</div>
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="./admin/user" class="btn btn-danger">Hủy bỏ</a>
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
