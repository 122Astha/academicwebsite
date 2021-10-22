@extends('admin.layout.app')

@section('content')
		<!--begin::Entry-->
					<div class="d-flex flex-column-fluid">
						<!--begin::Container-->
						<div class="container">
							<!--begin::Card-->
							<div class="card card-custom">
								<!--begin::Body-->

								<section class="content">
									<div class="container-fluid">
										<div class="row">
											<!-- left column -->
											<div class="col-md-12">
												<div class="card card-primary">
													<div class="card-header">
														<h3 class="card-title">Manage Why Choose Us</h3><a href="{{ route('whychooseus.create') }}"><button class="p-2 rounded btn-primary">Add whychooseus</button></a>
													</div>
                                                            @if ($message = Session::get('success'))
														<div class="alert alert-success">
															<p>{{ $message }}</p>
														</div>
													@endif

													<!-- /.card-header -->
													<div class="card-body">
														<table id="example1" class="table table-bordered table-striped">
															<thead>
																<tr>
																	<th>S.N.</th>
																	<th>Action</th>
																	<th>whychooseus Heading</th>
																	<th>whychooseus Text</th>
																	<th>whychooseus Imglink</th>
																	<th>Status</th>
																</tr>
															</thead>
															<tbody>
														@foreach ($whychooseus as $whychooseuses)


																	<tr>
																		<td>{{ $loop->index+1 }}</td>
																		<td>
                                                                            <a href="{{ route('whychooseus.edit', $whychooseuses->id) }}"><button class="p-2 rounded btn-primary">Edit</button></a>
																		<form action="{{ route('whychooseus.destroy', $whychooseuses->id) }}" method="post">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" name="submit" class="p-2 rounded btn-danger">Delete</button>

                                                                        </form>
																		</td>
																		<td>{{ $whychooseuses->heading }}</td>
																		<td>{{ $whychooseuses->text }}</td>
																		<td>{{ $whychooseuses->imglink }}</td>
																		<td>{{ $whychooseuses->status }}</td>

																	</tr>
 																	@endforeach
																</tfoot>
														</table>
														<div class="row">
															<div class="col-md-12">
																<div class="text-center">
																	{{$whychooseus->links()}}
																</div>
															</div>
														</div>
													</div>
													<!-- /.card-body -->
												</div>
											</div>
											<!--/.col (left) -->
										</div>
										<!-- /.row -->
									</div><!-- /.container-fluid -->
								</section>
								<!--end::Body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Entry-->
@endsection
