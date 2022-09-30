@extends('back.layout.masterback')
@section('title','Chỉnh sửa sản phẩm')
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->

		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">

				<div class="panel panel-primary">
					<div class="panel-heading">Sửa sản phẩm</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
									<div class="form-group" >
										<label>Tên sản phẩm</label>
										<input required type="text" name="name" class="form-control" value="{{$product->name}}">
									</div>
									<div class="form-group" >
										<label>Giá sản phẩm</label>
										<input required type="number" name="price" class="form-control" value="{{$product->price}}">
									</div>
									<div class="form-group" >
										<label>Ảnh sản phẩm</label>
										<input id="img" type="file" name="img" class="form-control hidden" onchange="changeImg(this)">
					                    <img id="avatar" class="thumbnail" width="300px" src="front/img/product/detail/product-{{$product->id}}.jpg">
									</div>
									<div class="form-group" >
										<label>Khuyến mãi</label>
										<input required type="text" name="promotion" class="form-control" value="{{$product->discount}}">
									</div>
                                    <div class="form-group" >
                                        <label>Số lượng</label>
                                        <input required type="text" name="qty" class="form-control" value="{{$product->qty}}">
                                    </div>
									<div class="form-group" >
										<label>Trạng thái</label>
										<select required name="status" class="form-control">
											<option value="1">Còn hàng</option>
											<option value="0">Hết hàng</option>
					                    </select>
									</div>
									<div class="form-group" >
										<label>Miêu tả</label>
										<textarea class="ckeditor" required name="description" >{{$product->description}}</textarea>
									</div>
									<div class="form-group" >
										<label>Danh mục</label>
										<select required name="cate" class="form-control">
                                            @if($product->product_category_id == 1)
                                                <option value="1" selected>Bedroom</option>
                                                <option value="2">Dinningroom</option>
                                                <option value="3">Kitchen</option>
                                                <option value="5">Bathroom</option>
                                            @elseif($product->product_category_id == 2)
                                                <option value="1" >Bedroom</option>
                                                <option value="2" selected>Dinningroom</option>
                                                <option value="3">Kitchen</option>
                                                <option value="5">Bathroom</option>
                                            @elseif($product->product_category_id == 3)
                                                <option value="1" >Bedroom</option>
                                                <option value="2" >Dinningroom</option>
                                                <option value="3" selected>Kitchen</option>
                                                <option value="5">Bathroom</option>
                                            @else
                                                <option value="1" >Bedroom</option>
                                                <option value="2">Dinningroom</option>
                                                <option value="3">Kitchen</option>
                                                <option value="5" selected>Bathroom</option>
                                            @endif
					                    </select>
									</div>
                                    <div class="form-group" >
                                        <label>Tag</label>
                                        <input required type="text" name="tag" class="form-control" value="{{$product->tag}}">
                                    </div>
                                    <div class="form-group" >
                                        <label>Hãng</label>
                                        <select required name="brand" class="form-control">

                                                <option value="{{$product->brand_id}}">{{$product->brand_id}}</option>

                                        </select>
                                    </div>
									<div class="form-group" >
										<label>Sản phẩm nổi bật</label><br>
                                        @if($product->featured == 1)
										    Có: <input type="radio" checked name="featured" value="1">
                                            Không: <input type="radio" name="featured" value="0">
                                        @else
                                            Có: <input type="radio" name="featured" value="1">
										    Không: <input type="radio" checked name="featured" value="0">
                                        @endif
									</div>
									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="#" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
                            {{@csrf_field()}}
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->

@endsection
